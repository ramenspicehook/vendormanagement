<?php include('header.php');?>
<?php include('sidebar.php');?>
	<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <center><h3>Product Master</h3></center>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item"> Form Layout</li>
                    <li class="breadcrumb-item active"> Default Forms</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 col-xl-12">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header pb-0">
                        <h5>Product Master</h5><span>Using the <a href="#">card</a> component, you can extend the default collapse behavior to create an accordion.</span>
                      </div>
                      <div class="card-body">
                        <form class="theme-form" method="post" enctype="multipart/form-data">
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label" for="inputEmail3">Product Batch/Model No</label>
                            <div class="col-sm-9">
                              <input class="form-control" id="inputEmail3" type="text" name="product_batch_model_no" placeholder="Product Batch/Model No">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label" for="inputPassword3">Product Name (Optional)</label>
                            <div class="col-sm-9">
                              <input class="form-control" id="inputPassword3" type="text" name="product_name" placeholder="Product Name (Optional)">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label" for="inputPassword3">Product Image/s</label>
                            <div class="col-sm-9">
                              <input class="form-control" id="inputnumber" type="file" name="product_image" placeholder="Product Image/s">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label" for="inputPassword3">Product Type</label>
                            <div class="col-sm-9">
                              <input class="form-control" id="url" type="text" name="product_type" placeholder="Product Type">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label" for="inputPassword3">Product Category</label>
                            <div class="col-sm-9">
                              <input class="form-control" id="url" type="text" name="product_category" placeholder="Product Category">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label" for="inputPassword3">Product Manufacturing cost</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="product_manufacturing_cost" id="Website" type="number" placeholder="Product Manufacturing Cost">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label" for="inputPassword3">Product Selling Cost</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="product_selling_cost" id="Website" type="number" placeholder="Product Selling Cost">
                            </div>
                          </div>
                          <fieldset class="mb-3">
                            <div class="row">
                              <label class="col-form-label col-sm-3 pt-0">Is Product in Pair ?</label>
                              <div class="col-sm-9">
                                <div class="form-check radio radio-primary">
                                  <input class="form-check-input" id="radio11" type="radio" name="radio1" value="option1">
                                  <label class="form-check-label" for="radio11">Yes</label>
                                </div>
                                <div class="form-check radio radio-primary">
                                  <input class="form-check-input" id="radio22" type="radio" value="option1">
                                  <label class="form-check-label" for="radio22">No</label>
                                </div>
                              </div>
                            </div>
                          </fieldset>
                        
                      </div>
                      <div class="card-footer">
                        <button type="submit" name="save" class="btn btn-primary">Save</button>
                        <button name="cancel" class="btn btn-secondary">Cancel</button>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
    </div>

<?php

if(isset($_POST["cancel"]))
{
  header("location:add_products.php");
}

if(isset($_POST["save"]))
{
  $model_no=$_POST["product_batch_model_no"];
  $name=$_POST["product_name"];
  $image=$_FILES["product_image"];
  $type=$_POST["product_type"];
  $manufacturing_cost=$_POST["product_manufacturing_cost"];
  $selling_cost=$_POST["product_selling_cost"];
  //$pair=$_POST["radio3"];

  $image_name=$image["name"];
  $image_temp=$image["tmp_name"];
  $image_err=$image["error"];

  if($image_err==0)
  {
    $loc='upload/'.$image_name;
    $move=move_uploaded_file($image_temp,$loc);
    if($move>0)
    {
      $con=mysqli_connect("localhost","root","","spicehook_project");
      $ins="insert into product (product_model_no,product_name,product_image,product_type,product_manufacturing_cost,product_selling_cost) values ('$model_no','$name','$image_name','$type','$manufacturing_cost','$selling_cost')";
      $qry=mysqli_query($con,$ins);
      if($qry>0)
      {
        //echo "done";
        header("location:add_products.php");
      }
    }
  }
}
?>
<?php include('footer.php');?>