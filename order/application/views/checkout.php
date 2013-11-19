<div class="page-general">
<div class="container main-content">
		<div class="row">
			<div class="col-xs-12">
				<div class="content">
					<h1>Checkout</h1>
					
					<!--<h3>Your email address</h3>
					<form class="form-inline signin" method="post" action="login.php">
						<div class="form-group">
							<input id="email_address" name="email_address" tabindex="2" type="text" class="form-control">
							&nbsp;&nbsp;Already a customer? <a href="sign-in.html">Sign in now</a> or <a href="register.html">register</a> to save time in the future.
						</div>
					</form>-->
					<hr>
				</div> <!-- //end content -->
				
				<div class="row">
					<div class="col-sm-8">
						<div class="content inner">
							<h3>Billing address</h3>
							<form class="form-horizontal" id="checkout-details" method="post" action="/cart/payment">
								<div id="checkout-details-main">
									
									<div class="form-group">					
										<label class="control-label col-sm-3 col-md-2" for="billing_address_last_name">Name</label>
										<div class="col-sm-8 col-md-6">
											<input id="billing_address_last_name" name="name" size="30" tabindex="3" type="text" class="req form-control" value="<?php echo isset($user['name']) ? $user['name'] : ''; ?>">
											<span class="help-block">Can't be empty</span>										
										</div>	
									</div>
									
                                    <div class="form-group">					
										<label class="control-label col-sm-3 col-md-2" for="billing_address_last_name">Email</label>
										<div class="col-sm-8 col-md-6">
											<input id="billing_address_last_name" name="email" size="30" tabindex="3" type="text" class="req form-control" value="<?php echo isset($user['email']) ? $user['email'] : ''; ?>">
											<span class="help-block">Can't be empty</span>										
										</div>	
									</div>
                                    
									<div class="form-group">							
										<label class="control-label col-sm-3 col-md-2" for="billing_address_address1">Address</label>
										<div class="col-sm-8 col-md-6">
											<input id="billing_address_address1" name="address" size="30" tabindex="5" type="text" class="req form-control" value="<?php echo isset($user['city']) ? $user['city'] : ''; ?>">
											<span class="help-block">Can't be empty</span>										
										</div>
									</div>
									
									<div class="form-group">							
										<label class="control-label col-sm-3 col-md-2" for="billing_address_city">City</label>
										<div class="col-sm-8 col-md-6">
											<input id="billing_address_city" name="city" size="30" tabindex="7" type="text" class="form-control" value="<?php echo isset($user['address']) ? $user['address'] : ''; ?>">
                                            <span class="help-block">Can't be empty</span>	
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-sm-3 col-md-2" for="billing_address_phone">Phone</label>
										<div class="col-sm-8 col-md-6">
											<input id="billing_address_phone" name="phone" size="30" tabindex="11" type="text" class="form-control" value="<?php echo isset($user['phone']) ? $user['phone'] : ''; ?>">
                                            <span class="help-block">Can't be empty</span>	
										</div>
									</div>
									
								</div>						
							<hr>
                            <div class="content">
                                <input type="submit" class="btn btn-large inline" value="Continue to payment details" id="">
                                or <a href="/">Cancel and return to store</a>
                            </div> <!-- //end content -->
                            <?php //echo '<pre>'; print_r($carts); ?>
								<?php foreach($carts as $k => $v): ?>
                                   <input type="hidden" value="<?php echo $v['ID']; ?>" name="product_ID[]">
                                   <input type="hidden" value="<?php echo $v['cart_ID']; ?>" name="cart_ID[]">
                                   <input type="hidden" value="<?php echo $v['quantity']; ?>" name="product_quantity[]">
                                    
								<?php endforeach; ?>
                                <?php //echo '<pre>'; print_r($user);?>
                            <input type="hidden" value="<?php echo $user['user_ID']; ?>" name="user_ID">							
							</form>
							<hr>
						</div> <!-- //end content -->
					</div> <!-- //end span8 -->
	
					<div class="col-sm-4">
						
						<div class="content">
							<div class="cart-checkout clearfix">
                            	<?php $grandTotal = 0; ?>
								<?php foreach($carts as $k => $v): ?>
                                    <div class="item clearfix">
                                        <img src="<?php echo !empty($v['image']) ? $v['image'] : '/assets/img/spag.jpg'; ?>" alt="" width="100" />
                                        <div class="desc">
                                            <p class="name"><?php echo ucfirst($v['name']); ?></p>
                                            <p class="price"><?php echo $v['quantity']; ?> 
                                            x 
											<?php echo $v['price']; ?></p>
                                            <p class="price"><strong>Total : </strong> Php <?php echo number_format($v['total'],2); ?></p>
                                        </div>
                                    </div> <!-- //end item -->
                                    
                            	<?php $grandTotal = $grandTotal+$v['total']; ?>
								<?php endforeach; ?>
							</div>
						</div> <!-- //end content -->
                        <div class="content checkout-total">
							<p>
								<small>your purchase:</small><br>
								<span>Php <?php echo number_format($grandTotal,2); ?></span><br>
								<small>Total</small>
							</p>
						</div>
					</div> <!-- //end span4 -->
				</div> <!-- //end row -->		
			</div> <!-- //end span12 -->
		</div> <!-- //end row -->
	</div>
</div>    