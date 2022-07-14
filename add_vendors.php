<?php include('header.php');?>
<?php include('sidebar.php');?>
	<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <center><h3>Vendor Master</h3></center>
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
                        <h5>Vendor Master</h5>
                      </div>
                      <div class="card-body">
                        <form class="theme-form" method="post" enctype="multipart/form-data">
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label" for="inputEmail3">Vendor Name</label>
                            <div class="col-sm-9">
                              <input class="form-control" id="input_name" type="text" name="vendor_name" placeholder="Vendor Name">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label" for="input_Password3">Vendor Address</label>
                            <div class="col-sm-9">
                              <input class="form-control" id="input_address" type="text" name="vendor_address" placeholder="Vendor Address">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label" for="inputPassword3">Vendor Email</label>
                            <div class="col-sm-9">
                              <input class="form-control" id="input_email" type="email" name="vendor_email" placeholder="Vendor Email">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label" for="inputPassword3">Vendor Phone Number</label>
                            <div class="col-sm-9">
                              <input class="form-control" id="url" type="number" name="vendor_phone_number" placeholder="Vendor Phone Number">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label" for="inputPassword3">Product Tags</label>
                            <div class="col-sm-9">
                              <input class="form-control" id="url" type="text" name="product_tags" placeholder="Product Tags">
                            </div>
                          </div>
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
  header("location:add_vendors.php");
}

if(isset($_POST["save"]))
{
  $name=$_POST["vendor_name"];
  $address=$_POST["vendor_address"];
  $email=$_POST["vendor_email"];
  $number=$_POST["vendor_phone_number"];
  $tags=$_POST["product_tags"];
  echo $name;

  /*$con=mysqli_connect("localhost","root","","spicehook_project");
  $ins="insert into vendor (vendor_name,vendor_address,vendor_email,vendor_phone_number,vendor_tags) values ('$name','$address','$email','$number','$tags')";
  $qry=mysqli_query($con,$ins);
  if($qry>0)
  {
    header("location:add_vendors.php");
  }*/
}
?>

<?php include('footer.php');?>