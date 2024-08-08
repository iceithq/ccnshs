<?php

class Layout {

  var $layout;
  var $theme;
  var $obj;

  function __construct($layout = 'admin_layout') {
    $this->layout = $layout;
    $this->theme = config_item('admin_theme');
    $this->obj = &get_instance();
  }

  function view($view, $data = null) {
    $data['content'] = $this->obj->load->view($this->theme . '/' . $view, $data, TRUE);
    $this->obj->load->view($this->theme . '/' . $this->layout, $data);
  }

  function set_layout($layout) {
    $this->layout = $layout;
  }

  function set_theme($theme) {
    $this->theme = $theme;
  }

  function get_theme() {
    return $this->theme;
  }

}
