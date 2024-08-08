<?php

class Api extends CI_Controller {

  function __construct() {
    parent::__construct();
    header('Content-Type: application/json');
  }

  function hello() {
    echo json_encode(array('message' => 'hello world'));
  }

}
