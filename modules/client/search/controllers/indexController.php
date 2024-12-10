<?php

function construct() {
      load_model('index');
}


function indexAction() {
    
    // $keyword=$_POST['keyword'];
    // $data['pro_cat']=get_list_pro_by_catid($keyword);
    load_view('index');
  
    
}  
function indexPostAction(){
    if(isset($_POST['search'])){
        $keyword=$_POST['keyword'];
        $data['pro_cat']=get_list_pro_by_catid($keyword);
        load_view('index', $data);
    }
}

