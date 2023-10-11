<?php 
include "header.php";
include "admin/connect.php";
?>

<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$sql="SELECT * FROM users ORDER BY id DESC ";
$result= $conn->query($sql);


$username = $_SESSION["username"];
$id = $_SESSION["id"];

$conn->close();

?>
<style>
    .home{
        margin-top: -1rem;
    }
    .home h3{
       color: #000;
    }
    .home .col{
        border: 1px solid grey;
        border-radius: 13px;
        margin: .5rem;
        padding: .5rem .7rem;
    }
    .btn-sm{
        border-radius: 5px;
    }
</style>

<section class="section home">
    <?php echo "<span>Welcome,<span> <h3>$username</h3>" ?>
    <div class="row">
        <div class="row">
           <!-- <?php '<a href="orders.php?id=' .$id. '" class="col">Orders</a>' ?> -->
           <a href="" class="col">Booking</a>
           <a href="" class="col">Coupons</a>
        </div>
        <div class="row">
           <div class="col"><a href="">Cart</a></div>
           <div class="col"><a href="">Help Center</a></div>
        </div>
    </div>
    <a href="index.php" class="btn-sm btn-primary">Log Out</a>
</section>
<?php include "footer.php"?>