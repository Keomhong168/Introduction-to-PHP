<?php include('sidebar.php')
?>
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12 text-center">
                <div class="page_title">
                    <h2>Add Supplier</h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="col-12">
            <div class="col-8 mx-auto bg-light p-4">
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="name">Name</label>
                    <input type="text" name="txt_name" id="name" class="my-2 form-control" placeholder="Supplier Name">
                    <label for="phone_number">Phone number</label>
                    <input type="text" name="phone_number" id="phone_number" class="my-2 form-control" placeholder="Product Model">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="my-2 form-control" placeholder="Email">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="my-2 form-control" placeholder="Address">
                    <button name="btn-submit-supplier" class="btn btn-success float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php')
?>