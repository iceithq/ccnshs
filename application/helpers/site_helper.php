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
function site_form()
{
  $obj = &get_instance();
  return array(
    'title' => post('title'),
    'description' => post('description'),
  );
}

function site_form_validate()
{
  $obj = &get_instance();
  $obj->form_validation->set_rules('title', 'Title', 'required');
  // $obj->form_validation->set_rules('description', 'Description', 'required');
}
