<div class="page-general">
<div class="container main-content">
		<div class="row">
			<div class="col-xs-12">
				<div class="content">
					<h1>Your order is success</h1>
					
					<div class="shopping-cart-help">
                    <p>Your order will be on your door step after a few minutes. Dont pay if delivery take's more than an hour</p>										
                    <p>
                        
                    </p>
                </div>
				<div class="col-sm-7">
						
						<div class="content">
							<div class="cart-checkout clearfix">
                            	<div class="item clearfix">
                                    <div class="desc">
                                        <p class="price"><strong>Status : </strong>
										<span style="color: green"><?php echo strtoupper($order[0]['transaction_status']); ?>
                                        </span></p>
                                        <p class="price"><strong>Deliver To: </strong><?php echo $order[0]['address']; ?></p>
                                       
                                    </div>
                                </div>
								<?php $grandTotal = 0; ?>
								<?php foreach($order as $k => $v): ?>
                                    <div class="item clearfix">
                                        <img src="/assets/img/spag.jpg" alt="" width="100">
                                        <div class="desc">
                                            <p class="name"><?php echo ucfirst($v['product_name']); ?></p>
                                            <p class="price"><?php echo $v['history_quantity']; ?> 
                                            x 
											<?php echo $v['price']; ?></p>
                                            <p class="price"><strong>Total : </strong> PHP <?php echo $v['history_quantity'] * $v['price']; ?></p>
                                        </div>
                                    </div> <!-- //end item -->
                                    
                            	<?php $grandTotal = $grandTotal+($v['history_quantity'] * $v['price']); ?>
								<?php endforeach; ?>
							</div>
						</div> <!-- //end content -->
                        
					</div> <!-- //end span4 -->
                    <div class="col-sm-4">
						
						<center>
                        <div class="content checkout-total well">
							<p>
								<small>Grant Total:</small><br>
								<span><?php echo number_format($grandTotal,2); ?></span><br>
								<small>*in Philippine peso</small>
							</p>
						</div>
                        <div class="content">
                        	
                                 <a href="/" class="btn btn-large inline" id="">Return to store</a>
                                 <br><br>OR<br><br>
                                 <input type="submit" class="btn btn-large inline" value="View order history" id="">
                             
                        </div>
                        </center>
					</div> <!-- //end span4 -->
				
	
					
				</div> <!-- //end row -->		
			</div> <!-- //end span12 -->
		</div> <!-- //end row -->
	</div>
</div>    