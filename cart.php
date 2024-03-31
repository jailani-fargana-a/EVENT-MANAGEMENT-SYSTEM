<?php
    session_start();
    $database_name = "shoppingcart";
    $con = mysqli_connect("localhost","root","",$database_name);

    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                    
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="cart.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
                
                

            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="cart.php"</script>';
                }
            }
        }
    }
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="../css/shop.css">
    <title>Shopping Cart</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

       *{
        font-family: 'Titillium',sans-serif;

       }
       body{
        background-blend-mode: multiply;
    background-image: linear-gradient(to bottom right,#000b18,#00172d,#00264d,#02386e,#00498d,#0052a2 ),url("../img/bg.jpg");
       } 
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: whitesmoke;
            padding: 2%;
            font-size: 70px;
            font-family: 'Times New Roman', Times, serif;
        }
        table th{
            background-color: aliceblue;
            color: #234;
        }
        td{
            color:cornflowerblue;
            background-color: antiquewhite;
        }
    </style>
</head>
<body>

    
        <h1 class="head">Shopping Cart</h1>

        <?php
            $query = "SELECT * FROM product ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    
<div class="row">
        <div class="col-1">
                        <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
                                <h2><?php echo $row["pname"]; ?></h2>
                                <h4><span>&#8377;</span><?php echo $row["price"]; ?></h4>
                                <input type="number" name="quantity" value="0">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <br><br>
                                <input type="submit" name="add"  class="buy" 
                                       value="Add To Cart">

                                       </div>
                                       <div class="col-2">
                                       <div class="color-box"></div>
                                <img src="<?php echo $row["image"]; ?>" name="p_image"class="dont-ts"></div>
                        </form>
    </div>
                    <?php
                }
            }
        ?>
        
        <div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive" id="total">
            <table class="table table-bordered">
            <tr>
                
                <th width="30%">Product Name</th>
                <th width="20%">Quantity</th>
                <th width="10%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>$ <?php echo $value["product_price"]; ?></td>
                            <td>
                                $ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                            <td><a href="cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right" style="font-size:50px;color:darkmagenta" >Total</td>
                            <th align="right">$ <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        
                        <?php
                    }
                ?>
            </table>
        </div>

    </div>


    <button type="button"  class="backToHome" onclick="window.location.href='#total'">Get Total</button>
</body>
</html>