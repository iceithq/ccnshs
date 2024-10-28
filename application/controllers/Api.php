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
class Api extends CI_Controller
{
  var $user_token_model;
  var $post_model;
  var $user_model;

  var $input;

  function __construct()
  {
    parent::__construct();
    $this->load->model('user_token_model');
    $this->load->model('post_model');
    $this->load->model('user_model');
    header('Content-Type: application/json');
  }

  function hello()
  {
    echo json_encode('Hi!');
  }

  function login()
  {
    if ($this->input->post()) {
      list($username, $password) = login_form();
      $user = $this->user_model->read_by_username_and_password($username, $password);
      if ($user) {
        $user_token = user_token_form($user->id);
        $token = $this->user_token_model->save($user->id);
        echo json_encode(array('status' => 'OK', 'token' => $token));
      } else {
        echo json_encode(array('status' => 'Invalid token'));
      }
    } else {
      echo json_encode(array('status' => 'Request should be POST'));
    }
  }

  function feature_post()
  {
    if ($this->input->post()) {
      $token = post('token');
      $user_token = $this->user_token_model->read_by_token($token);
      if ($user_token) {
        $is_featured = post('is_featured');
        $post = array('is_featured' => $is_featured);
        $this->post_model->update($post, post('post_id'));
        echo json_encode(array('status' => 'OK', 'is_featured' => $is_featured));
      } else {
        echo json_encode(array('status' => 'Invalid token'));
      }
    } else {
      echo json_encode(array('status' => 'Request should be POST'));
    }
  }
}
