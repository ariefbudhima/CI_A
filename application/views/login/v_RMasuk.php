<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>selamat datang Radiologi <?php echo strtoupper($this->session->userdata('username'));?></title>
  </head>
  <body>
    <?php echo 'halo radiologist'; ?>
    <a href="<?php echo base_url()?>Login/Logout">Log Out</a>
  </body>
</html>
