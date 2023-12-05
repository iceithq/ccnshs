<?php

class Home extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('user_model');
  }

  function register() {
    $data['message'] = '';
    if ($this->input->post()) {
      $user = register_form();
      $this->user_model->save($user);
      redirect('login');
    }
    $this->load->view(get_theme() . '/home/register', $data);
  }

  function login() {
    $data['message'] = '';
    if ($this->input->post()) {
      list($username, $password) = login_form();
      $user = $this->user_model->read_by_username_and_password($username, $password);
      if ($user) {
        session('user_id', $user->id);
        redirect('dashboard');
      } else {
        $data['message'] = 'Invalid username or password. Please try again!';
      }
    }
    $this->load->view(get_theme() . '/home/login', $data);
  }

  function logout() {
    $this->session->sess_destroy();
    redirect('login');
  }

}
