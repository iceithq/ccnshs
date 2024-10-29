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
function get_upload_icon($upload_url)
{
  $extension = strtolower(pathinfo($upload_url, PATHINFO_EXTENSION));
  if ($extension == 'pdf') {
    return '<i class="fa fa-file-pdf-o" aria-hidden="true"></i>';
  }
  $url = 'media/' . $upload_url;
  if (!file_exists($url)) {
    $url = 'public/themes/default/img/no-image.png';
  }
  return  img(array('src' => $url, 'width' => 48));
}

function upload_url($upload)
{
  return base_url() . 'media/' . $upload->url;
}

function get_upload_url($upload)
{
  $upload_url = $upload->url ? 'media/' . $upload->url : '';
  if ($upload_url && file_exists($upload_url)) {
    return $upload_url;
  }
  // return 'public/themes/simple/img/blank.png';
  return '';
}

function upload_form($title = null, $alt_text = null, $description = null)
{
  $obj = &get_instance();
  return array(
    'title' => $title ?? post('title'),
    'alt_text' => $alt_text ?? post('alt_text'),
    'description' => $description ?? post('description'),
  );
}

function upload_minimal_form($folder_id)
{
  $obj = &get_instance();
  return array(
    'folder_id' => $folder_id,
    // 'title' => post('title'),
  );
}

function upload_form_validate()
{
  $obj = &get_instance();
  // $obj->form_validation->set_rules('url', 'Url', 'required');
  $obj->form_validation->set_rules('title', 'Title', 'required');
  // $obj->form_validation->set_rules('alt_text', 'Alt_text', 'required');
  // $obj->form_validation->set_rules('description', 'Description', 'required');
}

function upload_minimal_form_validate()
{
  $obj = &get_instance();
  // $obj->form_validation->set_rules('url', 'Url', 'required');
  // $obj->form_validation->set_rules('title', 'Title', 'required');
  // $obj->form_validation->set_rules('alt_text', 'Alt_text', 'required');
  // $obj->form_validation->set_rules('description', 'Description', 'required');
}
