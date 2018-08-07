<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Ajax\AjaxResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Drupal;
use Drupal\Core\Entity\EntityInterface;
use \Drupal\node\Entity\Node;
use \Drupal\file\Entity\File;
use Drupal\comment\Entity\Comment;


class HelloController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   */
  public function content() {
    echo "aaa";
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello, World!'),
    ];
  }


  public function create_content() {
    $response = new AjaxResponse();
    $request = \Drupal::request();
    $paramater = $request->request->all();
    $length = $paramater['length'];
    $target_id = [];
    for ($i = 0; $i < $length; $i++) {
      $name = 'upfiles_' . $i;
      $fileData = $_FILES[$name];

      $data = file_get_contents($fileData['tmp_name']);
      $file = file_save_data($data, "public://file/" . time(). $fileData['name'], FILE_EXISTS_REPLACE);


      array_push($target_id, [
        'target_id' => $file->id(),
        'alt' => 'Sample',
        'title' => 'Sample File'
      ]);
    }

    $data = array(
      'type' => 'test1', 
      'title' => $paramater['title'], 
      'body' => $paramater['body'],
      'field_description' => $paramater['description'],
      'field_video' => $target_id
    );
    
    $node = Drupal::entityManager()
      ->getStorage('node')
      ->create($data);
    $node->save();
    return $response;
  }

// publish article in test1
  function createContentByWechart (Request $request) {
    $response = new AjaxResponse();
    $content = $request->getContent();
    $paramater = json_decode($content, true);
    $fileIds = $paramater['fileIds'];
    $target_id = [];
    $tags = [];

    for ($i = 0; $i < count($fileIds); $i++) {
      array_push($target_id, [
        'target_id' => $fileIds[$i],
        'alt' => 'Sample',
        'title' => 'Sample File'
      ]);
    }

    if ($paramater['hasImg']) {
      array_push($tags, [
        'target_id' => '10',
        '_weight' => '0',
      ]);
    }

    if ($paramater['hasVideo']) {
      array_push($tags, [
        'target_id' => '4',
        '_weight' => '1',
      ]);
    }

    $data = array(
      'type' => 'test1', 
      'title' => $paramater['title'], 
      'body' => $paramater['body'],
      'field_video' => $target_id,
      'field_tags' => $tags
    );

    $node = Drupal::entityManager()
      ->getStorage('node')
      ->create($data);
    $result = $node->save();

    $response->setJson($result);
    return $response;
  }

// update image and video in wechat mini program
  function uploadFile (Request $request) {
    $response = new JsonResponse();
    $file = $_FILES['file'];
    $data = file_get_contents($file['tmp_name']);
    // drupal自带的方法，file文件夹必须存在。
    $res = file_save_data($data, "public://file/" . time(). $file['name'], FILE_EXISTS_REPLACE);
    $response->setJson($res->id());
    return $response;
  }

  function miniAppCreateComment(Request $request, EntityInterface $entity, $field_name, $pid = NULL) {
    $response = new JsonResponse();
    $account = $this->currentUser();

    $id = $account->id();

    $value = $request->request->get('commentBody');
    $values = [
      // These values are for the entity that you're creating the comment for, not the comment itself.
      'entity_type' => 'node',            // required.
      'entity_id'   => $entity->id(),     // required.
      'field_name'  => 'comment',         // required.
   
      // The user id of the comment's 'author'. Use 0 for the anonymous user.
      'uid' => $id,                         // required.
      'pid' => $pid,
      // These values are for the comment itself.
      'comment_type' => 'comment',        // required.
      'subject' => 'My Awesome Comment',  // required.
      'comment_body' => $value,            // optional.
   
      // Whether the comment is 'approved' or not.
      'status' => 1,                      // optional. Defaults to 0.
    ];
   
    // This will create an actual comment entity out of our field values.
    $comment = Comment::create($values);
   
    // Last, we actually need to save the comment to the database.
    $comment->save();
    return $response;
  }

  function editContentByWeChat (Request $request) {
    $response = new JsonResponse();
    $paramater = $request->request->all();
    $fileIds = $paramater['fileIds'];
    $target_id = [];
    $tags = [];
    $nid = $paramater['nid'];

    for ($i = 0; $i < count($fileIds); $i++) {
      array_push($target_id, [
        'target_id' => $fileIds[$i],
        'alt' => 'Sample',
        'title' => 'Sample File'
      ]);
    }

    if ($paramater['hasImg'] == "true") {
      array_push($tags, [
        'target_id' => '10',
        '_weight' => '0',
      ]);
    }

    if ($paramater['hasVideo'] == "true") {
      array_push($tags, [
        'target_id' => '4',
        '_weight' => '1',
      ]);
    }

    $node = Node::load($nid);
    $node->set('title', $paramater['title']);
    $node->set('body', $paramater['body']);
    $node->set('field_video', $target_id);
    $node->set('field_tags', $tags);
    $node->save();

    return $response;
  }

}