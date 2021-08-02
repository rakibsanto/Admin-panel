<?php include("top.php"); ?>

<!-- page heading start-->
        <div class="page-heading">
            <h3>
                Add Slider Image
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Manage Slider</a>
                </li>
                <li class="active"> Add Slider Image </li>
            </ul>
        </div>
        <!-- page heading end-->

<!-- page start-->

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Add Slider Image
                    </header>
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Slider Title</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Slider Title Here..">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile">
                            </div>
							
							<div class="form-group">
                                <label for="exampleInputFile">Slider Status</label>
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

<?php include("bottom.php"); ?>