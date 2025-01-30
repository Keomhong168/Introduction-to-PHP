<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>CRUD</title>
</head>

<?php 
    include('function.php');
?>

<body>
    <div class="container bg-dark p-3">
        <h1 class="text-center text-light">PRODUCT CRUD</h1>
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-primary" id="btn-open-add" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                + Add
            </button>
            <!-- <form action="" class="d-flex">
                <input type="text" name="" id="" class="form-control" placeholder="search">
                <button class="btn btn-outline-success">Search</button>
            </form> -->
        </div>
        
        <table class="table table-hover table-dark text-center">
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Price</th>
                <th>QTY</th>
                <th>Total</th>
                <th>Discount</th>
                <th>Payment</th>
                <th>Delete</th>
            </tr>
            <?php getProduct() ?>
        </table>
    </div>



<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"> </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="" method="POST">
                <div class="row">
                        <input type="hidden" name="update_id" id="update_id_txt">
                    <div class="col-12 mt-2">
                        <label for="">Product name</label>
                        <input type="text" name="product_name" id="product_name_txt" class="form-control" placeholder="Product name" aria-label="Product name">
                    </div>
                    <div class="col-6 mt-2">
                        <label for="">Price</label>
                        <input type="text" name="price" id="price_txt" class="form-control" placeholder="Price" aria-label="Price">
                    </div>
                    <div class="col-6 mt-2">
                        <label for="">QTY</label>
                        <input type="text" name="qty" id="qty_txt" class="form-control" placeholder="qty" aria-label="qty">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="btn-save" id="btn-save" class="btn btn-success">Save</button>
                    <button type="submit" name="btn-update" id="btn-update" class="btn btn-warning">Update</button>
                </div>
            </form>
            </div>
    </div>
  </div>
</div>


</body>

<script>
$(document).ready(function(){
    $('#btn-open-add').click(function(){
        $('#btn-update').addClass('d-none');
        $('#btn-save').removeClass('d-none');

        $('#product_name_txt').val("");
        $('#price_txt').val("");
        $('#qty_txt').val('');

        $('.modal-title').text('Insert Product')
    });
    //use this cuz btn-open-update button is created by Loop not in html tag
    $('body').on('click','#btn-open-update',function(){
        $('#btn-save').addClass('d-none');
        $('#btn-update').removeClass('d-none');

        $('.modal-title').text('Update Product')

        var row = $(this).parents('tr').find('td');
        console.log(row);
        var id = $(this).parents('tr').find('td').eq(0).text();
        var product_name = $(this).parents('tr').find('td').eq(1).text();
        var price = $(this).parents('tr').find('td').eq(2).text();
        var qty = $(this).parents('tr').find('td').eq(3).text();
        // var total = $(this).parents('tr').find('td').eq(4).text();
        // var discount = $(this).parents('tr').find('td').eq(5).text();
        // var payment = $(this).parents('tr').find('td').eq(6).text();
        // console.log(id + " " +product + " " + price + " " + qty + " " + total + " " + discount + " " + payment);

        $('#update_id_txt').val(id);
        $('#product_name_txt').val(product_name);
        $('#price_txt').val(price);
        $('#qty_txt').val(qty);
        
    })

    // $('#btn-open-update').click(function(){
        // $('#btn-save').addClass('d-none');
        // $('#btn-update').removeClass('d-none');
    // })


})

</script>


</html>