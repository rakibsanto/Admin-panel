<?php include("top.php"); ?>

<!-- page heading start-->
        <div class="page-heading">
            <h3>
               List Subcategory
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Manage Subcategory</a>
                </li>
                <li class="active"> List Subcategory </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
             <div class="row">
                <div class="col-sm-12">
                <section class="panel">
                <header class="panel-heading">
                    List Subcategory
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
                    <th>Subcategory ID</th>
                    <th>Parent Category Name</th> 
                    <th>Subcategory Name</th> 
                    <th>Subcategory Status</th>
                    <th>Edit Subcategory </th>
                    
                </tr>
                </thead>
                <tbody>
                <tr class="">
					<td>3455</td>
                    <td>Men</td>
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
                    <td>Men</td>
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
					<td>Men</td>
                    <td>Pant</td>
                    <td>
						<select>
							<option>Active</option>
							<option>Inactive</option>
						</select>
					</td>
                    <td><button class="btn btn-primary" type="submit">Edit</button><td>
                </tr>
                <tr class="">
                    <td>5541</td>
					<td>Men</td>
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
					<td>Men</td>
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
					<td>Men</td>
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
					<td>Men</td>
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