<?php

function construct() {
      load_model('index');
}


function indexAction() {
    $id = $_GET['id'];
    //load_room->home_details
    
    $production = get_one_production($id);
    $data['productions' ] = $production;
    //-----

    //load_room_cùng loại ->trang chi tiết
    $cat=$production['category_id'];
    $data['pro_cat']=get_list_pro_by_catid($cat);
    if ($production) {
        load_view('index', $data);
    } else {
        header('Location: /du_an_1_Nhom3/?role=client');
    }
  
}
