<?php

include('header.php');

//session_start();
//session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CART</title>
</head>
<body>
   <div class="container">
       <div class="row">
           <div class="col-lg-12 text-center border rounded bg-light my-5">
               <h1>MY CART</h1>
           </div>
         
           <div class="col-lg-9">
            <table class="table text-center">
             <thead>
               <tr>
                <th scope="col">Sr.no</th>
                <th scope="col">ITEM NAME</th>
                <th scope="col">ITEM PRICE</th>
                <th scope="col">QUANTITY</th>
                <th scope="col">TOTAL</th>
                <th scope="col">ACTION</th>
               </tr>
             </thead>
             <tbody class="text-center">
            <?php
            //$total = 0;
            
            //$i=0;
            if($_SESSION['cart'])
             {
              foreach($_SESSION['cart'] as $key => $value)
                {
                  //print_r($value);
                  $sr=$key+1;
                  //$total=$total + $value['price'];
                echo "
                <tr>
                <td>$sr</td>
                <td>$value[item_name]</td>
                <td>$value[price]<input type='hidden' class='iprice' value=$value[price]></td>
                <td><input type='number' class='text-center iquantity' onchange='subtotal()' value='$value[Quantity]' min='1' max='10'></td>
                <td class='itotal'></td>
                <td>
                <form action='manage_cart.php' method='POST'>
                <button name='remove_item' type='submit' class='btn btn-danger'>REMOVE</button>
                <input type='hidden' name='item_name' value='$value[item_name]'>
                </form>
                </td>
                </tr>
                ";
                }
            }
                 ?>
             </tbody>
            </table>
           </div>

           <div class="col-lg-3">
             <div class="border bg-light rounded p-4">
             <h4>Grand Total:</h4>
             <h5 class="text-right" id="gtotal">

             </h5>
             
             <form action="">
                 <button class="btn btn-primary">Place Order!</button>
             </form>
              </div>
         </div>

       </div>
   </div>
   <script>

       var gt = 0;
       var iprice = document.getElementsByClassName('iprice');
       var iquantity = document.getElementsByClassName('iquantity');
       var itotal = document.getElementsByClassName('itotal');
       var gtotal = document.getElementById('gtotal');
      
       function subtotal()
       {
        gt=0;
         for(i=0; i<iprice.length; i++)
         {

             itotal[i].innerText = (iprice[i].value)*(iquantity[i].value);

             gt = gt+(iprice[i].value)*(iquantity[i].value);
         }
         gtotal.innerText=gt;

         /*
        
         price 650 quantity 1  gt=0+(650*1)

         price 750 quantity 2 gt=650+(750*2) === gt = 2150

         price 850 quantity 3 gt=750+(850*3)
       

         */
       }

       subtotal();

   </script>
</body>
</html>