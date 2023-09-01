<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller {

  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->view(['profile']);
  }

  function errorPage()
  {
    echo "THIS IS ERROR";
  }

}
