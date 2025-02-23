<?php include('sidebar.php')
?>
<!-- dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12 text-center">
                <div class="page_title">
                    <h2>Table Product</h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <!-- table section -->
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <table class="table table-bordered table-hover">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Model</th>
                                        <th>Price</th>
                                        <th>Number of product</th>
                                        <th>Total</th>
                                        <th>Supplier</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php getProduct(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end dashboard inner -->
<?php include('footer.php')
?>