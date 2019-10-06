<?php
session_start();
?>

<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Cats Shopping Cart!</title> 
        <link rel = "stylesheet"
        type = "text/css"
        href = "shoppingCart.css" >


    </head>
    <body>
        <h1> Pick the Cat You Want To Love!</h1>
        <div class = "products";>
        <table style="width:100%">
  <tr>
    <th>Cats</th>
    <th>Picture</th>
  </tr>
  <tr>
    <td><input type="checkbox" name="okitty" id= "orangeKitty" value=""> Orange Kitty</td>
    <td><img src = "OrangeKitty.jpg" alt = "okitty" class = "image"></td>
  </tr>
  <tr>
    <<td><input type="checkbox" name="gkitty" id= "greyKitty" value=""> Grey Kitty</td>
    <td><img src = "GreyKitty.jpg" alt = "gkitty" class = "image"></td>
  </tr>
  <tr>
  <td><input type="checkbox" name="bkitty" id= "blackKitty" value=""> Black Kitty</td>
  <td><img src = "BlackKitty.jpg" alt = "bkitty" class = "image"></td>
  </tr>
  <tr>
  <td><input type="checkbox" name="mkitty" id= "MKitty" value=""> Yo Mamas Kitty</td>
  <td><img src = "MommaKitty.jpg" alt = "mkitty" class = "image"></td>
  </tr>
</table>
<button type = "button" onclick = "location.href='shoppingCartView.php'">
        Add To My Cart/br>
<button type = "button" onclick = "location.href='shoppingCartView.php'">
        Check out with my kitties!
    </button>
    </body>
    </html>