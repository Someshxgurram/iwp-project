<?php
include('../includes/connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller - Items</title>
    <link rel="stylesheet" href="seller_list.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="nav">
        <div class="title">
            <div class="logo">
                <h1>SecondPages</h1>
                <img src="images/logo.png" class="logo" alt="logo">
            </div>
            <div class="bar">
                <a class="fa fa-bars" id="bars" onclick="responsive()" style="cursor: pointer;"></a>
            </div>
        </div>
        <div class="menu" id="menu">
            <ul>
                <li><a href="seller_list.php"><i class="fa fa-list "></i><span>Listed Items</span></a></li>
                <li><a href="seller_sold.php"><i class="fa fa-handshake-o "></i><span>Sold Items</span></a></li>
                <li><a href="seller_add.php"><i class="fa fa-plus-square"></i><span>Add Item</span></a></li>
                <li><a href="seller_feedback.php"><i class="fa fa-comments "></i><span>Feedback</span></a></li>
                <li><a href="seller_login.php"><i class="fa fa-sign-out "></i><span>Log Out</span></a></li>
            </ul>
        </div>
    </div>
    <center>
        <form action="" class="search">
            <input type="text" placeholder="Search">
            <input type="submit" class="fa" value="&#xf002;">
        </form>
    </center>
    <center>
        <h1 class="h1">Listed Items</h1>

        <!-- // $seller_query = "SELECT * FROM sproducts where customer='none' and seller = '$_SESSION[username]'";
        // $seller_result = mysqli_query($conn, $seller_query);
        // while ($row = mysqli_fetch_assoc($seller_result)) {

        //     echo "<div class='container'>
        //     <div class='card-conatiner'>
        //         <div class='card'>
        //         <div class='img-div'>";

        //     echo "<img src='./images/BOOKS COVER'", $row['item_name'], "alt='book1'>";

        //     echo "      </div>
        //     <ul class='rating'>
        //         <li><a><i class='fa fa-star'></i></a></li>
        //         <li><a><i class='fa fa-star'></i></a></li>
        //         <li><a><i class='fa fa-star'></i></a></li>
        //         <li><a><i class='fa fa-star-half-empty'></i></a></li>
        //         <li><a><i class='fa fa-star-o'></i></a></li>
        //     </ul>
        //     <div class='book-info'>";
        //     echo "<h2>", $row['item_name'], "</h2>";
        //     echo "<span>", $row['item_desc'], "</span>";
        //     echo "  </div>
        //     </div>
        //     </div>
        //     </div>";
        // } -->
        <div class="container">
            <?php
            $seller_query = "SELECT * FROM sproducts where customer='none' and seller = '$_SESSION[username]'";
            $seller_result = mysqli_query($conn, $seller_query);
            while ($row = mysqli_fetch_assoc($seller_result)) {
                echo '<div class="card-conatiner">
                    <div class="card">
                        <form action="" method="POST">
                        <div class="img-div">
                        <img src="./images/'
                    . $row['filename'] . '">' .
                    '</div>
                            <ul class="rating">
                                <li><a><i class="fa fa-star"></i></a></li>
                                <li><a><i class="fa fa-star"></i></a></li>
                                <li><a><i class="fa fa-star"></i></a></li>
                                <li><a><i class="fa fa-star-half-empty"></i></a></li>
                                <li><a><i class="fa fa-star-o"></i></a></li>
                            </ul>
                            <div class="book-info">';
                echo "<h2>" . $row['item_name'] . "</h2>";
                echo "<span>" . $row['item_desc'] . "</span>";
                echo '<br>
                        </form>';
                echo '</div>
                </div>
            </div>';
            }
            ?>
        </div>
    </center>
    <script src="seller_list.js"></script>
</body>

</html>