<?php include("top.php"); ?>

                <div class="page-heading">
            <h3>
                Create Admin
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Manage Admin</a>
                </li>
                <li class="active"> Create Admin </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Please fill the form with valid information
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal adminex-form" id="signupForm" method="get" action="#">
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-2">Admin Name</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="firstname" name="firstname" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-2">Admin Email</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="lastname" name="lastname" type="email" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="username" class="control-label col-lg-2">Admin Password</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="username" name="username" type="password" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-primary" type="submit">Save</button>  
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
			
        </div>
        <!--body wrapper end-->
		
<?php include("bottom.php"); ?>
        
