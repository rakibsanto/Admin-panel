<?php include("top.php"); ?>


        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                List Admin
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Manage Admin</a>
                </li>
                <li class="active"> List Admin </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
             <div class="row">
                <div class="col-sm-12">
                <section class="panel">
                <header class="panel-heading">
                    List Admin
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
                    <th>Admin ID</th>
                    <th>Admin Name</th>
                    <th>Admin Status</th>
                    <th>Reset Password </th>
                    <th>Edit Admin </th>
                </tr>
                </thead>
                <tbody>
                <tr class="">
                    <td>3455</td>
                    <td>Smith</td>
					<td>
					<select>
						<option>Active</option>
						<option>Inactive</option>
					</select>
					</td>
                    <td><button class="btn btn-primary" type="submit">Reset</button></td>
                    <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    
                </tr>
                <tr class="">
                    <td>567</td>
                    <td>Firebox</td>
                    <td><select>
						<option>Active</option>
						<option>Inactive</option>
					</select>
					</td>
                    <td><button class="btn btn-primary" type="submit">Reset</button></td>
                    <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    
                </tr>
                <tr class="">
                    <td>987</td>
                    <td> Dareon</td>
                    <td><select>
						<option>Active</option>
						<option>Inactive</option>
					</select>
					</td>
                    <td><button class="btn btn-primary" type="submit">Reset</button></td>
                    <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    
                </tr>
                <tr class="">
                    <td>342</td>
                    <td>Bucket</td>
                    <td><select>
						<option>Active</option>
						<option>Inactive</option>
					</select>
					</td>
                    <td><button class="btn btn-primary" type="submit">Reset</button></td>
                    <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    
                </tr>
                <tr class="">
                    <td>345</td>
                    <td> Doe</td>
                    <td><select>
						<option>Active</option>
						<option>Inactive</option>
					</select>
					</td>
                    <td><button class="btn btn-primary" type="submit">Reset</button></td>
                    <td><button class="btn btn-primary" type="submit">Edit</button></td>
                    
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
        
