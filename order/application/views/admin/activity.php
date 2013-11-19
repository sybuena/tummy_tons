<div class="content">
        
        <div class="header">
            <div class="stats">
    <p class="stat"><span class="number">10</span>Users</p>
    <p class="stat"><span class="number">19</span>Events</p>
    <p class="stat"><span class="number">12</span>Calendars</p>
</div>

            <h1 class="page-title">Calendar</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li class="active">Calendar</li>
        </ul>

        <div class="container-fluid">
            <div class="row-fluid">
                    


<link rel='stylesheet' type='text/css' href="<?php echo base_url().'assets/lib/fullcalendar-1.5.3/fullcalendar/fullcalendar.css'; ?>" />
<link rel='stylesheet' type='text/css' href="<?php echo base_url().'assets/lib/fullcalendar-1.5.3/fullcalendar/fullcalendar.print.css'; ?>" media='print' />
<script type='text/javascript' src="<?php echo base_url().'assets/lib/fullcalendar-1.5.3/fullcalendar/fullcalendar.min.js';?> "></script>

<script type='text/javascript'>

	$(document).ready(function() {

		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();

		$('#calendar').fullCalendar({
            header: false,
		});
        $('#calendar').fullCalendar('next');

	});

</script>
<style type='text/css'>

	#calendar {
		width: 100%;
		margin: 0 auto;
		}

</style>



<div style="float:right; margin-top: 1em;">
    <a href="#" class="btn btn-primary">Add</a>
    <a href="#" class="btn btn-danger">Remove</a>
    <a href="#" class="btn btn-info">Info</a>
    <a href="#" class="btn btn-success">Success</a>
    <a href="#" class="btn btn-warning">Warning</a>
</div>
<h2>Upcoming Events</h2>
<div id='calendar'></div>