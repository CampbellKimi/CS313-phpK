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
        div class = "products";
        <table style="width:100%">
  <tr>
    <th>Cats</th>
    <th>Cats</th> 
    <th>More Cats!!!</th>
  </tr>
  <tr>
    <td><input type="checkbox" name="okitty" id= "orangeKitty" value=""> Orange Kitty</td>
    <td>Black Kitty</td>
    <td>Grey Kitty</td>
  </tr>
  <tr>
    <td>Striped Kitty</td>
    <td>White Kitty</td>
    <td>Hairless Kitty</td>
  </tr>
  <tr>
    <td>Turkish Angora Kitty</td>
    <td>Iddle Widdle Kitty</td>
    <td>Yo Mamas Kitty</td>
  </tr>
</table>
    <button type = "button" onclick = "location.href='shoppingCartView.php'">
        View My Kitty Shopping Cart
    </button>
    </body>
    </html>