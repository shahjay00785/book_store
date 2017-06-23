<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Bootstrap Core CSS -->
  <link href="<?php echo base_url('Assests/Admin_template/css/bootstrap.min.css')?>" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="<?php echo base_url()?>Assests/Admin_template/css/sb-admin.css" rel="stylesheet">

  <!-- Morris Charts CSS -->
  <link href="<?php echo base_url()?>Assests/Admin_template/css/plugins/morris.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="<?php echo base_url()?>Assests/Admin_template/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <style type="text/css" xml:space="preserve">

  BODY, P,TD{ font-family: Arial,Verdana,Helvetica, sans-serif; font-size: 10pt }
  A{font-family: Arial,Verdana,Helvetica, sans-serif;}
  B {	font-family : Arial, Helvetica, sans-serif;	font-size : 12px;	font-weight : bold;}
  .error_strings{ font-family:Verdana; font-size:14px; color:#660000; background-color:#ff0;}

  .img-circle {
    border-radius: 50%;
  }


  </style>
  <script language="JavaScript" src="<?php echo base_url('Assests/Admin_template/js/gen_validatorv4.js'); ?>" >
  type="text/javascript" xml:space="preserve"></script>

</head>

<body>


  <div class="navbar-header">

  </button>

</div>
<!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">
</div>
</div>
</a>
</li>
</ul>
</li>


</ul>


<div id="wrapper">

  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>
    <!-- Top Menu Items -->

    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <!-- /.navbar-collapse -->
  </nav>

  <div id="page-wrapper">

    <div class="container">

      Login
      <br>
      <?php if(isset($msg))
      {
        echo $msg;
      }
      ?>

      <form method="post" action="<?php echo base_url('Admin_controller/Admin/manage_admin_login/check'); ?>">

        <br><br>
        user name
        <input type="text" name="txt_user_name">
        <br><br>
        Password
        <input type="password" name="txt_user_password">
        <br><br>
        <input type="submit" name="btn_submit">


      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- jQuery Version 1.11.0 -->
  <script src="js/jquery-1.11.0.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Morris Charts JavaScript -->
  <script src="js/plugins/morris/raphael.min.js"></script>
  <script src="js/plugins/morris/morris.min.js"></script>
  <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
