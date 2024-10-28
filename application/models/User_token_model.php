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
class User_token_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  function find_all()
  {
    return $this->db->get('user_tokens')->result();
  }

  function read($id)
  {
    return $this->db->get_where('user_tokens', array('id' => $id))->row();
  }

  function read_by_token($token)
  {
    return $this->db->get_where('user_tokens', array('token' => $token))->row();
  }

  function save($user_token)
  {
    $this->db->set('created_at', now());
    $this->db->set('updated_at', now());
    $this->db->insert('user_tokens', $user_token);
    return $user_token['token'];
  }

  function update($user_token, $id)
  {
    $this->db->set('updated_at', now());
    $this->db->update('user_tokens', $user_token, array('id' => $id));
  }

  function delete($id)
  {
    $this->db->delete('user_tokens', array('id' => $id));
  }
}
