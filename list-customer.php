<?php include("top.php"); ?>

<!-- page heading start-->
        <div class="page-heading">
            <h3>
                List Customer
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Manage Customer</a>
                </li>
                <li class="active">  List Customer </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
             <div class="row">
                <div class="col-sm-12">
                <section class="panel">
                <header class="panel-heading">
                    List Customer
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
                    <th>Customer ID</th>
                    <th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Customer Mobile</th>
                    <th>Customer Signup Date</th>
                    <th>Reset Password </th>
                    <th>Change Status</th>
                </tr>
                </thead>
                <tbody>
                <tr class="">
                    <td>3455</td>
                    <td>Smith</td>
                    <td>smith@gmail.com</td>
                    <td>01751224532</td>
                    <td>01.02.2021</td>
                    <td><button class="btn btn-primary" type="submit">Reset</button></td>
                    <td><input type="checkbox" checked data-toggle="toggle"></td>
                </tr>
				<tr class="">
                    <td>3456</td>
                    <td>Jone</td>
                    <td>Jone@gmail.com</td>
                    <td>01351224532</td>
                    <td>01.02.2020</td>
                    <td><button class="btn btn-primary" type="submit">Reset</button></td>
                    <td><input type="checkbox" checked data-toggle="toggle"></td>
                </tr><tr class="">
                    <td>3457</td>
                    <td>Pitar</td>
                    <td>pitar@gmail.com</td>
                    <td>01851224532</td>
                    <td>01.02.2019</td>
                    <td><button class="btn btn-primary" type="submit">Reset</button></td>
                    <td><input type="checkbox" checked data-toggle="toggle"></td>
                </tr><tr class="">
                    <td>3458</td>
                    <td>Abraham</td>
                    <td>abraham@gmail.com</td>
                    <td>01725224532</td>
                    <td>01.02.2021</td>
                    <td><button class="btn btn-primary" type="submit">Reset</button></td>
                    <td><input type="checkbox" checked data-toggle="toggle"></td>
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