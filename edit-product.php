<?php include("top.php"); ?>

<!-- page heading start-->
        <div class="page-heading">
            <h3>
                Edit Product
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Mange Product</a>
                </li>
                <li class="active"> Edit Product </li>
            </ul>
        </div>
        <!-- page heading end-->
		
        <!--body wrapper start-->
        <section class="wrapper">
        <!-- page start-->

        <div class="row">
			<div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Edit Product 
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Product Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Product Name Type Here..">
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Product Summary</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control ckeditor" name="editor1" rows="6"></textarea>
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Product Details</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control ckeditor" name="editor2" rows="6"></textarea>
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Product Quantity</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Product Quantity Type Here..">
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Product Price</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Product price Type Here..">
                                </div>
                            </div>
							
                            <div class="form-group">
                                <label for="exampleInputFile2" class="col-lg-2 col-sm-2 control-label">Product Image</label>
                                <div class="col-lg-10">
                                <input type="file" id="exampleInputFile2">
                                </div>
                            </div>
                            
							<div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Product Status</label>
                                <div class="col-lg-10">
                                    <select>
										<option>Active</option>
										<option>Inactive</option>
									</select>
                                </div>
                            </div>
							
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

            </div>
        </div>
		</section>

<?php include("bottom.php"); ?>