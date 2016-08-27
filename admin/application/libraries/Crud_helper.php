<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_helper{
  
  function __construct(){}
  
  //**** Customer Profile Management ****//

  
  public static function add_tags($value='', $pkey=0){
      
      return '<a href="/admin/data/add_post_tags/'.$pkey.'" class="iframe fancybox">Add tags</a>';
  }

 
  
}
