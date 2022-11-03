<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor - Listed Items</title>
    <link rel="stylesheet" href="donor_list.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="nav">
        <div class="menu" id="menu">
            <ul>
                <li><a href="donor_list.php" id="active"><i class="fa fa-list "></i><span>Listed Items</span></a></li>
                <li><a href="donor_sold.php"><i class="fa fa-handshake-o "></i><span>Donated Items</span></a></li>
                <li><a href="donor_add.php"><i class="fa fa-plus-square"></i><span>Add Items</span></a></li>
                <li><a href="donor_feedback.php"><i class="fa fa-comments "></i><span>Feedback</span></a></li>
                <li><a href="donor_login.php"><i class="fa fa-sign-out "></i><span>Log Out</span></a></li>
            </ul>
        </div>
        <div class="bar">
            <a class="fa fa-bars" id="bars" onclick="responsive()" style="cursor: pointer;"></a>
        </div>
    </div>
    <center>
        <h1>Listed Items</h1>
        <div class="container">
            <div class="card-conatiner">
                <div class="card">
                    <div class="img-div">
                        <img src="./images/book.jpeg" alt="book">
                    </div>
                    <ul class="rating">
                        <li><a><i class="fa fa-star"></i></a></li>
                        <li><a><i class="fa fa-star"></i></a></li>
                        <li><a><i class="fa fa-star"></i></a></li>
                        <li><a><i class="fa fa-star-half-empty"></i></a></li>
                        <li><a><i class="fa fa-star-o"></i></a></li>
                    </ul>
                    <div class="book-info">
                        <h2>Percy Jackson</h2>
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, deserunt similique ea, facilis autem necessitatibus eaque numquam odit cum hic quibusdam. Consequatur et nihil quae possimus facilis, ducimus fugit enim.</span>


                    </div>
                </div>
            </div>
            <div class="card-conatiner">
                <div class="card">
                    <div class="img-div">
                        <img src="./images/book2.jpeg" alt="book">
                    </div>
                    <ul class="rating">
                        <li><a><i class="fa fa-star"></i></a></li>
                        <li><a><i class="fa fa-star"></i></a></li>
                        <li><a><i class="fa fa-star"></i></a></li>
                        <li><a><i class="fa fa-star-half-empty"></i></a></li>
                        <li><a><i class="fa fa-star-o"></i></a></li>
                    </ul>
                    <div class="book-info">
                        <h2>Harry Potter</h2>
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, deserunt similique ea, facilis autem necessitatibus eaque numquam odit cum hic quibusdam. Consequatur et nihil quae possimus facilis, ducimus fugit enim.</span>


                    </div>
                </div>
            </div>
            <div class="card-conatiner">
                <div class="card">
                    <div class="img-div">
                        <img src="./images/book3.jpeg" alt="book">
                    </div>
                    <ul class="rating">
                        <li><a><i class="fa fa-star"></i></a></li>
                        <li><a><i class="fa fa-star"></i></a></li>
                        <li><a><i class="fa fa-star"></i></a></li>
                        <li><a><i class="fa fa-star-half-empty"></i></a></li>
                        <li><a><i class="fa fa-star-o"></i></a></li>
                    </ul>
                    <div class="book-info">
                        <h2>Maze Runner</h2>
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, deserunt similique ea, facilis autem necessitatibus eaque numquam odit cum hic quibusdam. Consequatur et nihil quae possimus facilis, ducimus fugit enim.</span>


                    </div>
                </div>
            </div>
        </div>
    </center>
    <script src="donor_list.js"></script>
</body>

</html>