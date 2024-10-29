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
class User_tokens extends MY_UserController
{
  var $user_token_model;

  var $input;
  var $form_validation;

  function __construct()
  {
    parent::__construct();
    $this->load->model('user_token_model');
  }

  function index()
  {
    $data['user_tokens'] = $this->user_token_model->find_all();
    $this->layout->view('user_tokens/index', $data);
  }

  function add()
  {
    if ($this->input->post()) {
      $user_token = user_token_form();
      user_token_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->user_token_model->save($user_token);
        redirect('user_tokens');
      }
    }
    $this->layout->view('user_tokens/add');
  }

  function edit($id)
  {
    if ($this->input->post()) {
      $user_token = user_token_form();
      user_token_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->user_token_model->update($user_token, $id);
        redirect('user_tokens');
      }
    }
    $data['user_token'] = $this->user_token_model->read($id);
    $this->layout->view('user_tokens/edit', $data);
  }

  function delete($id)
  {
    $this->user_token_model->delete($id);
    redirect('user_tokens');
  }
}
