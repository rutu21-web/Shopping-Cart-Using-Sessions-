<?php

include('header.php');
//session_start();
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
             <form action="manage_cart.php" method="POST">
               <div class="card text-center">
                 <img src="2.png" class="card-img-top">
                   <div class="card-body">
                     <h5 class="card-title">Mobile 1</h5>
                     <p class="card-text">Rs 10000</p>
                     <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="item_name" value="Mobile 1"> 
                    <input type="hidden" name="price" value="10000">
                </div>
                </div>
              </form>
            </div>

            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
               <div class="card text-center">
                 <img src="3.png" class="card-img-top">
                   <div class="card-body">
                     <h5 class="card-title">Mobile 2</h5>
                     <p class="card-text">Rs 12000</p>
                     <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="item_name" value="Mobile 2"> 
                    <input type="hidden" name="price" value="12000">
                </div>
                </div>
              </form>
            </div>

            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
               <div class="card text-center">
                 <img src="5.png" class="card-img-top">
                   <div class="card-body">
                     <h5 class="card-title">Mobile 3</h5>
                     <p class="card-text">Rs 18000</p>
                     <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="item_name" value="Mobile 3"> 
                    <input type="hidden" name="price" value="18000">
                </div>
                </div>
              </form>
            </div>
            
            <div class="col-lg-3 ">
                <form action="manage_cart.php" method="POST">
               <div class="card text-center">
                 <img src="10.png" class="card-img-top">
                   <div class="card-body">
                     <h5 class="card-title">Mobile 4</h5>
                     <p class="card-text">Rs 20000</p>
                     <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="item_name" value="Mobile 4"> 
                    <input type="hidden" name="price" value="20000">
                </div>
                </div>
              </form>
            </div>
            
            <br>
            <br>


            <div class="col-lg-3 mt-2">
                <form action="manage_cart.php" method="POST">
               <div class="card text-center">
                 <img src="iphone.jpg" class="card-img-top">
                   <div class="card-body">
                     <h5 class="card-title">Mobile 5</h5>
                     <p class="card-text">Rs 30000</p>
                     <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="item_name" value="Mobile 5"> 
                    <input type="hidden" name="price" value="30000">
                </div>
                </div>
              </form>
            </div>


            <br>
            <br>


            <div class="col-lg-3 mt-2">
                <form action="manage_cart.php" method="POST">
               <div class="card text-center">
                 <img src="6.png" class="card-img-top">
                   <div class="card-body">
                     <h5 class="card-title">Mobile 6</h5>
                     <p class="card-text">Rs 15000</p>
                     <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="item_name" value="Mobile 6"> 
                    <input type="hidden" name="price" value="15000">
                </div>
                </div>
              </form>
            </div>

            

            <br>
            <br>

            <div class="col-lg-3 mt-2">
                <form action="manage_cart.php" method="POST">
               <div class="card text-center">
                 <img src="13.png" class="card-img-top">
                   <div class="card-body">
                     <h5 class="card-title">Mobile 7</h5>
                     <p class="card-text">Rs 40000</p>
                     <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="item_name" value="Mobile 7"> 
                    <input type="hidden" name="price" value="40000">
                </div>
                </div>
              </form>
            </div>

            <div class="col-lg-3 mt-2">
                <form action="manage_cart.php" method="POST">
               <div class="card text-center">
                 <img src="oneplus5t.jpg" class="card-img-top">
                   <div class="card-body">
                     <h5 class="card-title">Mobile 8</h5>
                     <p class="card-text">Rs 23000</p>
                     <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                    <input type="hidden" name="item_name" value="Mobile 8"> 
                    <input type="hidden" name="price" value="23000">
                </div>
                </div>
              </form>
            </div>
        
        
          

        </div>
    </div>
</body>
</html>