<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('user_model');
  }

  public function index()
  {
    $this->view(['auth/register']);
  }

  public function validate_form() {
        // Set validation rules
        $this->form_validation->set_rules('first_name', 'Adiniz', 'required|max_length[50]');
        $this->form_validation->set_rules('last_name', 'Soyadiniz', 'required|max_length[50]');
        $this->form_validation->set_rules('email', 'Email adresiniz', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('birthday', 'Doğum tarixiniz', 'required');
        $this->form_validation->set_rules('password', 'Parol', 'required|min_length[6]');
        $this->form_validation->set_rules('password_confirmation', 'Təkrar parol', 'required|matches[password]');

        // Customize error messages (optional)
        $this->form_validation->set_message('required', '%s is required');
        $this->form_validation->set_message('valid_email', 'Please enter a valid email address');
        $this->form_validation->set_message('is_unique', 'This email is already registered');
        $this->form_validation->set_message('min_length', '%s must be at least %s characters long');
        $this->form_validation->set_message('matches', 'The password confirmation does not match the password');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, show the form again with errors
            $this->view(['alerts/error']);
        } else {
            // Validation passed, do something with the form data
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'birthday' => $this->input->post('birthday'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
            );

            // Insert the data into your database
            $this->user_model->insert_user($data);

            $this->view(['alerts/success']);
        }
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
