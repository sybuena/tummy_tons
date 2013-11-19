<div class="main-content">
  <div class="container-fluid">
    <div class="row-fluid">

      <div class="area-top clearfix">
        <div class="pull-left header">
          <h3 class="title">
            <i class="icon-edit"></i>
            Add Product
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
            <i class="icon-edit"></i> Add Product
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
        <span class="title"><i class="icon-bar-chart"></i> Product's Information</span>
      </div>

      <div class="box-content">

		<?php echo form_open('admin/addProduct/'); ?>
        <div class="fill-up validatable">
		<div class="row-fluid">
            <div class="span6">
			<ul class="padded separate-sections">
                <li>
            		<h4 class="title">
                     General Information
          			</h4>    
                </li>
                <hr>
				<li class="input">
                	<label><h5>Name :</h5></label>
                  <input type="text" class="validate[required]" name="name"/>
                </li>
                
				<li class="input">
                	<label><h5>Description :</h5></label>
                  <textarea name="description" class="validate[required]" rows="6"></textarea>
                </li>
				<li class="input">
                	<label><h5>Price :</h5></label>
                  <input type="text" class="validate[required]" name="price">
                </li>
                <li>
                	
                	<label for="ienabled"><h5>Enable :</h5></label>
           		 		<input type="checkbox" name="enable" class="iButton-icons" checked="checked" id="ienabled"/>
                   
                    
                </li>
                <li>
                	
                	<label for="ienabled"><h5>Promote :</h5></label>
                		<input type="checkbox" name="promote" class="iButton-icons" id="ienabled"/>
				
                    
                </li>
                <li>
                  <div class="row-fluid">
                    <div class="span12">

                      <div class="note large">
                        <i class="icon-warning-sign"></i> Warning: You have to complete all fields
                      </div>

                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non felis non orci congue mollis. Sed euismod magna sed nunc dignissim tincidunt. Maecenas faucibus varius elit.
                      </p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>

            <div class="span6">
            	<br>
                
				
              <ul class="padded separate-sections">
              	
				<li class="input">
                	<label><h5>Category :</h5></label>
                    <select name="category_ID">
                    	
                    	<?php foreach($category as $v) :?>
                        	<option value="<?php echo $v['ID']?>"><?php echo $v['category_name'];?></option>
                        	
                        <?php endforeach; ?>
                    </select>
                </li>
                <li>
            		<h4 class="title">
            		Images
          			</h4>    
                </li>
                <hr>
                <li class="input">
                	<img src="<?php echo $default; ?>" width="200" class="img-thumbnail"/>
                </li>
                
                <li>
                <div class="row-fluid">
          
          
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
