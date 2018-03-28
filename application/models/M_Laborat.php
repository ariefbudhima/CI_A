<?php
  /**
   *
   */
  class M_Laborat extends CI_Model
  {

    function can_login($uname, $pwd)
    {
      $this->db->where('username', $uname);
      $this->db->where('password', $pwd);
      $this->db->where('jabatan', 'laboratorium');
      $query = $this->db->get('admin');

      return $query;
    }
  }

 ?>
