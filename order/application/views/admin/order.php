<div class="main-content">
  <div class="container-fluid">
    <div class="row-fluid">

      <div class="area-top clearfix">
        <div class="pull-left header">
          <h3 class="title">
            <i class="icon-table"></i>
            Order List
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
      </div>
    </div>
  </div>

  <div class="container-fluid padded">
    <div class="row-fluid">
  <div class="span6">
    <!-- find me in partials/tasks_table -->
<?php //echo '<pre>'; print_r($daily['tatal']); ?>
<div class="box">
  <div class="box-header">
    <span class="title">Daily Sales</span>
    <ul class="box-toolbar">
      <li><span class="label label-green"><?php echo $daily['total']; ?></span></li>
    </ul>
  </div>
  <div class="box-content" style="overflow-y: auto;
max=height: 300px">
    <table class="table table-normal">
      <thead>
      <tr>
        <td>Date</td>
        <td>Email</td>
        <td>Price</td>
        <td style="width: 40px"></td>
      </tr>
      </thead>

      <tbody>
      <?php //echo '<pre>'; print_r($daily); ?>
      <?php foreach($daily['row'] as $k => $v) :?>
        <tr class="status-pending">
            <td><?php echo date('g:i a', strtotime($v['transaction_created']))?></td>
            <td><?php echo $v['email']?></td>
            <td><?php echo 'Php '.number_format($v['amount'],2); ?></td>
            <td><button class="btn btn-mini btn-black">view</button></td>
        </tr>
	 <?php endforeach;?>
      </tbody>
    </table>
  </div>
</div>


  </div>

  <div class="span6">
    <!-- find me in partials/stats_table -->

<div class="box">
  <div class="box-header">
    <span class="title">Weekly</span>
    <ul class="box-toolbar">
      <li><span class="label label-blue"><?php echo $weekly['total']; ?></span></li>
    </ul>
  </div>
  <div class="box-content" style="overflow-y: auto;
max-height: 300px;">
    <table class="table table-normal">
      <thead>
      <tr>
        <td>Date</td>
        <td>Email</td>
        <td>Price</td>
        <td style="width: 40px"></td>
      </tr>
      </thead>

      <tbody>
      <?php //echo '<pre>'; print_r($daily); ?>
      <?php foreach($weekly['row'] as $k => $v) :?>
        <tr class="status-pending">
            <td><?php echo date('F j, Y, g:i a', strtotime($v['transaction_created']))?></td>
            <td><?php echo $v['email']?></td>
            <td>Php <?php echo isset($v['amount']) ? number_format($v['amount'],2) : '0'; ?></td>
            <td><button class="btn btn-mini btn-black">view</button></td>
        </tr>
	 <?php endforeach;?>
      </tbody>
    </table>


  </div>
</div>


  </div>
</div>

<div class="row-fluid">
  <div class="span12">
    <div class="box">
      <div class="box-header"><span class="title">Order List</span></div>
      <div class="box-content">
        <!-- find me in partials/data_tables_custom -->

<div id="dataTables">

<table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
<thead>
<tr>
  <th><div>Email</div></th>
  <th><div>Status</div></th>
  <th><div>Created</div></th>
  <th><div></div></th>
</tr>
</thead>
<tbody>
<?php $view = base_url().'admin/orders/detail/'; ?>
<?php $edit = base_url().'admin/orders/edit/'; ?>
<?php $remove = base_url().'admin/orders/remove/'; ?>
<?php foreach($order_list as $key => $value): ?>
	<tr>
      <td><?php echo $value['email']; ?></td>
      <td><?php echo $value['transaction_status']; ?></td>
      <td><?php echo date('F j, Y, g:i a', strtotime($value['transaction_created']));?></td>
      <td class="center">
      	<a href="<?php echo $view.$value['transaction_ID']; ?>" class="btn btn-mini btn-black">
        	<i class="icon-edit"></i> View</a>
      	<a href="<?php echo $remove.$value['transaction_ID']; ?>" class="btn btn-mini btn-red">
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