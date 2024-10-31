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
function perma_link($title)
{
  // Convert special characters to ASCII
  $title = iconv('UTF-8', 'ASCII//TRANSLIT', $title);
  // Replace non-alphanumeric characters with dashes
  $title = preg_replace('/[^a-zA-Z0-9]/', '-', $title);
  // Remove any consecutive dashes
  $title = preg_replace('/-+/', '-', $title);
  // Convert the title to lowercase
  $title = strtolower($title);
  // Remove leading and trailing dashes
  $title = trim($title, '-');
  return $title;
}

function post_teaser($post, $length = 350)
{
  $content = strip_tags($post->content);
  if (strlen($content) <= $length) {
    return $content;
  }
  return substr($content, 0, $length) . '...';
}

function featured_posts()
{
  $obj = &get_instance();
  $recent_posts = $obj->post_model->find_featured_top(4);
  $data['recent_posts'] = $recent_posts;
  load_view('featured_posts', $data);
}

function recent_posts()
{
  $obj = &get_instance();
  $recent_posts = $obj->post_model->find_top(6);
  $data['recent_posts'] = $recent_posts;
  load_view('recent_posts', $data);
}

function posts($offset = 0)
{
  $obj = &get_instance();
  $obj->load->model('post_model');
  $obj->load->library('pagination');

  $per_page = 10;
  $total_posts = $obj->post_model->count('', $per_page, $offset);
  $data['count_posts'] = $total_posts;
  $data['posts'] = $obj->post_model->find('', $per_page, $offset);

  $data['per_page'] = $per_page;
  $data['offset'] = $offset;
  $obj->pagination->initialize(pagination_config(trimmed_base_url() . '/blog', $total_posts, $per_page, true, true));

  // $posts = $obj->post_model->find_all(); // TODO:
  // $data['posts'] = $posts;
  load_view('posts', $data);
}

function post_form()
{
  $obj = &get_instance();
  return array(
    'title' => post('title'),
    'teaser' => post('teaser'),
    'content' => post('content'),
    'created_at' => post('created_at'),
  );
}

function post_form_validate()
{
  $obj = &get_instance();
  $obj->form_validation->set_rules('title', 'Title', 'required');
  $obj->form_validation->set_rules('content', 'Content', 'required');
  //  $obj->form_validation->set_rules('created_at', 'Created_at', 'required');
}
