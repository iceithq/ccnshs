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
class Api extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    header('Content-Type: application/json');
  }

  function hello()
  {
    echo json_encode('Hi!');
  }
}
