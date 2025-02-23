<?php include('sidebar.php')
?>
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12 text-center">
                <div class="page_title">
                    <h2>Add Product</h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="col-12">
            <div class="col-8 mx-auto bg-light p-4">
                <form action=""  method="POST" enctype="multipart/form-data">
                    <label for="txt_name">Product Name</label>
                    <input type="text" name="txt_name" id="txt_name" class="my-2 form-control" placeholder="Product Name">
                    <label for="txt_model">Product Model</label>
                    <input type="text" name="txt_model" id="txt_model" class="my-2 form-control" placeholder="Product Model">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" class="my-2 form-control" placeholder="Price">
                    <label for="qty">Number of Product</label>
                    <input type="number" name="qty" id="qty" class="my-2 form-control" placeholder="Number of product">
                    <label for="">Supplier</label>
                    <select name="supplier" id="" class="form-select my-2">
                        <option value="" disabled selected>--- Select Supplier ---</option>getSupplierToOption
                        <?php getSupplierToOption() ?>
                    </select>
                    <button name="btn-submit-product" class="btn btn-success float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php')
?>