<?php include("header.php");?>
<?php include('sidebar.php');?>
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title"> 
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>Listing Products</h3>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"> </i></a></li>
                    <li class="breadcrumb-item">Bootstrap Tables</li>
                    <li class="breadcrumb-item active">Bootstrap Basic Tables</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Listing Products</h5>
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Product Batch / Model No</th>
                          <th scope="col">Product Name</th>
                          <th scope="col">Product Image</th>
                          <th scope="col">Product Type</th>
                          <th scope="col">Product Manufacturing Cost</th>
                          <th scope="col">Product Selling Cost</th>
                          <th scope="col">Is Product in Pair ?</th>
                          <th scope="col">Action1</th>
                          <th scope="col">Action2</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        	$con=mysqli_connect("localhost","root","","spicehook_project");
            							$sel="select * from product";
            							$que=mysqli_query($con,$sel);
            							while($row=mysqli_fetch_array($que))
            							{
                            $batch_no=$row["product_model_no"];
            						?>
                        <tr>
                          <th><?php echo $row["id"];?></th>
                          <td><?php echo $row["product_model_no"];?></td>
                          <td><?php echo $row["product_name"];?></td>
                          <td><img src='./upload/<?php echo $row["product_image"];?>' style="height:200px;width:100%"></td>
                          <td><?php echo $row["product_type"];?></td>
                          <td><?php echo $row["product_manufacturing_cost"];?></td>
                          <td><?php echo $row["product_selling_cost"];?></td>
                          <td><?php echo $row["product_pair"];?></td>

                          <td><a href="update_product.php?id=<?php echo $row['id'];?>" style="text-decoration:none">Update</a></td>

                    	  <td><a href="delete.php?id=<?php echo $row['id'];?>" style="text-decoration:none">Delete</a></td>
                        </tr>
                      </tbody>
	                    <?php
							}
						?>
					</table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
      </div>
    </div>
<?php include('footer.php');?>