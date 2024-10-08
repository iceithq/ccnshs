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
class Home extends MY_Controller
{

  var $user_model;
  var $post_model;
  var $page_model;
  var $menu_model;
  var $post_view_model;
  var $admin_service;

  var $layout;
  var $input;
  var $form_validation;
  var $session;

  function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
    $this->load->model('post_model');
    $this->load->model('page_model');
    $this->load->model('menu_model');
    $this->load->model('post_view_model');
    $this->load->library('admin_service');
  }

  function index()
  {
    $data['menus'] = $this->admin_service->get_menus();
    $this->layout->view('home', $data);
  }

  function blog()
  {
    // $data['posts'] = $this->post_model->find_top_5();
    // $data['menus'] = $this->menu_model->find_all();
    $data['menus'] = $this->admin_service->get_menus();
    $this->layout->view('blog', $data);
  }

  function post($id, $perma = '')
  {
    $post_view = post_view_form($id);
    $this->post_view_model->save($post_view);
    $data['post'] = $this->post_model->read($id);
    // $data['menus'] = $this->menu_model->find_all();
    $data['menus'] = $this->admin_service->get_menus();
    $this->layout->view('post', $data);
  }

  function page($id, $perma = '')
  {
    $data['page'] = $this->page_model->read($id);
    // $data['menus'] = $this->menu_model->find_all();
    $data['menus'] = $this->admin_service->get_menus();
    $this->layout->view('page', $data);
  }


  // TODO: Maybe move this to account controller?
  function register()
  {
    $data['message'] = '';
    if ($this->input->post()) {
      $user = register_form();
      $this->user_model->save($user);
      redirect('login');
    }
    $this->layout->set_theme(config_item('admin_theme'));
    $this->load->view(get_theme() . '/home/register', $data);
  }

  function login()
  {
    redirect_if(session('user_id'), 'user/home');
    $data['message'] = '';
    if ($this->input->post()) {
      list($username, $password) = login_form();
      $user = $this->user_model->read_by_username_and_password($username, $password);
      if ($user) {
        session('user_id', $user->id);
        session('site_id', $user->site_id);
        redirect('user/home');
      } else {
        $data['message'] = 'Invalid username or password. Please try again!';
      }
    }
    $this->layout->set_theme(config_item('admin_theme'));
    $this->load->view(get_theme() . '/home/login', $data);
  }

  function forgot()
  {
    $data['message'] = '';
    if ($this->input->post()) {
      $email = post('email');
    }
    $this->layout->set_theme(config_item('admin_theme'));
    $this->load->view(get_theme() . '/home/forgot', $data);
  }

  function logout()
  {
    $this->session->sess_destroy();
    redirect('login');
  }
}
