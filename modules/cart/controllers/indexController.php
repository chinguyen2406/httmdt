<?php
function construct(){
    load_model('index');
    // load('helper', 'url');
    // load('lib', 'validation');
}

function showAction(){
    load_view('show');
}
function deleteAction(){
    load_view('delete');
}
function addAction(){ 
     load_view('add');
}
function deleteallAction(){
     load_view('deleteall');
}
function updateAction(){
    load_view('update');
}
