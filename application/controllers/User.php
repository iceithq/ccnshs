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
class User extends MY_UserController
{
  var $post_view_model;

  var $layout;

  function __construct()
  {
    parent::__construct();
    $this->load->model('post_view_model');
  }

  function home()
  {
    $post_views = $this->post_view_model->find_group_by_day();
    // print_pre($post_views);
    list($column_chart_categories, $column_chart_data) = post_views_to_column_chart_data($post_views);
    // print_pre($column_chart_data);
    $data['column_chart_categories'] = $column_chart_categories;
    $data['column_chart_data'] = $column_chart_data;
    $this->layout->view('user/home', $data);
  }
}
