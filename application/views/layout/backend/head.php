<?php
  //proteksi halaman
  $this->simple_login->cek_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="KCT Compro">
    <meta name="author" content="Kaisha">
    <link rel="shortcut icon" href="<?= base_url()?>assets/v1/images/favicon.ico">
    <title><?php echo $title ; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url() ?>assets/metisMenu/metisMenu.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/css/admin/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/admin/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/admin/extra.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</head>