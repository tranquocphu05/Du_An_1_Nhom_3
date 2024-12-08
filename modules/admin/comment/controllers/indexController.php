<?php
function construct(){
    load_model('index');
}

function indexAction(){
    request_auth(true);
    $data['comment']=manage_comments();
    load_view('index', $data);
}
function detailcommentAction(){
    request_auth(true);
    $id=$_GET['id'];
    $data['comment']=get_list_comments($id);
    load_view('detailcomment',$data);
}
function deletecommentAction(){
    request_auth(true);
    $id=$_GET["id"];
    delete_comment($id);
    header("location:/du_an_1_Nhom3/?role=admin&mod=comment");
}
?>