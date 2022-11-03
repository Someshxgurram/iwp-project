<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller - Sold Items</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="seller_sold.css">
</head>

<body>
    <div class="nav">
        <div class="menu" id="menu">
            <ul>
                <li><a href="seller_list.php"><i class="fa fa-list "></i><span>Listed Items</span></a></li>
                <li><a href="seller_sold.php" id="active"><i class="fa fa-handshake-o "></i><span>Sold Items</span></a></li>
                <li><a href="seller_add.php"><i class="fa fa-plus-square "></i><span>Add Items</span></a></li>
                <li><a href="seller_feedback.php"><i class="fa fa-comments "></i><span>Feedback</span></a></li>
                <li><a href="seller_login.php"><i class="fa fa-sign-out "></i><span>Log Out</span></a></li>
            </ul>
        </div>
        <div class="bar">
            <a class="fa fa-bars" id="bars" onclick="responsive()" style="cursor: pointer;"></a>
        </div>
    </div>
    <center>
        <div class="container">
            <div class="card">
                <img src="./images/book.jpeg" alt="book1">
                <h2>Name - Percy Jackson</h2>
                <h2>Price - &#8377;700</h2>
                <h2>Customer - Somesh</h2>
                <h2>Date - 22/8/22</h2>
            </div>
            <div class="card">
                <img src="./images/book2.jpeg" alt="book1">
                <h2>Name - Harry Potter</h2>
                <h2>Price - &#8377;800</h2>
                <h2>Customer - Kamalesh</h2>
                <h2>Date - 2/7/22</h2>
            </div>
            <div class="card">
                <img src="./images/book3.jpeg" alt="book1">
                <h2>Name - Maze Runner</h2>
                <h2>Price - &#8377;600</h2>
                <h2>Customer - Sahithi</h2>
                <h2>Date - 1/6/22</h2>
            </div>
        </div>
    </center>
    <script src="seller_sold.js"></script>
</body>

</html>