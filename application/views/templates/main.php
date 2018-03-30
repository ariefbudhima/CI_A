<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Selamat datang di Main Template</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'; ?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url().'assets/css/waves.css'; ?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url().'assets/css/animate.css'; ?>" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo base_url().'assets/css/morris.css'; ?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url().'assets/css/style.css'; ?>" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url().'assets/css/all-themes.css'; ?>" rel="stylesheet" />
    <!-- <style type="text/css">
      #header{
        width: 100%;
        height: 100px;
        background: #ff0;
      }

      #footer{
        width: 100%;
        height: 100px;
        background: #ff0;
      }

      #sidebar{
        width: 30%;
        height: 600px;
        background: #f00;
        float: left;
      }

      #content{
        width: 30%;
        height: 600px;
        float: left;
        /* background: #ff0; */
      }

    </style> -->
  </head>
  <body class="theme-red">

    <?php if ($header) {
      echo $header;
    } ?>

    <?php if ($sidebar) {
      echo $sidebar;
    } ?>

    <div id="content"> <?php if ($page) {
      echo $page;
    } ?>

    </div>

    <?php if ($footer) {
      echo $footer;
    } ?>

  </body>
</html>
