<?php
  /**
   *
   */
  class Dokter extends CI_Model
  {

    function can_login($uname, $pwd)
    {
      $this->db->where('username', $uname);
      $this->db->where('password', $pwd);
      $query = $this->db->get('dokter');

      if ($query->num_rows()>0) {
        return true;
      }
      else {
        return false;
      }
    }
  }

 ?>
