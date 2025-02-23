<?php 
    include('sidebar.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbl_product WHERE `id`=$id";
    $rs = $connection->query($sql);
    $row = mysqli_fetch_assoc($rs);
    
?>

<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12 text-center">
                <div class="page_title">
                    <h2>Update Product</h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="col-12">
            <div class="col-8 mx-auto bg-light p-4">
                <form action=""  method="POST" enctype="multipart/form-data">
                    <input type="text" name="id_update" value="<?php echo $id ?>" >
                    <label for="txt_name">Product Name</label>
                    <input type="text" name="txt_name" value="<?php echo $row['name']?>" id="txt_name" class="my-2 form-control" placeholder="Product Name">
                    <label for="txt_model">Product Model</label>
                    <input type="text" name="txt_model" value="<?php echo $row['model']?>" id="txt_model" class="my-2 form-control" placeholder="Product Model">
                    <label for="price">Price</label>
                    <input type="number" name="price" value="<?php echo $row['price']?>" id="price" class="my-2 form-control" placeholder="Price">
                    <label for="qty">Number of Product</label>
                    <input type="number" name="qty" value="<?php echo $row['qty']?>" id="qty" class="my-2 form-control" placeholder="Number of product">
                    <label for="">Supplier</label>
                    <select name="supplier" id="" class="form-select my-2">
                        <option value="" disabled selected>--- Select Supplier ---</option>
                        <?php getSupplierToOption($row['supplier_id']) ?>
                    </select>
                    <button class="btn btn-success" name="btn-update-product">Update</button>
                    <a class="btn btn-danger" href="viewProduct.php">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php')
?>