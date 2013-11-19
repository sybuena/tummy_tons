<div class="navbar navbar-top navbar-inverse">
  <div class="navbar-inner">
    <div class="container-fluid">
		<a class="brand" href="#">Tummy Tons</a>
		<!-- the new toggle buttons -->
            <ul class="nav pull-right">
            
            <li class="toggle-primary-sidebar hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-primary">
            	<button type="button" class="btn btn-navbar"><i class="icon-th-list"></i></button></li>
            
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
        <span class="title">Login</span>
      </div>

      <div class="box-content padded">
        <?php echo validation_errors(); ?>
		<?php echo form_open('verify/verifyAdmin'); ?>
		
        <div class="separate-sections">
          <div class="input-prepend error">
          <span class="add-on" href="#">
            <i class="icon-user"></i>
          </span>
          	<input type="text" placeholder="email" name="email" class="validate[required]" data-prompt-position="topLeft" id="form-validation-field-0">
          </div>

          <div class="input-prepend">
          <span class="add-on" href="#">
            <i class="icon-key"></i>
          </span>
            <input type="password" placeholder="password" name="password">
          </div>

          <div>

            <button class="btn btn-blue btn-block">
                Login <i class="icon-signin"></i>
            </button>
          </div>
		</div>
        </form>

        <!--<div>
          <a href="sign_up.html">
              Don't have an account? <strong>Sign Up</strong>
          </a>
        </div>-->
      </div>

    </div>

    <!--<div class="row-fluid">
      <div class="span6">
        <a href="#" class="btn btn-facebook btn-block"><i class="icon-facebook-sign"></i> Facebook</a>
      </div>
      <div class="span6">
        <a href="#" class="btn btn-twitter btn-block"><i class="icon-twitter"></i> Twitter</a>
      </div>
    </div>-->
  </div>
</div>
</div>
