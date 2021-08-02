<?php include("top.php"); ?>

<!-- page heading start-->
        <div class="page-heading">
            <h3>
                Edit Category
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Manage Category</a>
                </li>
                <li class="active"> Edit Category </li>
            </ul>
        </div>
<!-- page start-->

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Edit Category
                    </header>
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name Here..">
                            </div>

							<div class="form-group">
                                <label for="exampleInputFile">Category Status</label>
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