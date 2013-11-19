<html lang="en" style="" class=" js no-touch"><head>
    <meta charset="utf-8">
    <title>Tummy Ton's</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo base_url().'assets/bootstrap/css/bootstrap.css';?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/font-awesome/css/font-awesome.css';?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/shop.css';?>" rel="stylesheet" media="screen">   
    <link href="<?php echo base_url().'assets/css/orange.css';?>" rel="stylesheet" media="screen">   
    <link href="<?php echo base_url().'assets/css/rateit.css';?>" rel="stylesheet" media="screen">   
    <link href="<?php echo base_url().'assets/css/popup.css';?>" rel="stylesheet" media="screen">   
    <script src="<?php echo base_url().'assets/js/respond.min.js';?>"></script>
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url().'assets/js/jquery.js';?>"></script>   
    <script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/modernizr.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/imagesloaded.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/masonry.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/rateit.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/popup.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/shop.js';?>"></script>
	
</head>
<body class="product-board">
	
	<header class="navbar navbar-fixed-top clearfix">
		
	<a class="current brand" href="/">Tummy Tons</a>

	<div id="nav-basket" class="basket">
		<a href="<?php echo base_url().'cart'; ?>" class="basket-link">
			<div class="basket-count"></div>
		</a>
		<div class="submenu-container">
			<ul class="submenu-preview">
				
				<li class="drop-link-li">
					<a href="<?php echo base_url().'cart'; ?>" class="drop-link">View full<br>basket</a>
				</li>
			</ul>	
		</div>
	</div>
    <?php if(isset($user) && !empty($user)) :?>
    	<div id="nav-basket" class="basket" style="margin-right: 10px">
		
        <a href="<?php echo base_url().'cart'; ?>" class="basket-link">
			<p style="color:white; margin-top:10px">Good Day,
            <br><?php echo $user['name']; ?></p>
            
		</a>
        <div class="submenu-container">
			<div class="col-lg-2 well" style="margin:10px;">
            
            	<h3></h3>
            	<a href class="btn">Transaction History</a>	<br><br>
            	<a href class="btn">Edit Settings</a>	<br><br>
            	<a href class="btn">Edit Profile</a>	<br><br>
            	<a href="/home/logout" class="btn">Logout</a>	<br><br>
            </div>
			<!--<div class="col-lg-3"  style="margin:10px;">
            	<img src="<?php echo $default;?>" class="img-rounded" width="230">
            </div>-->
            <div class="col-lg-5"  style="margin:10px; color:white; background-color:#e04e00">
            		<h3>Name : <?php echo ucfirst($user['name']);?></h3>
            		<h3>Email : <?php echo ucfirst($user['email']);?></h3>
            		<h3>Phone : <?php echo ucfirst($user['phone']);?></h3>
            		<h3>Address : <?php echo ucfirst($user['address']);?></h3>
            		<h3>City : <?php echo ucfirst($user['city']);?></h3>
            </div>  
		</div>
     </div>
    <?php else: ?>
    
    <div id="nav-basket" class="basket" style="margin-right: 10px">
		<a href="#" class="basket-link">
        	
        	<h4 style="color:white; margin-top:20px">Sign Up</h4>
		</a>
		<div class="submenu-container">
			
			<div class="col-lg-2">
            	
            </div>
            
            <div class="col-lg-8">
            	<h3>Sign up</h3>
                
        <?php echo validation_errors('<p class="error">'); ?>
		<?php echo form_open('home/signup'); ?>
               <div class="form-horizontal" role="form">
                  <div class="col-lg-6">            
                      <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="name" placeholder="Full Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                          <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Phone</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="phone" placeholder="phone or cell number">
                        </div>
                      </div>
                  </div>
                  <div class="col-lg-6">            
                      <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Address</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="address" placeholder="Current Address">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">City</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="city" placeholder="Current City">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-10">
                          <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button type="submit" class="btn btn-default">Sign Up</button>
                    </div>
                  </div>
                </div>
                </form>
            </div>
            
		</div>
	</div>
    
    <div id="nav-basket" class="basket" style="margin-right: 10px">
		<a href="#" class="basket-link">
			
        	<h4 style="color:white; margin-top:20px">Login</h4>
		</a>
		<div class="submenu-container">
			
			<div class="col-lg-4">
            </div>
			<div class="col-lg-4">
            	<h2>Log in</h2>
                 
        <?php echo validation_errors(); ?>
		<?php echo form_open('home/verify'); ?>
               <div class="form-horizontal" role="form">
                  <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                      <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button type="submit" class="btn btn-default">Log in</button>
                    </div>
                  </div>
                  </div>
                </form>
            </div>  
		</div>
	</div>
    <?php endif; ?>
	<button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<nav class="navbar-collapse collapse" id="main-nav">
		<ul class="nav">
			<li class="current active">
				<a href="/" class="current top-level flat">Home</a>
			</li>
			<li>
				<a href="#" class="top-level">Menu</a>
				<div class="submenu-container">
					<ul class="submenu">
						<?php foreach($category as $value): ?>
                        	<?php if($value['category_group']) :?>
                           	<li class="<?php echo ($value['ID'] == 1) ? 'active': ''; ?>">
                            	<a href="<?php echo base_url().'category/page/'.$value['ID']; ?>" class="sml">
								<?php echo ucfirst($value['category_name'])?></a>
                                <ul class="submenu-preview">
                                    <li class="drop-link-li">
                                        <a href="<?php echo base_url().'category/page/'.$value['ID']; ?>" class="drop-link">
                                        View all<br> 
										<?php echo ucfirst($value['category_name'])?></a>
                                    </li>
                                    <?php if(isset($value['products'])) :?>
										
                    					<?php $i = 0;?>
										<?php foreach($value['products'] as $v) :?>
                                        <?php //echo '<pre>'; print_r($v); ?>
                                        <?php if($i==5) break; ?>
                                        <li>
                                            <a href="<?php echo '/category/detail/'.($v['category_ID']-1).'/'.($v['ID'])?>">
                                            	<?php if(!empty($v['image'])) :?>
                                                <img src="<?php echo $v['image']; ?>" alt="" width="100">
                                                <?php else :?>
                                                <img src="<?php echo $default; ?>" alt="" width="100">
                                                <?php endif; ?>
                                                <p><?php echo ucfirst($v['name']); ?></p>
                                                <p class="price"><?php echo 'Pph '.number_format($v['price'],2); ?></p>											
                                            </a>
                                        </li><?php $i++;?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>	
                            </li>
                            <?php endif; ?>
                        <?php endforeach; ?>                    
						
					</ul>
				</div>
			</li>
			<li><a href="#" class="top-level flat">Drinks</a>
            	<div class="submenu-container">
					<ul class="submenu">
                    
                    	<?php foreach($category as $value) :?>
                        	<?php if($value['ID'] == '11') :?>
                                    <li class="active">
                                        <a href="<?php echo base_url().'category/'.$value['ID']; ?>" class="sml">
                                        <?php echo ucfirst($value['category_name'])?></a>
                                        <ul class="submenu-preview">
                                            <li class="drop-link-li">
                                                <a href="<?php echo base_url().'category/page/'.$value['ID']; ?>" 
                                                class="drop-link">View all<br> 
                                                <?php echo ucfirst($value['category_name'])?></a>
                                            </li>
                                            <?php if(!empty($value['products'])): ?>
                            				<?php foreach($value['products'] as $v) :?>
                                                <li>
                                                    <a href="<?php echo base_url().'products/details/'.$v['ID']?>">
                                                        <img src="<?php echo $default; ?>" alt="" width="100">
                                                        <p><?php echo ucfirst($v['name']); ?></p>
                                                        <p class="price"><?php echo 'Php '.number_format($v['price'], 2); ?></p>											
                                                    </a>
                                                </li>
                               				<?php endforeach; ?>
                               				<?php endif; ?>
                                        </ul>	
                                    </li>
                            <?php endif?>
                            <?php if($value['ID'] == '12') :?>
                                    <li>
                                        <a href="<?php echo base_url().'category/page/'.$value['ID']; ?>" class="sml">
                                        <?php echo ucfirst($value['category_name'])?></a>
                                        <ul class="submenu-preview">
                                            <li class="drop-link-li">
                                                <a href="<?php echo base_url().'category/page/'.$value['ID']; ?>" 
                                                class="drop-link">View all<br> 
                                                <?php echo ucfirst($value['category_name'])?></a>
                                            </li>
                                            <?php if(!empty($value['products'])): ?>
                            				<?php foreach($value['products'] as $v) :?>
                                                <li>
                                                    <a href="<?php echo '/category/detail/'.($v['category_ID']-1).'/'.($v['ID'])?>">
                                                        <img src="<?php echo $default; ?>" alt="" width="100">
                                                        <p><?php echo ucfirst($v['name']); ?></p>
                                                        <p class="price"><?php echo 'Php '.number_format($v['price']); ?></p>											
                                                    </a>
                                                </li>
                               				<?php endforeach; ?>
                               				<?php endif; ?>
                                        </ul>	
                                    </li>
                            <?php endif?>
                        <?php endforeach; ?>
					</ul>
				</div>
            </li>
			<li><a href="#" class="top-level flat">Extras</a></li>							
		</ul>
      
	</nav><!--/.nav-collapse -->
	
</header>
 
<?php //echo '<pre>'; print_r($category); ?>