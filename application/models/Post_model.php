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
class Post_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function find_all($limit = 100)
  {
    $this->db->order_by('created_at', 'desc');
    if ($limit > 0) {
      $this->db->limit($limit);
    }
    return $this->db->get('posts')->result();
  }

  function find_top_5()
  {
    $this->db->order_by('created_at', 'desc');
    $this->db->limit(10);
    return $this->db->get('posts')->result();
  }

  function read($id)
  {
    return $this->db->get_where('posts', array('id' => $id))->row();
  }

  function save($post)
  {
    // $this->db->set('created_at', now());
    $this->db->insert('posts', $post);
  }

  function update($post, $id)
  {
    $this->db->set('updated_at', now());
    $this->db->update('posts', $post, array('id' => $id));
  }

  function delete($id)
  {
    $this->db->delete('posts', array('id' => $id));
  }
}
