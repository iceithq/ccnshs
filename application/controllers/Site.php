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
class Site extends CI_Controller
{
  var $site_model;

  var $input;
  var $form_validation;
  var $layout;
  var $session;

  function __construct()
  {
    parent::__construct();
    $this->load->model('site_model');
  }

  function settings()
  {
    if ($this->input->post()) {
      $site = site_form();
      site_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->site_model->update($site, session('site-id'));
        $this->session->set_flashdata('message', 'Your site has been updated successfully!');
        redirect('site/settings');
      }
    }
    $data['site'] = $this->site_model->read(session('site_id'));
    $data['message'] = $this->session->flashdata('message');
    $this->layout->view('site/settings', $data);
  }
}
