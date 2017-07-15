<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="<?php echo base_url('Assests/User_template/css/bootstrap.css');?>" rel="stylesheet" type="text/css" media="all" />
  <!--theme-style-->
  <link href="<?php echo base_url('Assests/User_template/css/style.css');?>" rel="stylesheet" type="text/css" media="all" />
  <!--//theme-style-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!--fonts-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  <!--//fonts-->
  <script src="<?php echo base_url('Assests/User_template/js/jquery.min.js'); ?>"></script>
  <style type="text/css">
  body { background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABZ0RVh0Q3JlYXRpb24gVGltZQAxMC8yOS8xMiKqq3kAAAAcdEVYdFNvZnR3YXJlAEFkb2JlIEZpcmV3b3JrcyBDUzVxteM2AAABHklEQVRIib2Vyw6EIAxFW5idr///Qx9sfG3pLEyJ3tAwi5EmBqRo7vHawiEEERHS6x7MTMxMVv6+z3tPMUYSkfTM/R0fEaG2bbMv+Gc4nZzn+dN4HAcREa3r+hi3bcuu68jLskhVIlW073tWaYlQ9+F9IpqmSfq+fwskhdO/AwmUTJXrOuaRQNeRkOd5lq7rXmS5InmERKoER/QMvUAPlZDHcZRhGN4CSeGY+aHMqgcks5RrHv/eeh455x5KrMq2yHQdibDO6ncG/KZWL7M8xDyS1/MIO0NJqdULLS81X6/X6aR0nqBSJcPeZnlZrzN477NKURn2Nus8sjzmEII0TfMiyxUuxphVWjpJkbx0btUnshRihVv70Bv8ItXq6Asoi/ZiCbU6YgAAAABJRU5ErkJggg==);}
  .error-template {padding: 40px 15px;text-align: center;}
  .error-actions {margin-top:15px;margin-bottom:15px;}
  .error-actions .btn { margin-right:10px; }
  </style>
</head>
<body>
  <!--header-->
  <?php echo include_once('user_header.php'); ?>
  <!---->
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <div class="error-template">
          <h1>
            Oops!</h1>
            <h2>
              404 Not Found</h2>
              <div class="error-details">
                Sorry, an error has occured, Requested page not found!
              </div>
              <div class="error-actions">
                <a href="<?php echo base_url('User_Controller/user_home_controller'); ?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                  Take Me Home </a><a href="<?php echo base_url('User_Controller/user_home_controller'); ?>" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
                </div>
              </div>
            </div>
          </div>




          <!-- footer-->
          <?php include_once('user_footer.php'); ?>
          <!-- footer-->
        </div>
      </body>
      </html>
