<?php

/**
 * cmsInferno
 *
 * Simply blog
 *
 * Copyright (c) 2024 cmsInferno. All rights reserved.
 *
 * cmsInferno and its user interface are protected by trademark
 * and other pending or existing intellectual property
 * rights in the Philippines.
 */
class Layout
{
  var $layout;
  var $theme;
  var $obj;

  function __construct($layout = 'admin_layout')
  {
    $this->layout = $layout;
    $this->theme = config_item('admin_theme');
    $this->obj = &get_instance();
  }

  function view($view, $data = null)
  {
    $data['content'] = $this->obj->load->view($this->theme . '/' . $view, $data, TRUE);
    $this->obj->load->view($this->theme . '/' . $this->layout, $data);
  }

  function set_layout($layout)
  {
    $this->layout = $layout;
  }

  function set_theme($theme)
  {
    $this->theme = $theme;
  }

  function get_theme()
  {
    return $this->theme;
  }
}

function load_view($view, $data = null)
{
  $obj = &get_instance();
  $obj->load->view(get_theme() . '/' . $view, $data);
}

function load_view_if($condition, $view)
{
  if ($condition) {
    $obj = &get_instance();
    $obj->load->view($view);
  }
}

function get_theme()
{
  $obj = &get_instance();
  $obj->load->library('layout');
  return $obj->layout->get_theme();
}
