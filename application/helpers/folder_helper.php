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
function folder_form()
{
  return array(
    'name' => post('name'),
    // 'created_at' => post('created_at'),
  );
}

function folder_form_validate()
{
  $obj = &get_instance();
  $obj->form_validation->set_rules('name', 'Name', 'required');
  // $obj->form_validation->set_rules('created_at', 'Created_at', 'required');
}
