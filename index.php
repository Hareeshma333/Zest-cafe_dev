<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="post">
                    <div class="card">
                        <img src="img/Lava-Cake-005s.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Lava-Cake</h5>
                            <p class="card-text">Price: Rs.100</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Lava-Cake">
                            <input type="hidden" name="Price" value="100">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="post">
                    <div class="card">
                        <img src="img/fra.png" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Frapee</h5>
                            <p class="card-text">Price: Rs.250</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Frapee">
                            <input type="hidden" name="Price" value="250">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="post">
                    <div class="card">
                        <img src="img/Cake.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Pastry</h5>
                            <p class="card-text">Price: Rs.180</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Pastry">
                            <input type="hidden" name="Price" value="180">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="post">
                    <div class="card">
                        <img src="img/Bread.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Bread</h5>
                            <p class="card-text">Price: Rs.120</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Bread">
                            <input type="hidden" name="Price" value="120">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>