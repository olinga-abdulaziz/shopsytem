<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop System</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/styles.css">
</head>
<body id="myPage">
<div class="navbar-header">
     <div class="footer1">
         <a href="loginForm.php"><button class="btn btnAdmin">Login Admin</button></a>
     </div>
</div>
  <div class="topDiv">
      <h1><font class="shop">Shop</font><font class="System">System.</font></h1>
      <div class="topx">
           <div class="top1">
               <form action="index.php" method="post">
                   <div class="divSearch">
                       <input type="search" class="form-control search"   placeholder="Search for product here ..." name="search">
                       <button class="btn  btnSearch" name="btnSearch">Search <span class="glyphicon glyphicon-search"></span> </button>
                   </div>
               </form>

           </div>
          <br>
          <table class="sellTable">
              <tr class="tr1">
                  <th class="th1">No</th>
                  <th class="th1">PRODUCT NAME</th>
                  <th class="th1">CATEGORY</th>
                  <th class="th1">QUANTITY</th>
                  <th class="th1">PRICE</th>
                  <th class="th1">SELL</th>
              </tr>
              <?php
              if (isset($_POST['search'])){
                  $conn=mysqli_connect("localhost","root","","shop_system");
                  $searchWord=$_POST['search'];
                  $sqlSearch="SELECT * FROM products WHERE product_name = '$searchWord'";
                  $sql=mysqli_query($conn,$sqlSearch);
                  $count=mysqli_num_rows($sql);
                  if ($count==0){
                      echo "No Such Product";
                  }else{
                      while ($row=mysqli_fetch_array($sql)){
                          $no=$row['no'];
                          $product=$row['product_name'];
                          $category=$row['category'];
                          $quantity=$row['quantity'];
                          $price=$row['price'];
                          echo $product;
              ?>
              <form method="post" action="index.php">
              <tr class="tr1">
                  <td class="td1"><?php echo $no?></td>
                  <td class="td1"><?php echo $product?></td>
                  <td class="td1"><?php echo $category?></td>
                  <td class="td1"><input type="text" class="form-control" placeholder="0." name="quantity1"></td>
                  <td class="td1"><input type="text" class="form-control" placeholder="Ksh. 0.0"  name="price1"></td>
                  <td class="td1"><input type="submit" class="btn  btnSell" value="Select" name="btnSelect"></td>
              </tr>
              <?php
               }}}?>
                 </table>
          </form>
      </div>
 
      <br>
  </div>
  <hr class="hr1">
  <div class="tdiv">
      <div class="ddDiv">
          <h1>TOTAL :</h1>
          <h1>KSH. </h1><h1>2100</h1>
      </div>
      <table class="sellTable">
          <tr class="tr1">
              <th class="th1">No</th>
              <th class="th1">PRODUCT NAME</th>
              <th class="th1">CATEGORY</th>
              <th class="th1">QUANTITY</th>
              <th class="th1">PRICE</th>
              <th class="th1">REMOVE</th>
          </tr>
          <?php
        if (isset($_POST['btnSelect'])){
            $quantity1=$row['quantity1'];
            $price1=$row['price1'];
            $conn=mysqli_connect("localhost","root","","shop_system");
            $sqlputit="INSERT INTO `current_sell`(`no`, `product_name`, `category`, `quantity`, `price`) VALUES ($no,'$product','$category','$$quantity1','$price1')";
            $sql=mysqli_query($conn,$sqlSearch);
            if($sql){
                
                $sqlSearch="SELECT `no`, `product_name`, `category`, `quantity`, `price` FROM `current_sell` WHERE 1";
                $sql1=mysqli_query($conn,$sqlSearch);
        
      ?>
          <tr class="tr1">
              <td class="td1">1</td>
              <td class="td1">BREAD</td>
              <td class="td1">SUPER LOAF</td>
              <td class="td1">5</td>
              <td class="td1">250 ksh.</td>
              <td class="td1"><button class="btn btnRemove btn-danger">REMOVE</button></td>
          </tr>
        <?php
            }}
        ?>
      </table>
      <br>
      <center><input type="submit" class="btn btn-success btnSell1" value="Sell"></center>
  </div>
<div class="footer">

</div>
</body>
</html>
