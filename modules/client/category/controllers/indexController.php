<?php

function construct() {
      load_model('index');
}


function indexAction() {
    $id = $_GET['id'];
    $categories=get_list_categories();
    $data['categories']= $categories;
    $data['productions'] = get_one_production($id);
    $categories =  get_one_category($id);
    $cat=$categories['id'];
    $data['pro_cat']=get_list_pro_by_catid($cat);
    load_view('index', $data);
}  

