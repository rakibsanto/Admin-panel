<?php include("top.php"); ?>

<!-- page heading start-->
        <div class="page-heading">
            <h3>
                Edit Subcategory
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Manage Subcategory</a>
                </li>
                <li class="active"> Edit Subcategory </li>
            </ul>
        </div>
<!-- page start-->

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Edit Subcategory
                    </header>
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group">
                                <label>Subcategory Name</label>
                                <input type="text" class="form-control" placeholder="Enter Subcategory Name Here..">
                            </div>
							
							<div class="form-group">
                                <label>Parent Category Name</label>
                                <input type="text" class="form-control" placeholder="Enter Parent Category Name Here..">
                            </div>

							<div class="form-group">
                                <label>Subcategory  Status</label>
                                <select>
									<option>Select here</option>
										<option>Active</option>
										<option>Inactive</option>
								</select>
                                
                            </div>
                           
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
               
			</div>
			
		</div>
        <!--body wrapper end-->

<?php include("bottom.php"); ?>