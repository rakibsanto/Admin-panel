<?php include("top.php"); ?>

<!-- page heading start-->
        <div class="page-heading">
            <h3>
                List Product
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Manage Product</a>
                </li>
                <li class="active">  List product </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
             <div class="row">
                <div class="col-sm-12">
                <section class="panel">
                <header class="panel-heading">
                    List Orders
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                <div class="adv-table editable-table ">
                <div class="clearfix">
                    <div class="btn-group">
                        <button id="editable-sample_new" class="btn btn-primary">
                            Add New <i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <div class="btn-group pull-right">
                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">Print</a></li>
                            <li><a href="#">Save as PDF</a></li>
                            <li><a href="#">Export to Excel</a></li>
                        </ul>
                    </div>
                </div>
                <div class="space15"></div>
                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Prosuct Summary</th>
                    <th>Product Details</th>
                    <th>Product Quantity</th>
                    <th>Product Price</th>
                    <th>Change Status</th>
                </tr>
                </thead>
                <tbody>
                <tr class="">
                    <td>214</td>
                    <td>T-shirt</td>
                    <td>Image</td>
                    <td>Men T-shirt</td>
                    <td>T-shirt for Men</td>
                    <td>5</td>
                    <td>1500</td>
                    <td>
					<select>
						<option>Active</option>
						<option>Inactive</option>
					</select>
					</td>
                </tr>
				<tr class="">
                    <td>215</td>
                    <td>T-shirt</td>
                    <td>Image</td>
                    <td>Men T-shirt</td>
                    <td>T-shirt for Men</td>
                    <td>5</td>
                    <td>1500</td>
                    <td>
					<select>
						<option>Active</option>
						<option>Inactive</option>
					</select>
					</td>
                </tr><tr class="">
                    <td>216</td>
                    <td>Shirt</td>
                    <td>Image</td>
                    <td>Men Shirt</td>
                    <td>Shirt for Men</td>
                    <td>5</td>
                    <td>1500</td>
                    <td>
					<select>
						<option>Active</option>
						<option>Inactive</option>
					</select>
					</td>
                </tr>
                
                </tbody>
                </table>
                </div>
                </div>
                </section>
                </div>
                </div>
        </div>
        <!--body wrapper end-->

<?php include("bottom.php"); ?>