<?php

class Test extends CI_Controller {

  function __construct() {
    parent::__construct();
  }

  function a() {
  }

  function hello() {
    $data['message'] = 'Hello, friend!';
    $this->load->view('test/hello', $data);
  }

}
