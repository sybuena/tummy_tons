<div class="main-content">
  <div class="container-fluid">
    <div class="row-fluid">

      <div class="area-top clearfix">
        <div class="pull-left header">
          <h3 class="title">
            <i class="icon-edit"></i>
            Edit Product
          </h3>
          <h5>
            A subtitle can be added here
          </h5>
        </div>

      </div>
    </div>
  </div>

  <div class="container-fluid padded">
    <div class="row-fluid">

      <!-- Breadcrumb line -->

      <div id="breadcrumbs">
        <div class="breadcrumb-button blue">
          <span class="breadcrumb-label"><i class="icon-home"></i> Home</span>
          <span class="breadcrumb-arrow"><span></span></span>
        </div>

        <div class="breadcrumb-button">
          <span class="breadcrumb-label">
            <i class="icon-table"></i> Product List
          </span>
          <span class="breadcrumb-arrow"><span></span></span>
        </div>
         <div class="breadcrumb-button">
          <span class="breadcrumb-label">
            <i class="icon-edit"></i> Edit Product
          </span>
          <span class="breadcrumb-arrow"><span></span></span>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid padded">
    <div class="row-fluid">
  <div class="span12">

<div class="row-fluid">
  <div class="span12">

    <div class="box">
      <div class="box-header">
        <span class="title"><i class="icon-bar-chart"></i> Product's Detail</span>
      </div>

      <div class="box-content">

		<?php echo form_open('admin/editOrder/'.$order_detail[0]['transaction_ID']); ?>
        <div class="fill-up validatable">
		<div class="row-fluid">
            <div class="span6">
			<ul class="padded separate-sections">
                <li>
            		<h4 class="title">
                     Customer Information
          			</h4>    
                </li>
                <hr>
				<li class="input">
                	<label><h5>Name :</h5></label>
                  <input type="text" class="validate[required] span10" disabled name="name" value="<?php echo $order_detail[0]['name']; ?>"/>
                </li>
                
				<li class="input">
                	<label><h5>Email :</h5></label>
                  <input type="text" class="validate[required] span10" disabled name="price" value="<?php echo $order_detail[0]['email']; ?>"/>
                </li>
                
				<li class="input">
                	<label><h5>Address :</h5></label>
                  <textarea type="text" class="validate[required] span10" rows="6" disabled name="price"><?php echo $order_detail[0]['address']; ?>"</textarea>
                </li>
                
              </ul>
            </div>

            <div class="span6">
            	<br>
                
				
              <ul class="padded separate-sections">
              	<li>
            		<h4 class="title">
                     Transaction Information
          			</h4>    
                </li>
                <hr
				<li class="input">
                	<label><h5>Status :</h5></label>
                    <select name="transaction_status">
                    	<option value="<?php echo $order_detail[0]['transaction_status']; ?>"><?php echo $order_detail[0]['transaction_status'];?></option>
                    	<?php foreach($stat as $v) :?>
                        	<?php if($v['value'] != $product[0]['transaction_status']): ?>
                    			<option value="<?php echo $v['value']?>"><?php echo $v['value'];?></option>
                        	<?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </li>
                <li>
            		<h4 class="title">
            		Orders :
          			</h4>    
                </li>
                
                <li>
                <div class="col-sm-7">
						
						<div class="content">
							<div class="cart-checkout clearfix">
                            	
								<?php $grandTotal = 0; ?>
								<?php foreach($order_detail as $k => $v): ?>
                                    <div class="item clearfix well">
                                        <img src="<?php echo !empty($v['image']) ? $v['image'] : '/assets/img/spag.jpg'; ?>" alt="" width="100" class="pull-left">
                                        <div class="desc pull-left" style="margin-left: 20px">
                                            <p class="name"><h4><?php echo ucfirst($v['product_name']); ?></h4></p>
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
                        
					</div>
          
          
                </li>
                <li>
                <div class="content checkout-total well">
							<p><center>
								<h3>Grant Total:</h3>
								<h3><?php echo $grandTotal; ?></h3>
                                </center>
							</p>
						</div>
                </li>
              </ul>
              
              
            </div>
          </div>
          
          
          <div class="form-actions">
            <button type="submit" class="btn btn-blue">Save changes</button>
            <button type="button" class="btn btn-default">Cancel</button>
            
          </div>	
        </div>

      </div>
    </div>
</form>
  </div>
</div>



  </div>
</div>

<?php //echo '<pre>'; print_r($product); ?>