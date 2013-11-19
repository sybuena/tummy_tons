<!doctype html>
<html>
<head>

  <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">


  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine or request Chrome Frame -->
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">

  <!-- Use title if it's in the page YAML frontmatter -->
  <title>Core Admin Theme</title>

  <link href="<?php echo base_url().'assets/theme2/stylesheets/font.css'; ?>" rel="stylesheet">
  	<link href="<?php echo base_url().'assets/bootstrap/css/bootstrap.css'; ?>" rel="stylesheet" media="screen">
  	<link href="<?php echo base_url().'assets/css/style.css'; ?>" rel="stylesheet" media="screen">
   	<link href="<?php echo base_url().'assets/font-awesome/css/font-awesome.css'; ?>" rel="stylesheet">
  	<link href="<?php echo base_url().'assets/theme2/stylesheets/application.css'; ?>" media="screen" rel="stylesheet" type="text/css" />
  <script src="<?php echo base_url().'assets/theme2/javascripts/application.js'; ?>" type="text/javascript"></script>

</head>

<body>

<div class="navbar navbar-top navbar-inverse">
  <div class="navbar-inner">
    <div class="container-fluid">

      <a class="brand" href="#">Core Admin</a>

      <!-- the new toggle buttons -->

      <ul class="nav pull-right">

        <li class="toggle-primary-sidebar hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-primary"><button type="button" class="btn btn-navbar"><i class="icon-th-list"></i></button></li>

        <li class="hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-top"><button type="button" class="btn btn-navbar"><i class="icon-align-justify"></i></button></li>

      </ul>

      

    </div>
  </div>
</div>
<div class="container">
  
<div class="span4 offset4">

  <div class="padded">

    <div class="login box" style="margin-top: 80px;">

      <div class="box-header">
        <span class="title">Sign Up</span>
      </div>

      <div class="box-content padded">
        <form class="separate-sections">

          <div class="input-prepend">
          <span class="add-on" href="#">
            <i class="icon-envelope"></i>
          </span>
            <input type="text" placeholder="email">
          </div>

          <div class="input-prepend">
          <span class="add-on" href="#">
            <i class="icon-user"></i>
          </span>
            <input type="text" placeholder="username">
          </div>

          <div class="input-prepend">
          <span class="add-on" href="#">
            <i class="icon-key"></i>
          </span>
            <input type="password" placeholder="password">
          </div>

          <div class="input-prepend">
          <span class="add-on" href="#">
            <i class="icon-key"></i>
          </span>
            <input type="password" placeholder="confirm password">
          </div>

          <div>
            <a class="btn btn-blue btn-block" href="../dashboard/dashboard.html">
                Sign Up <i class="icon-ok"></i>
            </a>
          </div>

        </form>

        <div>
          <a href="login.html">
              Already have an account? <strong>Sign In</strong>
          </a>
        </div>
      </div>

    </div>

    <div class="row-fluid">
      <div class="span6">
        <a href="#" class="btn btn-facebook btn-block"><i class="icon-facebook-sign"></i> Facebook</a>
      </div>
      <div class="span6">
        <a href="#" class="btn btn-twitter btn-block"><i class="icon-twitter"></i> Twitter</a>
      </div>
    </div>
  </div>
</div>
</div>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-40069579-1']);
    _gaq.push(['_setDomainName', 'beer2code.com']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
</body>
</html>
