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
            <a href="RefillProduct.php"><button class="tabActive">Refill Products</button></a>
            <a href="AddNewProduct.php"><button class="btnTabs">Add New Products</button></a>
            <a href="AllProducts.php"><button class="btnTabs">All Products</button></a>
        </div>
        <div class="contentDiv">
           <div class="refDiv"> <h1> <font class="ref">Refill Product</font></h1></div>
            <br>
             <center>
                 <form action="RefillProduct.php" method="post">
                      <div class="frmSearch">
                          <input type="search" placeholder="Search for Product here" class="form-control search"> <button class="btn btnSearch">Search</button>
                      </div>
                     <hr>
                     <div class="refTable">
                         <table class="sellTable">
                             <tr class="tr1">
                                 <th class="th1">No</th>
                                 <th class="th1">PRODUCT NAME</th>
                                 <th class="th1">CATEGORY</th>
                                 <th class="th1">QUANTITY</th>
                                 <th class="th1">PRICE EACH</th>
                                 <th class="th1">ADD</th>
                             </tr>
                             <?php
                             $conn=mysqli_connect("localhost","root","","shop_system");
                             $getData="SELECT `no`, `product_name`, `category`, `quantity`, `price` FROM `products` WHERE 1";
                             $sql=mysqli_query($conn,$getData);
                             $count=mysqli_num_rows($sql);
                             if ($count==0) {
                                 echo "No Product available !";
                             }else{
                             while ($row =mysqli_fetch_array($sql))
                             {
                             $no=$row['no'];
                             $product=$row['product_name'];
                             $category=$row['category'];
                             $quantity=$row['quantity'];
                             $price=$row['price'];
                             ?>
                             <tr class="tr1">
                                 <td class="td1"><?php echo $no?></td>
                                 <td class="td1"><?php echo $product?></td>
                                 <td class="td1"><?php echo $category?></td>
                                 <td class="td1"><input type="text" class="form-control" value="<?php echo $quantity?>" name="tQuantity"></td>
                                 <td class="td1"><input type="text" class="form-control" value="<?php echo $price?>" name="tPrice"></td>
                                 <td class="td1"><input type="submit" class="btn  btnSell" value="ADD" name="btnAdd"></td>
                             </tr>
                             <?php
                             }}?>
                         </table>
                     </div>
                 </form>
             </center>
        </div>
    </div>
</div>
</body>
</html>

