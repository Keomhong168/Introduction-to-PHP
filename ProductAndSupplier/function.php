<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'db_product_crud';
$connection = new mysqli($hostname, $username, $password, $database);

//check the connection to database is success
// print_r($connection);
// if($connection){
//     echo "successfully";
// }
function showSweetAlert($title, $text, $icon)
{
    echo '
        <script>
            Swal.fire({
            title: "' . $title . '",
            text: "' . $text . '",
            icon: "' . $icon . '"
            });
        </script>
    ';
}
//=======This Function insert Data to Database working On Supplier======
function createSupplier()
{
    global $connection;
    if (isset($_POST['btn-submit-supplier'])) {
        $name = $_POST['txt_name'];
        $phone_number = $_POST['phone_number'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        if (!empty($name) && !empty($phone_number) && !empty($email) && !empty($address)) {
            $query = "INSERT INTO `tbl_supplier`(`name`, `phone number`, `email`, `address`) VALUES ('$name','$phone_number','$email','$address')";
            $rs = $connection->query($query);
            if ($rs) {
                showSweetAlert('Success', 'Data Inserted Successfully', 'success');
            }
        } else {
            showSweetAlert('Error', 'Please Fill All Fields', 'error');
        }
    }
}
createSupplier();

//==========This function get Data from Database working on Supplier============
function getSupplier()
{
    global $connection;
    $sql = "SELECT * FROM tbl_supplier";
    $rs = $connection->query($sql);
    while ($row = mysqli_fetch_assoc($rs)) {
        echo '
            <tr>
                <td>' . $row['id'] . '</td>
                <td>' . $row['name'] . '</td>
                <td>' . $row['phone number'] . '</td>
                <td>' . $row['email'] . '</td>
                <td>' . $row['address'] . '</td>
                <td>
                <a href="updateSupplier.php? id=' . $row['id'] . '" class="btn btn-warning">Update</a>
                <button class="btn btn-danger" id="btn-delete-supplier" data-bs-toggle="modal" data-bs-target="#deleteSupplier">Delete</button>
                </td>
            </tr>
        ';
    }
}

//========This function updateData from Database working on Supplier==========
function updateSupplier()
{
    global $connection;
    if (isset($_POST['btn-update-supplier'])) {
        $update_id = $_POST['id_update'];
        $name = $_POST['txt_name'];
        $phone_number = $_POST['phone_number'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        if (
            !empty($name) && !empty($phone_number) && !empty($email)
            && !empty($address)
        ) {
            $query = "UPDATE `tbl_supplier` SET `name`='$name',`phone number`='$phone_number',`email`='$email',`address`='$address' WHERE `id`='$update_id
            '";
            $rs = $connection->query($query);
            if ($rs) {
                showSweetAlert('Success', 'Data Updated Successfully', 'success');
            } else {
                showSweetAlert('Error', 'Data Not Updated', 'error');
            }
        }
    }
}
updateSupplier();
//========This function deleteData from Database working on Supplier==========

function removeSupplier()
{
    global $connection;
    if (isset($_POST['btn-remove-supplier'])) {
        $id = $_POST['remove_value'];
        $rs = $connection->query("DELETE FROM `tbl_supplier` WHERE `id`=$id");

        if ($rs) {
            showSweetAlert("Delete Success", "Supplier Delete Successfully", "success");
        }
    }
}
removeSupplier();


function getSupplierToOption($supplier = 0)
{
    global $connection;
    $sql = "SELECT `id`, `name`, `address` FROM `tbl_supplier` ORDER BY `id` DESC";
    $rs  = $connection->query($sql);
    while ($row = mysqli_fetch_assoc($rs)) {
        // $prefix = $row['gender'] == "Male" ? "Mr. ": "Ms. ";
        $selected = $row['id'] == $supplier ? "selected" : "";
        echo '<option value="' . $row['id'] . '" ' . $selected . '>' . $row['name'] . ' : ' . $row['address'] . '</option>';
    }
}
//=======This Function insert Data to Database working On Product=======
function createProduct()
{
    global $connection;
    if (isset($_POST['btn-submit-product'])) {
        $name = $_POST['txt_name'];
        $model = $_POST['txt_model'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $supplier = $_POST['supplier'];
        $total = $price * $qty;

        if (!empty($name) && !empty($model) && !empty($price) && !empty($qty) && !empty($supplier)) {
            $sql = "INSERT INTO `tbl_product`( `name`, `model`, `price`, `qty`, `total`, `supplier_id`) VALUES ('$name','$model','$price','$qty','$total','$supplier')";
            $rs  = $connection->query($sql);
            if ($rs) {
                showSweetAlert("Insert Success", "Product insert success fully", "success");
            }
        } else {
            showSweetAlert("Insert Error", "Please input all Product field", "error");
        }
    }
}
createProduct();

//=======This Function Get Data from Database working On Product========
function getProduct(){
    global $connection;
    $sql = "SELECT `t_product`.*,`t_supplier`.`name` AS `t_name`,`t_supplier`.`address` AS `t_address` FROM `tbl_product` AS `t_product` INNER JOIN `tbl_supplier` AS `t_supplier` ON `t_product`.`supplier_id` = `t_supplier`.`id` ORDER BY `t_product`.`id` DESC";
    $rs  = $connection->query($sql);
    while ($row = mysqli_fetch_assoc($rs)) {
        echo '
            <tr>
                <td>' . $row['id'] . '</td>
                <td>' . $row['name'] . '</td>
                <td>' . $row['model'] . '</td>
                <td>' . $row['price'] . '</td>
                <td>' . $row['qty'] . '</td>
                <td>' . $row['total'] . '</td>
                <td>'.$row['t_name'].' : '.$row['t_address'].'</td>
                <td>
                    <a href="updateProduct.php?id='.$row['id'].'" class="btn btn-warning">Update</a>
                    <button class="btn btn-danger" remove-id="'.$row['id'].'" id="btn-delete-product" data-bs-toggle="modal" data-bs-target="#deleteProduct">Delete</button>
                </td>
            </tr>
        ';
    }
}

//=======This Function remove Data from Database working On Product========
function removeProduct(){
    global $connection;
    if(isset($_POST['btn-remove-product'])){
        $id = $_POST['remove_value'];

        $rs = $connection->query("DELETE FROM `tbl_product` WHERE `id`='$id'");
        if($rs){
            showSweetAlert("Remove Success","Product has been removed from table","success");
        }
    }
}
removeProduct();

//=======This Function UpdateData working On Product========
function updateProduct(){
    global $connection;
    if(isset($_POST['btn-update-product'])){
        $name = $_POST['txt_name'];
        $model = $_POST['txt_model'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $supplier = $_POST['supplier'];
        $total = $price * $qty;
        $update_id = $_POST['id_update'];
        if (!empty($name) && !empty($model) && !empty($price) && !empty($qty) && !empty($supplier)) {
            $sql = "UPDATE `tbl_product` SET `name`='$name',`model`='$model',`price`='$price',`qty`='$qty',`total`='$total', `supplier_id`='$supplier' WHERE `id`='$update_id'";
            $rs  = $connection->query($sql);
            if($rs){
                showSweetAlert("Update Success","Product update successfully","success");
            }
        }
        else{
            showSweetAlert("Update Error","Please input all product field","error");
        }
    }
}
updateProduct();

?>