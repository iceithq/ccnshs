<?php

class MY_Controller extends CI_Controller {

  var $layout;

  function __construct() {
    parent::__construct();
    $this->layout->set_theme(config_item('theme'));
    $this->layout->set_layout('layout');
    $this->output->enable_profiler(config_item('enable_profiler', false));
  }

}

class MY_UserController extends CI_Controller {

  function __construct() {
    parent::__construct();
  }

}
