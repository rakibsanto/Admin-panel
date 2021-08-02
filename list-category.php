<?php include("top.php"); ?>

<!-- page heading start-->
        <div class="page-heading">
            <h3>
               List Category
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Manage Category</a>
                </li>
                <li class="active"> List Category </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
             <div class="row">
                <div class="col-sm-12">
                <section class="panel">
                <header class="panel-heading">
                    List Category
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
                    <th>Category ID</th>
                    <th>Category Name</th> 
                    <th>Category Status</th>
                    <th>Edit Category </th>
                    
                </tr>
                </thead>
                <tbody>
                <tr class="">
					<td>3455</td>
                    <td>Shirt</td>
                    <td>
						<select>
							<option>Active</option>
							<option>Inactive</option>
						</select>
					</td>
                    <td><button class="btn btn-primary" type="submit">Edit</button></td>
                </tr>
                
                <tr class="">
                    <td>1124 </td>
                    <td> T-Shirt</td>
                    <td>
						<select>
							<option>Active</option>
							<option>Inactive</option>
						</select>
					</td>
                    <td><button class="btn btn-primary" type="submit">Edit</button></td>
                </tr>
                <tr class="">
                    <td>2547</td>
                    <td>Pant</td>
                    <td>
						<select>
							<option>Active</option>
							<option>Inactive</option>
						</select>
					</td>
                    <td><button class="btn btn-primary" type="submit">Edit</button></td>
                </tr>
                <tr class="">
                    <td>5541</td>
                    <td>Glosary</td>
                    <td>
						<select>
							<option>Active</option>
							<option>Inactive</option>
						</select>
					</td>
                    <td><button class="btn btn-primary" type="submit">Edit</button></td>
                </tr>
                <tr class="">
                    <td>7854</td>
                    <td>Parfume</td>
                    <td>
						<select>
							<option>Active</option>
							<option>Inactive</option>
						</select>
					</td>
                    <td><button class="btn btn-primary" type="submit">Edit</button></td>
                </tr>
                <tr class="">
                    <td>2251</td>
                    <td>Jines</td>
                    <td>
						<select>
							<option>Active</option>
							<option>Inactive</option>
						</select>
					</td>
                    <td><button class="btn btn-primary" type="submit">Edit</button></td>
                </tr>
                <tr class="">
                    <td>2254</td>
                    <td>Gabourdin</td>
                    <td>
						<select>
							<option>Active</option>
							<option>Inactive</option>
						</select>
					</td>
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