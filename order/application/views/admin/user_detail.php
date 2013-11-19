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

        <form class="fill-up validatable">
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
                	<label><h5>Firstname :</h5></label>
                  <input type="text" class="validate[required]" placeholder="Email" value="<?php echo $row['firstname']; ?>"/>
                </li>
                
                <li class="input">
                	<label><h5>Surname :</h5></label>
                  <input type="text" class="validate[required]" placeholder="Email" value="<?php echo $row['surname']; ?>"/>
                </li>
                
                <li class="input">
                	<label><h5>Email Address :</h5></label>
                  <input type="text" class="validate[required]" placeholder="Email" value="<?php echo $row['email']; ?>"/>
                </li>

                <li class="input">
                	<label><h5>Username :</h5></label>
                  <input type="text" class="validate[required]" placeholder="Username"  value="<?php echo $row['username']; ?>"/>
                </li>

                <li class="input">
                	<label><h5>Password :</h5></label>
                  <input type="password" class="validate[required]" placeholder="Password"  value="<?php echo $row['password']; ?>"/>
                </li>
				
				<li class="input">
                	<label><h5>City :</h5></label>
                  <input type="text" class="validate[required]" placeholder="Password"  value="<?php echo $row['city']; ?>"/>
                </li>
                	<li class="input">
                	<label><h5>Address :</h5></label>
                  <textarea placeholder="Address" class="validate[required]" rows="6"><?php echo $row['address']; ?></textarea>
                </li>
                <li>
                	
                	<label for="ienabled"><h5>Enable :</h5></label>
                	<?php if($row['enable']): ?>
           		 		<input type="checkbox" class="iButton-icons" checked="checked" id="ienabled"/>
                    <?php else: ?>
           		 		<input type="checkbox" class="iButton-icons" id="ienabled"/>
					<? endif;?>
                    
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
                
				<ul class="action-nav-normal rounded">

                  <li class="action-nav-button">
                    <a href="#" class="tip" title="" data-original-title="Remove Member">
                      <i class="icon-remove"></i>	
                    </a>
                  </li>
                
                  <li class="action-nav-button">
                    <a href="#" class="tip" title="" data-original-title="Send Messages">
                      <i class="icon-comments-alt"></i>
                    </a>
                  </li>
                
                  <li class="action-nav-button">
                    <a href="#" class="tip" title="" data-original-title="Files">
                      <i class="icon-folder-open-alt"></i>
                    </a>
                  </li>
                
                  <li class="action-nav-button">
                    <a href="#" class="tip" title="" data-original-title="Users">
                      <i class="icon-user"></i>
                    </a>
                  </li>
                
                
                
                </ul>
              <ul class="padded separate-sections">
              	
                <li>
            		<h4 class="title">
            		Member's Description / Note
          			</h4>    
                </li>
                <hr>
                <li class="input">
                  <label><h5><?php echo ucfirst($row['firstname']).' '.ucfirst($row['surname']).' is :'; ?></h5></label>
                  <textarea placeholder="Address" class="validate[required]" rows="6"><?php echo $row['note']; ?></textarea>
                </li>
                <li>
            		<h4 class="title">
            		Payment Information
          			</h4>    
                </li>
                <hr>
                <li>
                <div class="row-fluid">
          
          
          
          <div class="span3">
            <div class="well relative">
              <span class="triangle-button green"><i class="icon-bell"></i></span>
              some content
            </div>
          </div>
          
          <div class="span3">
            <div class="well relative">
              <span class="triangle-button blue"><i class="icon-ok"></i></span>
              some content
            </div>
          </div>
          
          <div class="span3">
            <div class="well relative">
              <span class="triangle-button orange"><i class="icon-pencil"></i></span>
              some content
            </div>
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