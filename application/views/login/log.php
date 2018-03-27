<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login page</title>
    <!-- <link rel="stylesheet" type="text/css" href="#"> -->
  </head>
  <body>
    <p class="lul">halo halo</p>
    </form>
    <form class="form_login" action="<?php echo base_url('Login/aksi_login'); ?>" method="post">
      <div>
        <input type="text" name="username" value="" placeholder="username">
        <span class="text-danger"><?php echo form_error('username') ?>
      </div>
      <div class="">
        <input type="password" name="password" value="" placeholder="password">
        <span class="text-danger"><?php echo form_error('password') ?>
      </div>

      <input type="submit" value="submit">
    </form>
  </body>
</html>
