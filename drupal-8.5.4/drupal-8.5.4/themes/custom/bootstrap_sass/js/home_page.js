var $ = jQuery;
//alert("2222");
$('.views-field-comment-count').click(function(){
    //alert("11111");
    //console.log($(this).parent().children(".views-field-title").find("a"));
    window.location.href=$(this).parent().children(".views-field-title").find("a")[0].href;
})

function create () {
    window.location.href="/node/add/test1";
}

$('#img-responsive').click(function () {
    $(this).toggleClass('min');
    $(this).toggleClass('max');
});