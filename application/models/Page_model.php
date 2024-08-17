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
class Page_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function find_all()
  {
    return $this->db->get('pages')->result();
  }

  function read($id)
  {
    return $this->db->get_where('pages', array('id' => $id))->row();
  }

  function save($page)
  {
    $this->db->set('created_at', now());
    $this->db->insert('pages', $page);
  }

  function update($page, $id)
  {
    $this->db->update('pages', $page, array('id' => $id));
  }

  function delete($id)
  {
    $this->db->delete('pages', array('id' => $id));
  }
}
