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
function login_form()
{
  $obj = &get_instance();
  return array(
    post('username'),
    post('password'),
  );
}

function register_form()
{
  $obj = &get_instance();
  $user = array(
    'email' => post('email'),
  );
  $password = post('password');
  if ($password) {
    $encrypted_password = password_hash($password, PASSWORD_BCRYPT);
    $user['password'] = $encrypted_password;
  }
  return $user;
}

function user_form()
{
  $obj = &get_instance();
  return array(
    'email' => post('email'),
    'password' => post('password'),
  );
}

function user_form_validate()
{
  $obj = &get_instance();
  $obj->form_validation->set_rules('email', 'Email', 'required');
  $obj->form_validation->set_rules('password', 'Password', 'required');
}
