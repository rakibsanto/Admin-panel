<?php include("top.php"); ?>


        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                Edit Admin
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Manage Admin</a>
                </li>
                <li class="active"> Edit Admin </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Admin
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal adminex-form" id="commentForm" method="get" action="#">
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2">Admin Name</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="cname" name="name" minlength="2" type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-2">Admin E-Mail</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="cemail" type="email" name="email" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-2">Admin Status</label>
                                        <div class="col-lg-10">
                                            <select>
												<option>Select here</option>
												<option>Active</option>
												<option>Inactive</option>
											</select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-primary" type="submit">Update Admin</button>
                                            
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
        
