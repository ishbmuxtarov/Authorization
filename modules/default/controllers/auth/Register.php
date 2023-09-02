<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['title'] = "Qeydiyyat";
    $this->view([
      'auth/register',
    ],
    $data);
  }

  public function validate_form() {
    // $this->form_validation->set_rules('first_name', 'Adiniz', 'required|max_length[50]');
    // $this->form_validation->set_rules('last_name', 'Soyadiniz', 'required|max_length[50]');
    // $this->form_validation->set_rules('email', 'Email adresiniz', 'required|valid_email|is_unique[users.email]');
    // $this->form_validation->set_rules('birthday', 'Doğum tarixiniz', 'required');
    // $this->form_validation->set_rules('password', 'Parol', 'required|min_length[6]');
    // $this->form_validation->set_rules('password_confirmation', 'Təkrar parol', 'required|matches[password]');
    //
    // // Customize error messages
    // $this->form_validation->set_message('required', '%s is required');
    // $this->form_validation->set_message('valid_email', 'Please enter a valid email address');
    // $this->form_validation->set_message('is_unique', 'This email is already registered');
    // $this->form_validation->set_message('min_length', '%s must be at least %s characters long');
    // $this->form_validation->set_message('matches', 'The password confirmation does not match the password');
  }

  public function action()
  {
      $params = [
        "first_name" => $this->input->post("first_name"),
        "last_name" => $this->input->post("last_name"),
        "email" => $this->input->post("email"),
        "birthday" => $this->input->post("birthday"),
        "password" => password_hash($this->input->post("password"), PASSWORD_BCRYPT)
      ];

      if (!$params["first_name"]) {
        Flash::set("first_name", "Ad tələb olunur");
      }
      if (!$params["last_name"]) {
        Flash::set("last_name", "Soyad tələb olunur");
      }
      if (!$params["email"]) {
        Flash::set("email", "Email tələb olunur");
      }
      if (!$params["birthday"]) {
        Flash::set("birthday", "Doğum tarixi tələb olunur");
      }
      if (!$params["password"]) {
        Flash::set("password", "Parol tələb olunur");
      }

      // $this->load->model("User_model","model");
      // $this->model->insert_user($params);

      $data['title'] = "Qeydiyyat";
      $this->view([
        'auth/register',
      ],$data);
  }

  function errorPage()
  {
    echo "THIS IS ERROR";
  }

}
