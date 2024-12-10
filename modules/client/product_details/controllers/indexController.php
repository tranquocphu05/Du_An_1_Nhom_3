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
    // $categories=get_list_categories();
    // $data['categories']= $categories;
    //-------
    // bình luận trên trang chi tiết
    $data['comments'] =get_list_comments($id);
    get_list_view(["views"=>$production['views']+1] ,$id);
    //--------
    //nếu có phòng thì chuyển sang trang chi tiết

    if ($production) {
        load_view('index', $data);
    } else {
        header('Location: /du_an_1_Nhom3/?role=client');
    }
  
}

// bình luận trên trang
function addCommentsPostAction(){
     //request_auth(true);
     if(is_auth()){
        $product_id = $_GET["id"];
        $description = $_POST["description"];
        $created_id = $_SESSION["auth"]['id'];
        $created_at = date("Y-m-d H:i:s");
        $data = [
            'description' => $description,
            'product_id' => $product_id,
            'created_id' => $created_id,
            'created_at' => $created_at
        ];
      
        add_comments($data);
        header("location:/du_an_1_Nhom3/?role=client&mod=product_details&action=index&id=${product_id}");
     }else{
        header("location:/du_an_1_Nhom3/?role=client&mod=auth");

     }
   

}