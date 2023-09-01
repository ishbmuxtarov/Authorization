<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {

  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->view(['auth/register']);
  }

  public function action()
  {
    $this->view(['auth/register']);
  }

  function errorPage()
  {
    echo "THIS IS ERROR";
  }

}
