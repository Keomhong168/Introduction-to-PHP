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
    <title>Document</title>
</head>

<?php 
    include('function.php');
?>

<body>
    <div class="container bg-dark p-3">
        <h1 class="text-center text-light">PRODUCT CRUD</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            + Add
        </button>
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
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-12 mt-2">
                        <label for="">Product name</label>
                        <input type="text" name="product_name" class="form-control" placeholder="Product name" aria-label="Product name">
                    </div>
                    <div class="col-6 mt-2">
                        <label for="">Price</label>
                        <input type="text" name="price" class="form-control" placeholder="Price" aria-label="Price">
                    </div>
                    <div class="col-6 mt-2">
                        <label for="">QTY</label>
                        <input type="text" name="qty" class="form-control" placeholder="qty" aria-label="qty">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="btn-save" class="btn btn-success">Save</button>
                </div>
            </form>
            </div>
    </div>
  </div>
</div>


</body>
</html>