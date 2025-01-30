<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'db_product';

    $connection = new mysqli($hostname, $username, $password, $database);
    // print_r($connection);  //test connection
function insertProduct(){
    global $connection;
    if(isset($_POST['btn-save'])){
        $product_name = $_POST['product_name'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        
        $total = $price * $qty;

        $discount = $total >= 200 ? 20 : 
            ($total >= 150 ? 15 : 
            ($total >= 100 ? 10 : 5));

        $payment = $total - $discount*0.01*$total;

        $sql = "INSERT INTO `product`( `product_name`, `price`, `qty`, `total`, `discount`, `payment`) VALUES ('$product_name','$price','$qty','$total' ,'$discount','$payment')";

        // $connection()->$sql;
        $result_set = $connection->query($sql); // execute query
        if($result_set){
            echo '
            <script>
            $(document).ready(function(){
                Swal.fire({
                    title: "Success",
                    text: "Product Inserted Successfully",
                    icon: "success"
                });
            })
            </script>
            ';
        }
    }

}
insertProduct();

function getProduct(){
    global $connection;
    $sql = "SELECT * FROM product";

    $result_set = $connection->query($sql); //result set?

    if($result_set){
        while($row = mysqli_fetch_assoc($result_set)){//get data from result set
            // print_r($row);
            echo '
                <tr>
                    <td>'.$row['id'].'</td>
                    <td>'.$row['product_name'].'</td>
                    <td>'.$row['price'].'</td>
                    <td>'.$row['qty'].'</td>
                    <td>'.$row['total'].'</td>
                    <td>'.$row['discount'].'</td>
                    <td>'.$row['payment'].'</td>
                    <td class="d-flex justify-content-center gap-1">
                        <button type="button" class="btn btn-outline-warning" id="btn-open-update" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Update</button>
                        <form action="" method="POST">
                            <input name="removeId" value="'.$row['id'].'" type="hidden"> 
                            <button name="btn-delete" class="btn btn-outline-danger"><i class="bi bi-trash3"></i> Delete</button>
                        </form>
                    </td>
                    </tr>
            ';

        }

    }
}

function delete(){
    global $connection;
    if(isset($_POST["btn-delete"])){
        $remove = $_POST['removeId'];

        $sql = "DELETE FROM product WHERE id = $remove";
        $result_set = $connection->query($sql); // execute query
        if($result_set){
            echo '
            <script>
            $(document).ready(function(){
                Swal.fire({
                    title: "Success",
                    text: "Product Delete Successfully",
                    icon: "success"
                });
            })
            </script>
            ';
        }
    }
}
delete();

function updateProduct(){
    global $connection;
    if(isset($_POST["btn-update"])){
        $product_name = $_POST['product_name'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $id = $_POST['update_id'];
        
        $total = $price * $qty;

        $discount = $total >= 200 ? 20 : 
            ($total >= 150 ? 15 : 
            ($total >= 100 ? 10 : 5));

        $payment = $total - $discount*0.01*$total;

        $sql ="UPDATE `product` SET `product_name`='$product_name',`price`='$price',`qty`='$qty',`total`='$total',`discount`='$discount',`payment`='$payment' WHERE `id`='$id'";

        $result_set = $connection->query($sql); // execute query
        if($result_set){
            echo '
            <script>
            $(document).ready(function(){
                Swal.fire({
                    title: "Success",
                    text: "Product Updated Successfully",
                    icon: "success"
                });
            })
            </script>
            ';
        }
    }
}
updateProduct()


?>