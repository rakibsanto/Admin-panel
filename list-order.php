<?php include("top.php"); ?>

        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                List Orders
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Manage Orders</a>
                </li>
                <li class="active">List Orders </li>
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
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Customer Mobile</th>
                    <th>Customer Address</th>
                    <th>Edit Order Status</th>
                    <th>Edit Payment Status</th>
                    <th>Order Details</th>
                </tr>
                </thead>
                <tbody>
                <tr class="">
                    <td>214</td>
                    <td>Smith</td>
                    <td>smith@gmail.com</td>
                    <td>01758094892</td>
                    <td>Dhaka</td>
                    <td>
					<select>
						<option>Pending</option>
						<option>Processing</option>
						<option>Cancelled</option>
						<option>Completed</option>
					</select>
					</td>
                    <td>
					<select>
						<option>Unpaid</option>
						<option>Paid</option>
					</select>
					</td>
                    <td><button class="btn btn-primary" type="submit">Details</button></td>
                </tr>
				<tr class="">
                    <td>215</td>
                    <td>Smith</td>
                    <td>smith@gmail.com</td>
                    <td>01758094892</td>
                    <td>Dhaka</td>
                    <td>
					<select>
						<option>Pending</option>
						<option>Processing</option>
						<option>Cancelled</option>
						<option>Completed</option>
					</select>
					</td>
                    <td>
					<select>
						<option>Unpaid</option>
						<option>Paid</option>
					</select>
					</td>
                    <td><button class="btn btn-primary" type="submit">Details</button></td>
                </tr>
				<tr class="">
                    <td>216</td>
                    <td>Smith</td>
                    <td>smith@gmail.com</td>
                    <td>01758094892</td>
                    <td>Dhaka</td>
                    <td>
					<select>
						<option>Pending</option>
						<option>Processing</option>
						<option>Cancelled</option>
						<option>Completed</option>
					</select>
					</td>
                    <td>
					<select>
						<option>Unpaid</option>
						<option>Paid</option>
					</select>
					</td>
                    <td><button class="btn btn-primary" type="submit">Details</button></td>
                </tr>
                
                </tbody>
                </table>
                </div>
                </div>
                </section>
                </div>
                </div>
        </div>

<?php include("bottom.php"); ?>