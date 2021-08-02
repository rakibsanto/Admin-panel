<?php include("top.php"); ?>

        <!-- page heading start-->
        <div class="page-heading">
            <h3>
               Orders Details
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Manage Orders</a>
                </li>
                <li class="active">Orders Details </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
             <div class="row">
                <div class="col-sm-12">
                <section class="panel">
                <header class="panel-heading">
                    Orders Details
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
                    <th>Item ID</th>
                    <th>Item Name</th>
                    <th>Item Price</th>
                    <th>Item Image</th>
                    <th>Delete Item</th>
                </tr>
                </thead>
                <tbody>
                <tr class="">
                    <td>214</td>
                    <td>T-shirt</td>
                    <td>1000</td>
                    <td>image</td>
                    <td><button class="btn btn-primary" type="submit">Delete</button></td>
                </tr>
				<tr class="">
                    <td>214</td>
                    <td>T-shirt</td>
                    <td>1000</td>
                    <td>image</td>
                    <td><button class="btn btn-primary" type="submit">Delete</button></td>
                </tr><tr class="">
                    <td>214</td>
                    <td>T-shirt</td>
                    <td>1000</td>
                    <td>image</td>
                    <td><button class="btn btn-primary" type="submit">Delete</button></td>
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