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
function page_form()
{
  return array(
    'title' => post('title'),
    'content' => post('content'),
    //    'created_at' => post('created_at'),
  );
}

function page_form_validate()
{
  $obj = &get_instance();
  $obj->form_validation->set_rules('title', 'Title', 'required');
  $obj->form_validation->set_rules('content', 'Content', 'required');
  //  $obj->form_validation->set_rules('created_at', 'Created_at', 'required');
}
