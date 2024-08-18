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
class Comment_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function find_all()
  {
    $this->db->order_by('created_at', 'desc');
    return $this->db->get('comments')->result();
  }

  function read($id)
  {
    return $this->db->get_where('comments', array('id' => $id))->row();
  }

  function save($comment)
  {
    $this->db->insert('comments', $comment);
  }

  function update($comment, $id)
  {
    $this->db->update('comments', $comment, array('id' => $id));
  }

  function delete($id)
  {
    $this->db->delete('comments', array('id' => $id));
  }
}
