<div class="main-content">
  <div class="container-fluid">
    <div class="row-fluid">

      <div class="area-top clearfix">
        <div class="pull-left header">
          <h3 class="title">
            <i class="icon-table"></i>
            Product List
          </h3>
          <h5>
            Add, Edit, Remove products
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
            <i class="icon-table"></i> Products
          </span>
          <span class="breadcrumb-arrow"><span></span></span>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid padded">
    <div class="row-fluid">
  <div class="span6">
  
  <a href="<?php echo base_url().'admin/products/add/'; ?>" class="btn btn-blue btn-large"><i class="icon-plus"></i> Add Product</a>
  <br><br>
  
    <!-- find me in partials/tasks_table -->

<!--<div class="box">
  <div class="box-header">
    <span class="title">New Members</span>
    <ul class="box-toolbar">
      <li><span class="label label-green">2</span></li>
    </ul>
  </div>
  <div class="box-content">
    <table class="table table-normal">
      <thead>
      <tr>
        <td></td>
        <td>Name</td>
        <td>Location</td>
        <td style="width: 40px"></td>
      </tr>
      </thead>

      <tbody>
      <tr class="status-pending">
        <td class="icon"><i class="icon-exchange"></i></td>
        <td><a href="#">Doing the dew</a></td>
        <td><b>0%</b></td>
        <td>
          <div class="btn-group">
            <button class="btn btn-mini btn-default dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i></button>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div>
        </td>
      </tr>

      </tbody>
    </table>
  </div>
</div>


  </div>

  <div class="span6">

<div class="box">
  <div class="box-header">
    <span class="title">New Paid Members</span>
    <ul class="box-toolbar">
      <li><span class="label label-blue">5</span></li>
    </ul>
  </div>
  <div class="box-content">
    <table class="table table-normal">
      <thead>
      <tr>
        <td></td>
        <td>Name</td>
        <td>Amout</td>
      </tr>
      </thead>

      <tbody>
      <tr>
        <td style="width: 60px;">120</td>
        <td style="text-align: center;"><i class="icon-user"></i> Christian Symon Buenavista</td>
        <td class="status-error">PHP 500 </td>
      </tr>

      

      </tbody>
    </table>


  </div>
</div>-->


  </div>
</div>

<div class="row-fluid">
  <div class="span12">
    <div class="box">
      <div class="box-header"><span class="title">Product List</span></div>
      <div class="box-content">
        <!-- find me in partials/data_tables_custom -->

<div id="dataTables">
<table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
<thead>
<tr>
  <th><div> Category</div></th>
  <th><div> Name</div></th>
  <th><div> Description</div></th>
  <th><div> Price</div></th>
  <th><div></div></th>
</tr>
</thead>
<tbody>
<?php $view = base_url().'admin/products/detail/'; ?>
<?php $edit = base_url().'admin/products/edit/'; ?>
<?php $remove = base_url().'admin/products/remove/'; ?>
<?php foreach($products as $key => $value): ?>
	<tr>
      <td><?php echo $value['category_name']; ?></td>
      <td><?php echo $value['name']; ?></td>
      <td><?php echo $value['description']; ?></td>
      <td><?php echo $value['price']?></td>
      <td class="center">
      	<!--<a href="<?php echo $view.$value['ID']; ?>" class="btn btn-mini btn-default">
        	<i class="icon-zoom-in"></i> View</a>-->
      	<a href="<?php echo $edit.$value['ID']; ?>" class="btn btn-mini btn-black">
        	<i class="icon-edit"></i> Edit</a>
      	<a href="<?php echo $remove.$value['ID']; ?>" class="btn btn-mini btn-red">
        	<i class="icon-remove"></i> Remove</a>
      </td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
<?php //echo '<pre>'; print_r($products); ?>