<?php

function construct() {
  // request_auth(false);
    load_model('index');
}

function indexAction() {
    request_auth(true);
    $data['categories'] = get_list_categories();
    load_view('index', $data);
}

function createAction() {
   request_auth(true);
    load_view('create');
}


