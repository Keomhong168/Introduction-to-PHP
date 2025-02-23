<?php 
    include('sidebar.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbl_supplier WHERE `id`=$id";
    $rs = $connection->query($sql);
    $row = mysqli_fetch_assoc($rs);
    
?>

<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12 text-center">
                <div class="page_title">
                    <h2>Update Supplier</h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="col-12">
            <div class="col-8 mx-auto bg-light p-4">
                <form action=""  method="POST" enctype="multipart/form-data">
                    <input type="text" name="id_update" value="<?php echo $id ?>" >
                    <label for="name">Name</label>
                    <input type="text" name="txt_name" value="<?php echo $row['name']?>" id="name" class="my-2 form-control" placeholder="Supplier Name">
                    <label for="phone_number">Phone number</label>
                    <input type="textd" name="phone_number" value="<?php echo $row['phone number'] ?>" id="phone_number" class="my-2 form-control" placeholder="Phone number">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="<?php echo $row['email'] ?>" id="email" class="my-2 form-control" placeholder="Email">
                    <label for="address">Address</label>
                    <input type="text" name="address" value="<?php echo $row['address'] ?> "id="address" class="my-2 form-control" placeholder="Address">
                    <button class="btn btn-success" name="btn-update-supplier">Update</button>
                    <a class="btn btn-danger" href="viewSupplier.php">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php')
?>