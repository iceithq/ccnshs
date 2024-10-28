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
function user_token_form($user_id)
{
  $obj = &get_instance();
  return array(
    'user_id' => $user_id,
    'token' => guid(),
    'expires_at' => minutes_from_now(20),
  );
}

function user_token_form_validate()
{
  $obj = &get_instance();
  $obj->form_validation->set_rules('user_id', 'User_id', 'required');
  $obj->form_validation->set_rules('token', 'Token', 'required');
  $obj->form_validation->set_rules('expires_at', 'Expires_at', 'required');
  $obj->form_validation->set_rules('created_at', 'Created_at', 'required');
  $obj->form_validation->set_rules('updated_at', 'Updated_at', 'required');
}
