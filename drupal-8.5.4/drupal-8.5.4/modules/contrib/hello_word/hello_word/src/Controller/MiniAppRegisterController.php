<?php

namespace Drupal\hello_world\Controller;

use Drupal\user\RegisterForm;
use Symfony\Component\HttpFoundation\Request;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal;
use \Exception;

class MiniAppRegisterController extends RegisterForm{
    public function register(Request $request) {
        $response = new AjaxResponse();
        $content = $request->getContent();
        $paramater = json_decode($content, true);
        $data = array(
        'name' => $paramater['name'], 
        'pass' => $paramater['pass'], 
        'timezone' => $paramater['timezone'],
        'mail' => $paramater['mail'],
        'status' => 1,
        'field_nickname' => $paramater['field_nickname'],
        'user_picture' => $paramater['user_picture'],
        'field_wechatpicture‎' => $paramater['chatpicture'],
        'roles' => array()
        );
        $user = Drupal::entityManager()->getStorage('user')->create($data);
        try {
        $result = $user->save();
        }catch (Exception $e) {
        echo ($e.msgfmt_get_error_message);
        }
        return $response;
    }
}