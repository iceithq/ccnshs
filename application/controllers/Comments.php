<?php

class Comments extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('comment_model');
  }

  function index() {
    $data['comments'] = $this->comment_model->find_all();
    $this->layout->view('comments/index', $data);
  }

  function add() {
    if ($this->input->post()) {
      $comment = comment_form();
      comment_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->comment_model->save($comment);
        redirect('comments');
      }
    }
    $this->layout->view('comments/add');
  }

  function edit($id) {
    if ($this->input->post()) {
      $comment = comment_form();
      comment_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->comment_model->update($comment, $id);
        redirect('comments');
      }
    }
    $data['comment'] = $this->comment_model->read($id);
    $this->layout->view('comments/edit', $data);
  }

  function delete($id) {
    $this->comment_model->delete($id);
    redirect('comments');
  }

}