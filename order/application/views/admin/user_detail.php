<div class="main-content">
  <div class="container-fluid">
    <div class="row-fluid">

      <div class="area-top clearfix">
        <div class="pull-left header">
          <h3 class="title">
            <i class="icon-edit"></i>
            Edit Member
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
                <i class="icon-group"></i> User
              </span>
              <span class="breadcrumb-arrow"><span></span></span>
            </div>
        

        <div class="breadcrumb-button">
          <span class="breadcrumb-label">
            <i class="icon-table"></i> Members
          </span>
          <span class="breadcrumb-arrow"><span></span></span>
        </div>
         <div class="breadcrumb-button">
          <span class="breadcrumb-label">
            <i class="icon-edit"></i> Edit Member
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
        <span class="title"><i class="icon-user"></i> Member's Detail</span>
      </div>

      <div class="box-content">
      
        <form class="fill-up validatable" method="post" action="<?php echo '/admin/usersEdit/'.$row['user_ID'];?>">
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
                  <input type="text" class="validate[required]" placeholder="Name" name="name" value="<?php echo $row['name']; ?>"/>
                </li>
                
                <li class="input">
                	<label><h5>Email Address :</h5></label>
                  <input type="text" class="validate[required]" placeholder="Email"name="email" value="<?php echo $row['email']; ?>"/>
                </li>
				
				<li class="input">
                	<label><h5>City :</h5></label>
                  <input type="text" class="validate[required]" placeholder="City"  name="city" value="<?php echo $row['city']; ?>"/>
                </li>
                	<li class="input">
                	<label><h5>Address :</h5></label>
                  <textarea class="validate[required]" placeholder="Address" name="address" rows="6"><?php echo $row['address']; ?></textarea>
                </li>
                
                
              </ul>
            </div>

            <div class="span6">
            	
              <ul class="padded separate-sections">
              	
                <li>
            		<h4 class="title">
            		Member's Description / Note
          			</h4>    
                </li>
                <hr>
                <li class="input">
                  <label><h5><?php echo ucfirst($row['name']).' is :'; ?></h5></label>
                  <textarea placeholder="Small Description of the user" class="" name="note" rows="6"><?php echo $row['note']; ?></textarea>
                </li>
             
                <hr>
                <li>
                	
                	<label for="ienabled"><h5>Enable :</h5></label>
                	<?php if($row['enable']): ?>
           		 		<input type="checkbox" class="iButton-icons" name="enable" checked="checked" id="ienabled"/>
                    <?php else: ?>
           		 		<input type="checkbox" class="iButton-icons" name="enable" id="ienabled"/>
					<? endif;?>
                    
                </li>
                <li>
                  <div class="row-fluid">
                    <div class="span12">

                      <div class="note large">
                        <i class="icon-warning-sign"></i> Warning: You have to complete all fields
                      </div>

                      <p>
                        Disabled user cannot use their account to login in our system.
                      </p>
                    </div>
                  </div>
                </li>
              </ul>
              
              
            </div>
          </div>
          
          
          <div class="form-actions">
            <button type="submit" class="btn btn-blue">Save changes</button>
            <button type="button" class="btn btn-default">Cancel</button>
            
          </div>	
        </form>

      </div>
    </div>

  </div>
</div>



  </div>
</div>