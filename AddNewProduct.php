
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/styles.css">
</head>
<body>
<div class="midDiv">
    <div class="tabs">
        <a href="index.php"><button class="btnTabs"><span class="glyphicon glyphicon-shopping-cart shocart"></button></a>
        <a href="RefillProduct.php"><button class="btnTabs">Refill Products</button></a>
        <a href="AddNewProduct.php"><button class="tabActive">Add New Products</button></a>
        <a href="AllProducts.php"><button class="btnTabs">All Products</button></a>
    </div>
    <div class="contentDiv">
        <div class="refDiv"> <h1> <font class="ref">Add New Product</font></h1></div>
        <br>
            <div class="addDiv">
               <center>
                   <form action="AddNewProduct.php" method="post">
                       <input type="text" placeholder="Product Name" class="form-control adInput" name="pName"> <br>
                       <input type="text" placeholder="Category" class="form-control adInput" name="pCategory"><br>
                       <input type="text" placeholder="Quantity" class="form-control adInput" name="pQuantity"><br>
                       <input type="text" placeholder="Price per each" class="form-control adInput" name="pPrice"><br>
                       <input type="submit" value="Add Product" class="btn btn-success" name="btnSave">
                       <?php
                        if (isset($_POST['btnSave'])){
                            $conn=mysqli_connect("localhost","root","","shop_system");
                            $name=$_POST['pName'];
                            $category=$_POST['pCategory'];
                            $quantity=$_POST['pQuantity'];
                            $price=$_POST['pPrice'];
                            $sql="INSERT INTO `products`(`no`, `product_name`, `category`, `quantity`, `price`) VALUES (null,'$name','$category','$quantity','$price')";
                            $exeQuery=mysqli_query($conn,$sql);
                            if ($exeQuery){
                                echo " Saved Successfully";
                            }else{
                                echo "failed";
                            }
                        }


                       ?>
                   </form>
               </center>
            </div>

        <br><br>
    </div>
</div>
</div>
<div class="bottDiv"></div>
</body>
</html>

