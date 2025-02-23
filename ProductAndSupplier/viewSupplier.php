<?php include('sidebar.php')
?>
<!-- dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12 text-center">
                <div class="page_title">
                    <h2>Table Supplier</h2>
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
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Phone nubmer</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php getSupplier(); ?>

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