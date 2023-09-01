<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['message'] = 'This is a dynamic message!';
    $this->view(['test'], $data);
  }

  public function register()
  {
    echo "string";
  }

  function errorPage()
  {
    echo "THIS IS ERROR";
  }

}
