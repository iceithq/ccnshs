<?php

class Menus extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('menu_model');
    $this->load->library('admin_service');
  }

  function index() {
    // $data['menus'] = $this->menu_model->find_all();
    $data['menus'] = $this->admin_service->get_menus();
    $this->layout->view('menus/index', $data);
  }

  function add() {
    if ($this->input->post()) {
      $menu = menu_form();
      menu_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->menu_model->save($menu);
        redirect('menus');
      }
    }
    $this->layout->view('menus/add');
  }

  function edit($id) {
    if ($this->input->post()) {
      $menu = menu_form();
      menu_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->menu_model->update($menu, $id);
        redirect('menus');
      }
    }
    $data['menu'] = $this->menu_model->read($id);
    $this->layout->view('menus/edit', $data);
  }

  function delete($id) {
    $this->menu_model->delete($id);
    redirect('menus');
  }

}
