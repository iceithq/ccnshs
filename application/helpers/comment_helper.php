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
function comment_form()
{
  return array(
    'post_id' => post('post_id'),
    'comments' => post('comments'),
    'created_at' => post('created_at'),
    'created_by' => post('created_by'),
  );
}

function comment_form_validate()
{
  $obj = &get_instance();
  $obj->form_validation->set_rules('post_id', 'Post_id', 'required');
  $obj->form_validation->set_rules('comments', 'Comments', 'required');
  $obj->form_validation->set_rules('created_at', 'Created_at', 'required');
  $obj->form_validation->set_rules('created_by', 'Created_by', 'required');
}
