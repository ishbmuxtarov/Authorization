<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->view(['auth/login']);
  }

  public function action()
  {
    $this->view(['auth/login']);

  }

  function errorPage()
  {
    echo "THIS IS ERROR";
  }

}
