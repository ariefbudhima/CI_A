<?php
  /**
   *
   */
  class M_radiologi extends CI_Model
  {

    function can_login($uname, $pwd)
    {
      $this->db->where('username', $uname);
      $this->db->where('password', $pwd);
      $this->db->where('jabatan', 'radiologi');
      $query = $this->db->get('admin');

      if ($query->num_rows()>0) {
        return true;
      }
      else {
        return false;
      }
    }
  }

 ?>
