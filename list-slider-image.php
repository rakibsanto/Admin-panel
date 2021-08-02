<?php include("top.php"); ?>

<!-- page heading start-->
        <div class="page-heading">
            <h3>
               List Slider Image
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Manage Slide</a>
                </li>
                <li class="active"> List Slider Image </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
             <div class="row">
                <div class="col-sm-12">
                <section class="panel">
                <header class="panel-heading">
                    List Slider Image
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
                    <th>Slide ID</th>
                    <th class="col-md-5">Slide Title</th> 
                    <th>Slide Status</th>
                    <th>Edit Slide </th>
                    
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
                    <td><button class="btn btn-primary" type="submit">Edit</button></td>
                </tr>
                
                <tr class="">
                    <td>1124 </td>
                    <td> Dareon</td>
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
                    <td>Bucket</td>
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
                    <td> Doe</td>
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
                    <td>Diar</td>
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
                    <td>Jhon Doe </td>
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
                    <td>Fox</td>
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