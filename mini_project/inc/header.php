<?php 
include 'lib/Session.php';
Session::init();
include 'lib/Database.php';
include 'helpers/Format.php';
// include 'classes/Product2.php';
// include 'classes/Cart.php';

spl_autoload_register(function ($class) {
    include_once "classes/".$class.".php";
});
$db = new Database();
$fm = new Format();
$pd = new Product();
$ct = new Cart();
$cat = new Category();
$cmr = new Customer();

 ?>
<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache");
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
  header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE HTML>
<head>
<title>Store Website</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquerymain.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script> 
<script type="text/javascript" src="js/nav-hover.js"></script>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
</script>
</head>
<body>
<div class="header">
        
        <div class="navbar">
            <div class="logo">
                <img src="https://seeklogo.com/images/M/maks-logo-EC37852AA0-seeklogo.com.png" width="125px">
            </div>
            <nav>
                <ul>
                    <li><div class="search-container">
                        <form action="/action_page.php">
                            <div class=".small-container">
                              
                                   
                
                                     
                
                        </form>
                      </div></li>
                   
                    <li><a href="aboutus.php">About us</a></li>
                    
                </ul>
            </nav>
            <?php 
                  if (isset($_GET['cid'])) {
                      $cmrId = Session::get("cmrId");
                      $delData = $ct->delCustomerCart();
                      $delComp = $pd->delCompareDara($cmrId);
                      Session::destroy();
                  }
                   ?>
       <div class="login">
        <?php 
$login = Session::get("cuslogin");
if ($login == false) {
    ?>
    <a href="login.php">Login</a>
<?php
} else {
        ?>
<a href="?cid=<?php Session::get('cmrId'); ?>">Logout</a>
<?php
    }
 ?>
        

       </div>
     <div class="clear"></div>
   </div>
   <div class="clear"></div>
 </div>
<div class="menu">
  <ul id="dc_mega-menu-orange" class="dc_mm-orange">
    <li><a href="index.php">Home</a></li>   
    <li><a href="topbrands.php">Top Brands</a></li>
    <?php 
      $chkCart = $ct->checkCartItem();
      if ($chkCart) {
          ?>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="payment.php">Payment</a></li>
      <?php
      }
       ?>
       <?php
      $cmrId = Session::get("cmrId");
      $chkOrder = $ct->checkOrder($cmrId);
      if ($chkOrder) {
          ?>        
        <li><a href="orderdetails.php">Order</a></li>
      <?php
      }
       ?>
    
<?php 
$login = Session::get("cuslogin");
if ($login == true) {
    ?>
  <li><a href="profile.php">Profile</a></li>
<?php
}
 ?>
    <?php $cmrId = Session::get("cmrId");
                            $getPd = $pd->getCompareData($cmrId);
                            if ($getPd) {
                                ?>
    <li><a href="compare.php">Compare</a> </li>
    <?php
                            } ?>
    <?php 
                            $checkWlist = $pd->getWlistData($cmrId);
                            if ($checkWlist) {
                                ?>
    <li><a href="wlist.php">Wish List</a></li>
    <?php
                            } ?>
    <li><a href="contact.php">Contact</a> </li>
    <div class="clear"></div>
  </ul>
</div>
<style>
  *{
    margin: zero;
    padding: zero;
    box-sizing: border-box;
}
body{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.navbar{
    display: flex;
    align-items: center;
    padding: 20px;
    background-color:lightskyblue    
}
nav{
    flex: 1;
    text-align: right;
}
nav ul{
    display: inline-block;
    list-style-type: none;
}
nav ul li{
    display: inline-block;
    margin-right: 20px;
}
a{
    text-decoration: none;
    color: #555;
}
p{
    font: small;
    color: #555;
}
.container{
    max-width: 1300px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}
.row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
    padding-left: 30px;
    padding-right: 30px;
}
.col2{
    flex-basis: 50%;
    min-width: 300px;
    padding-left: 30px;
}
.col2 img{
    padding-right: 25px;
    max-width: 100%;

}
.col2 h1{
    font-size: 50px;
}
.col2 p{
    font-size: 30px;
}
.btn{
    display: inline-block;
    font-size: 30px;
    background-color: rgb(243, 169, 10);
    padding: 8px 30px;
    margin: 30px 0;
    border-radius: 40px;
    transition: 0.5s;
}
.btn:hover{
    background-color: #f0f0f0;
    
}
.header{
    background: radial-gradient(#c2d3d6,#33B7FF);
}
.header .row{
    margin-top: 70px;
}
</style>
