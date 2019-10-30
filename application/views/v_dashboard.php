<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?= base_url()?>assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?= base_url()?>assets/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?= base_url()?>assets/css/lines.css" rel='stylesheet' type='text/css' />
<link href="<?= base_url()?>assets/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="<?= base_url()?>assets/js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="<?= base_url()?>assets/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="<?= base_url()?>assets/js/metisMenu.min.js"></script>
<script src="<?= base_url()?>assets/js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="<?= base_url()?>assets/js/d3.v3.js"></script>
<script src="<?= base_url()?>assets/js/rickshaw.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">PPOB</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
	        		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">4</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header">
							<strong>Messages</strong>
							<div class="progress thin">
							  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							    <span class="sr-only">40% Complete (success)</span>
							  </div>
							</div>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="<?= base_url()?>assets/images/1.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="<?= base_url()?>assets/images/2.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="<?= base_url()?>assets/images/3.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="<?= base_url()?>assets/images/4.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="<?= base_url()?>assets/images/5.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="<?= base_url()?>assets/images/pic1.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="dropdown-menu-footer text-center">
							<a href="#">View all messages</a>
						</li>	
	        		</ul>
	      		</li>
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="<?= base_url()?>assets/images/1.png"><span class="badge">9</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
						<li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
						<li class="dropdown-menu-header text-center">
							<strong>Settings</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
						<li class="divider"></li>
						<li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
			<form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
			</form>
		
					<div class="sidebar" id="sidebar-nav">
                    <div class="sidebar-scroll">
                    <nav>
                    <ul class="nav">
					<!--admin-->
					<?php
						if($this->session->userdata('nama_level') =='admin'){
					?>
						<li><a href="<?php echo base_url('index.php/Dashboard') ?>" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="<?php echo base_url('index.php/Pelanggan') ?>" class=""><i class="lnr lnr-user"></i> <span>Pelanggan</span></a></li>
						<li><a href="<?php echo base_url('index.php/User') ?>" class=""><i class="lnr lnr-user"></i> <span>User</span></a></li>
						<li><a href="<?php echo base_url('index.php/Pembelian') ?>" class=""><i class="lnr lnr-user"></i> <span>Pembelian</span></a></li>
						<li><a href="<?php echo base_url('index.php/History') ?>" class=""><i class="lnr lnr-bookmark"></i> <span>History</span></a></li>
						<li><a href="<?php echo base_url('index.php/Login/logout') ?>" class=""><i class="lnr lnr-bookmark"></i> <span>Logout</span></a></li>
						<!--Pimpinan-->
						<?php
						} elseif ($this->session->userdata('nama_level') == 'pimpinan') {
						?>
						<li><a href="<?php echo base_url('index.php/History') ?>" class=""><i class="lnr lnr-bookmark"></i> <span>History</span></a></li>
						<li><a href="<?php echo base_url('index.php/Login/logout') ?>" class=""><i class="lnr lnr-bookmark"></i> <span>Logout</span></a></li>
						 <!--pelanggan-->
						<?php
						} elseif ($this->session->userdata('nama_level') == 'pelanggan') {
						?>
						<li><a href="<?php echo base_url('index.php/History') ?>" class=""><i class="lnr lnr-user"></i> <span>Pelanggan</span></a></li>
						<li><a href="<?php echo base_url('index.php/Transaksi') ?>" class=""><i class="lnr lnr-download"></i> <span>Transaksi</span></a></li>
						<li><a href="<?php echo base_url('index.php/Login/logout') ?>" class=""><i class="lnr lnr-bookmark"></i> <span>Logout</span></a></li>
						<?php
						}
						?>
				</nav>
			</div>
		</div>
                <!-- /.sidebar-collapse -->
			</div>
			
            <!-- /.navbar-static-side -->
		</nav>
		
        <div id="page-wrapper">
        <div class="graphs">
     	<div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-thumbs-up icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>45%</strong></h5>
                      <span>New Orders</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>1019</strong></h5>
                      <span>New Visitors</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-comment user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>1012</strong></h5>
                      <span>New Users</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-dollar dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>$450</strong></h5>
                      <span>Profit Today</span>
                    </div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
      </div>




</div>
	      <!-- map -->
<link href="<?= base_url()?>assets/css/jqvmap.css" rel='stylesheet' type='text/css' />
<script src="<?= base_url()?>assets/js/jquery.vmap.js"></script>
<script src="<?= base_url()?>assets/js/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="<?= base_url()?>assets/js/jquery.vmap.world.js" type="text/javascript"></script>
<script type="text/javascript">
	
</script>

	
		<div class="copy">
            <p>Copyright &copy; 2019 Modern. All Rights Reserved | Design by Mutiara</a> </p>
	    </div>
		</div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
</body>
</html>
