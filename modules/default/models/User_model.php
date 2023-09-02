<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
  public $first_name;
  public $last_name;
  public $email;
  public $birthday;
  public $password;
  public $date;

  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function get_last_ten_entries() {
    $query = $this->db->get("entries", 10);
    return $query->result();
  }

  public function insert_entry() {
    $this->first_name    = $params["first_name"];
    $this->last_name  = $params["last_name"];
    $this->email  = $params["email"];
    $this->birthday  = $params["birthday"];
    $this->password  = $params["password"];
    $this->date     = time();

    $this->db->insert('entries', $this);
  }
}
