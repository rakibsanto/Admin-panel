<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminex.themebucket.net/blank_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Sep 2015 19:55:06 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>Admin Panel</title>

  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="dashboard.php"><img src="images/logo.png" alt=""></a>
        </div>

        <!--logo and iconic logo end-->


        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="images/photos/3.jpg" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">RakibSanto</a></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                    <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                    <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <!--<li class="menu-list"><a href="dashboard.php"><i class="fa fa-home"></i> <span>Dashboard</span></a> -->
				<li><a href="dashboard.php"><i class="fa fa-bullhorn"></i> <span>Dashboard</span></a></li>
                </li>
                <li class="menu-list"><a href="#"><i class="fa fa-laptop"></i> <span>Manage Admin</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="create-admin.php"> Create Admin</a></li>
                        <li><a href="list-admin.php"> List Admin</a></li>
                        <li><a href="edit-admin.php"> Edit Admin</a></li>

                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="fa fa-book"></i> <span>Manage Slider</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="add-slider-image.php">Add Slider Image</a></li>
                        <li><a href="list-slider-image.php">List Slider Images</a></li>
                        
                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="fa fa-group"></i> <span>Manage Customer</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="list-customer.php"> List Customer</a></li>
                        
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="fa fa-cogs"></i> <span>Manage Category</span></a>
					<ul class="sub-menu-list">
						<li><a href="create-category.php">Create Category</a></li>
						<li><a href="edit-category.php">Edit Category</a></li>
						<li><a href="list-category.php">List Category</a></li>
					</ul>
				
				</li>

                <li class="menu-list"><a href="#"><i class="fa fa-cogs"></i> <span>Manage Subcategory</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="create-subcategory.php">Create Subcategory </a></li>
                        <li><a href="edit-subcategory.php">Edit Subcategory </a></li>
                        <li><a href="list-subcategory.php">List Subcategory </a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="fa fa-suitcase"></i> <span>Manage Products</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="create-product.php"> Create Product</a></li>
                        <li><a href="edit-product.php"> Edit Product</a></li>
                        <li><a href="list-product.php"> List Product</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="fa fa-bar-chart-o"></i> <span>Manage Orders</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="list-order.php"> List Orders</a></li>
                        <li><a href="order-detail.php">Order Details</a></li>
                    </ul>
                </li>
               

                
                
                <li><a href="login.html"><i class="fa fa-sign-in"></i> <span>Logout Page</span></a></li>


                <!--multi level menu start-->
                <!--<li class="menu-list">-->
                    <!--<a href="#"><i class="fa fa-map-marker"></i> <span>Multilavel</span></a>-->
                    <!--<ul class="sub-menu-list">-->
                        <!--<li class="menu-list"><a href="#"> menu1</a>-->
                            <!--<ul class="sub-menu-list">-->
                                <!--<li class="menu-list"><a href="#"><i class="fa fa-map-marker"></i> <span>menu2</span></a>-->
                                    <!--<ul class="sub-menu-list">-->
                                        <!--<li><a href="#"> menu2 sub</a></li>-->
                                        <!--<li><a href="#"> menu2 sub2</a></li>-->
                                    <!--</ul>-->
                                <!--</li>-->
                            <!--</ul>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</li>-->
                <!--multi level menu end-->

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

        <!--toggle button start-->
        <a class="toggle-btn"><i class="fa fa-bars"></i></a>
        <!--toggle button end-->

        <!--search start-->
        <form class="searchform" action="http://adminex.themebucket.net/index.html" method="post">
            <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
        </form>
        <!--search end-->

        <!--notification menu start -->
        <div class="menu-right">
            <ul class="notification-menu">
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-tasks"></i>
                        <span class="badge">8</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-head pull-right">
                        <h5 class="title">You have 8 pending task</h5>
                        <ul class="dropdown-list user-list">
                            <li class="new">
                                <a href="#">
                                    <div class="task-info">
                                        <div>Database update</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning">
                                            <span class="">40%</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="new">
                                <a href="#">
                                    <div class="task-info">
                                        <div>Dashboard done</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success">
                                            <span class="">90%</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div>Web Development</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" role="progressbar" class="progress-bar progress-bar-info">
                                            <span class="">66% </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div>Mobile App</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="33" role="progressbar" class="progress-bar progress-bar-danger">
                                            <span class="">33% </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div>Issues fixed</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar">
                                            <span class="">80% </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="new"><a href="#">See All Pending Task</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge">5</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-head pull-right">
                        <h5 class="title">You have 5 Mails </h5>
                        <ul class="dropdown-list normal-list">
                            <li class="new">
                                <a href="#">
                                    <span class="thumb"><img src="images/photos/user1.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">John Doe <span class="badge badge-success">new</span></span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="thumb"><img src="images/photos/user2.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jonathan Smith</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="thumb"><img src="images/photos/user3.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jane Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="thumb"><img src="images/photos/user4.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Mark Henry</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="thumb"><img src="images/photos/user5.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jim Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li class="new"><a href="#">Read All Mails</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge">4</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-head pull-right">
                        <h5 class="title">Notifications</h5>
                        <ul class="dropdown-list normal-list">
                            <li class="new">
                                <a href="#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    <span class="name">Server #1 overloaded.  </span>
                                    <em class="small">34 mins</em>
                                </a>
                            </li>
                            <li class="new">
                                <a href="#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    <span class="name">Server #3 overloaded.  </span>
                                    <em class="small">1 hrs</em>
                                </a>
                            </li>
                            <li class="new">
                                <a href="#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    <span class="name">Server #5 overloaded.  </span>
                                    <em class="small">4 hrs</em>
                                </a>
                            </li>
                            <li class="new">
                                <a href="#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    <span class="name">Server #31 overloaded.  </span>
                                    <em class="small">4 hrs</em>
                                </a>
                            </li>
                            <li class="new"><a href="#">See All Notifications</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <img src="images/photos/3.jpg" alt="" />
                        RakibSanto
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                        <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i>  Settings</a></li>
                        <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!--notification menu end -->

        </div>
        <!-- header section end-->