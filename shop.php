<?php
require_once("components.php");

?>



<!DOCTYPE html>
<html>
<head>
    <title>Online Purchase</title>
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="shop.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"></meta:nam>
</head>
<body>
    <h1 class="head">Online Purchase</h1>
    <div class="container">
        <div class="navbar">
            <img src="logo.png" alt=""class="logo">
            <nav>
                <ul id="menu">
                    <a href="#t-shirts">T-Shirts</a>&nbsp;&nbsp;
                    <a href="#phoneCase">Smart Accessories</a>&nbsp;&nbsp;
                    <a href="#hc">Handicrafts</a>
                </ul>
            </nav>
            <img src="menubar.png" alt="" class="menu-icon" onclick="togglemenu()">
        </div>

<!-- form -->
    <form action="shop_index.php" method="post">


        <!-- Indian navy -->
<!--     
    <div class="row">
        <div class="col-1">
            <h2 id="t-shirts">TShirts</h2>
            <h3>Indian Navy T-shirt</h3>
            <p > Full neck T-shirt </p>
            <h4><span>&#8377;</span> 500</h4>
            <button type="button">Buy Now!                     <img src="../img/arrow.png" alt=""> 

            </button>
            
        </div>
        <div class="col-2">
            <img src="../img/in_navy.webp" alt="" class="dont-ts">
    
            <div class="color-box"></div>
            <div class="add-btn">
                <button onclick="in_add()"  type="submit" ><img src="../img/add.webp" alt="CART" title="Add to Cart" class="add_rem" ></button>
                <br>
                <button onclick="in_rem()"><img src="../img/remove.png" alt="Remove From Cart" class="add_rem" title="Remove From Cart"></button>
            
        
            </div>
            </div>
        </div>
     -->

<?php 
component("Indian Navy Shirt","Indian Navy T-shirt","Full neck T-shirt","500",)


        
    <div class="row">
        <div class="col-1">
            <h2>TShirts</h2>
            <h3>Black-Quotes T-shirt</h3>
            <p > Half Sleeved T-shirt </p>
            <h4><span>&#8377;</span> 300</h4>
            <button type="button" class="buy">Buy Now!                     <!-- <img src="../img/arrow.png" alt=""> -->

            </button>
        </div>
        <div class="col-2">
            <img src="dont-ts.jpeg" alt="" class="dont-ts">
    
            <div class="color-box"></div>
            <div class="add-btn">
               <button onclick="dt_add()" ><img src="add.webp" alt="CART" title="Add to Cart" class="add_rem" ></button>
                <br>
                <button onclick="dt_rem()"><img src="remove.png" alt="Remove From Cart" class="add_rem" title="Remove From Cart"></button>
            </div>
            </div>
        </div>


        <!-- Tom and Jerry -->
        
    <div class="row">
        <div class="col-1">
            <h2>TShirts</h2>
            <h3>Tom and Jerry T-shirt</h3>
            <p > Olive color T-shirt </p>
            <h4><span>&#8377;</span> 300</h4>
            <button type="button" class="buy">Buy Now!                     <!-- <img src="../img/arrow.png" alt=""> -->

            </button>
        </div>
        <div class="col-2">
            <img src="tj.webp" alt="" class="dont-ts">
    
            <div class="color-box"></div>
            <div class="add-btn">
               <button onclick="tj_add()" ><img src="add.webp" alt="CART" title="Add to Cart" class="add_rem" ></button>
                <br>
                <button onclick="tj_rem()"><img src="remove.png" alt="Remove From Cart" class="add_rem" title="Remove From Cart"></button>
            </div>
            </div>
        </div>

<!-- Phone Case1 -->

<div class="row">
    <div class="col-1">
        <h2 id="phoneCase">Phone Cases</h2>
        <h3>Overthinking Comic Panel</h3>
        <p > Hard Case Phone Cover  </p>
        <h4><span>&#8377;</span> 700</h4>
        <button type="button" class="buy">Buy Now!                     <!-- <img src="../img/arrow.png" alt=""> -->

        </button>
    </div>
    <div class="col-2">
        <img src="case3.webp" alt="" class="dont-ts">

        <div class="color-box"></div>
        <div class="add-btn">
            <button onclick="c3_add()" ><img src="add.webp" alt="CART" title="Add to Cart" class="add_rem" ></button>
                <br>
                <button onclick="c3_rem()"><img src="remove.png" alt="Remove From Cart" class="add_rem" title="Remove From Cart"></button>
        </div>
        </div>
    </div>
<!-- Smile bracelet case -->

    <div class="row">
        <div class="col-1">
            <h2>Phone Cases</h2>
            <h3>Smiley Bracelet Case  </h3>
            <p > Strap Custom Soft Cases  </p>
            <h4><span>&#8377;</span> 800</h4>
            <button type="button"class="buy">Buy Now!                     <!-- <img src="../img/arrow.png" alt=""> -->

            </button>
        </div>
        <div class="col-2">
            <img src="../img/case2.webp" alt="" class="dont-ts">
    
            <div class="color-box"></div>
            <div class="add-btn">
               <button onclick="c2_add()" ><img src="add.webp" alt="CART" title="Add to Cart" class="add_rem" ></button>
                <br>
                <button onclick="c2_rem()"><img src="remove.png" alt="Remove From Cart" class="add_rem" title="Remove From Cart"></button>
            </div>
            </div>
        </div>


<!-- purple case -->
        <div class="row">
            <div class="col-1">
                <h2>Phone Cases</h2>
                <h3>Aesthetic Case</h3>
                <p > Purple Strape Phone Case </p>
                <h4><span>&#8377;</span> 1050</h4>
                <button type="button"class="buy">Buy Now!                     <!-- <img src="../img/arrow.png" alt=""> -->

                </button>
            </div>
            <div class="col-2">
                <img src="case1.webp" alt="" class="dont-ts">

                <div class="color-box"></div>
                <div class="add-btn">
                    <button onclick="c1_add()" ><img src="add.webp" alt="CART" title="Add to Cart" class="add_rem" ></button>
                <br>
                <button onclick="c1_rem()"><img src="remove.png" alt="Remove From Cart" class="add_rem" title="Remove From Cart"></button>
                </div>
                </div>
            </div>




    <!-- Bags -->
    
    <div class="row">
        <div class="col-1">
            <h2>College Bags</h2>
            <h3>College Side Bags </h3>
            <p > superior quality range of College Side Bag. </p>
            <h4><span>&#8377;</span> 450</h4>
            <button type="button"class="buy">Buy Now!                     <!-- <img src="../img/arrow.png" alt=""> -->

            </button>
        </div>
        <div class="col-2">
            <img src="../img/bag1.jpeg" alt="" class="dont-ts">

            <div class="color-box"></div>
            <div class="add-btn">
               <button onclick="b1_add()" ><img src="../img/add.webp" alt="CART" title="Add to Cart" class="add_rem" ></button>
                <br>
                <button onclick="b1_rem()"><img src="../img/remove.png" alt="Remove From Cart" class="add_rem" title="Remove From Cart"></button>
            </div>
            </div>
        </div>





        <div class="row">
            <div class="col-1">
                <h2>College Bags</h2>
                <h3>Alice Fashion Bags </h3>
                <p >Leather Backpack with Mini purse</p>
                <h4><span>&#8377;</span> 750</h4>
                <button type="button"class="buy">Buy Now!                     <!-- <img src="../img/arrow.png" alt=""> -->

                </button>
            </div>
            <div class="col-2">
                <img src="../img/bag2.jpeg" alt="" class="dont-ts">
    
                <div class="color-box"></div>
                <div class="add-btn">
                    <button onclick="b2_add()" ><img src="../img/add.webp" alt="CART" title="Add to Cart" class="add_rem" ></button>
                <br>
                <button onclick="b2_rem()"><img src="../img/remove.png" alt="Remove From Cart" class="add_rem" title="Remove From Cart"></button>
                </div>
                </div>
            </div>
    
    
    <!-- Handicrafts -->
    

    <div class="row">
        <div class="col-1">
            <h2 id="hc">Handicraft</h2>
            <h3>Indian Handicrafts</h3>
            <p >Dancing Men and Women</p>
            <h4><span>&#8377;</span> 1300</h4>
            <button type="button"class="buy">Buy Now!                     <!-- <img src="../img/arrow.png" alt=""> -->

            </button>
        </div>
        <div class="col-2">
            <img src="../img/hc1.jpeg" alt="" class="dont-ts">

            <div class="color-box"></div>
            <div class="add-btn">
               <button onclick="h1_add()" ><img src="../img/add.webp" alt="CART" title="Add to Cart" class="add_rem" ></button>
                <br>
                <button onclick="h1_rem()"><img src="../img/remove.png" alt="Remove From Cart" class="add_rem" title="Remove From Cart"></button>
            </div>
            </div>
        </div>


        <div class="row">
            <div class="col-1">
                <h2>Handicraft</h2>
                <h3>DIY Macrame Bracelets </h3>
                <p >Small Handicrafts for hand Decoring</p>
                <h4><span>&#8377;</span> 250</h4>
                <button type="button"class="buy">Buy Now! 
                    <!--                     <img src="../img/arrow.png" alt=""> -->

                </button>
            </div>
            <div class="col-2">
                <img src="../img/hc2.jpeg" alt="" class="dont-ts">
    
                <div class="color-box"></div>
                <div class="add-btn">
                    <button onclick="h2_add()" ><img src="../img/add.webp" alt="CART" title="Add to Cart" class="add_rem" ></button>
                <br>
                <button onclick="h2_rem()"><img src="../img/remove.png" alt="Remove From Cart" class="add_rem" title="Remove From Cart"></button>
                </div>
                </div>
            </div>
    <br><br><br><br><br>

            <button onclick="Total()" class="total">Total</button>
            <br><br><br><br><p id="result"></p>
    


        <div class="icons">
            <img src="../img/googlelogo.png" alt="">
            <img src="../img/facebooklogo.png" alt="">
            <img src="../img/insta.jpeg" alt="">
        </div>
    
    </div>
    </form>





<script>
    function togglemenu(){
    menu=document.getElementById("menu");
    menu.style.maxHeight="0px";
    function togglemenu()
    {
    if(menu.style.maxHeight=="0px")
    {
    menu.style.maxHeight="130px";
    }
    else
    {
    menu.style.maxHeight="0px";
    }
    
    }
}
    </script>





<!-- cart -->



<script>

    var shoppingCart=[{
        "item":"Indian Navy",
        "price":500,
        // "discount":10,
    },{
        "item":"Make Some Noise",
        "price":300,
        // "discount":17,
    },{
        "item":"Tom and Jerry",
        "price":300,
        // "discount":15,
    
    },{
        "item":"Overthinking Comic Panel Phone Case",
        "price":700,
        // "discount":5,
    }
    ,{
        "item":"Smiley Bracelet Case",
        "price":800,
        // "discount":5,
    },{
        "item":"Aesthetic Case",
        "price":1050,
        // "discount":5,
    },{
        "item":"College Side Bag",
        "price":450,
        // "discount":5,
    },{
        "item":"Alice Fashion Bags",
        "price":750,
        // "discount":5,
    },{
        "item":"Indian Handicrafts",
        "price":1300,
        // "discount":5,
    },{
        "item":"DIY Macrame Bracelets",
        "price":250,
        // "discount":5,
    }
    ];
    var in_no=0;
    var dt_no=0;
    var tj_no=0;
    var c3_no=0;
    var c2_no=0;
    var c1_no=0;
    var b1_no=0;
    var b2_no=0;
    var h1_no=0;
    var h2_no=0;
    var in_total=0;
    var dt_total=0;
    var tj_total=0;
    var c3_total=0;
    var c2_total=0;
    var c1_total=0;
    var b1_total=0;
    var b2_total=0;
    var h1_total=0;
    var h2_total=0;

    function in_add(){
       in_no++;
       alert("Indian Navy t-Shirt: "+in_no+"");
       in_total=in_no*shoppingCart[0].price;
    //    alert(in_total);
    }


    function dt_add(){
       dt_no++;
       alert("Make Some Noise t-shirt: "+ dt_no+"");
       dt_total=dt_no*shoppingCart[1].price;
    }

    function tj_add(){
       tj_no++;
       alert("Tom and Jerry t-shirt:"+ tj_no+"");
       tj_total=tj_no*shoppingCart[2].price;
    }    

    function c3_add(){
       c3_no++;
       alert("Overthinking Comic Panel:"+ c3_no+"");
       c3_total=c3_no*shoppingCart[3].price;
    }





    function c2_add(){
       c2_no++;
       alert("Smiley Strap Bracelet Case:"+c2_no+"");
       c2_total=c2_no*shoppingCart[4].price;
    //    alert(in_total);
    }


    function c1_add(){
       c1_no++;
       alert("Aesthetic Phone Case:"+ c1_no+"");
       c1_total=c1_no*shoppingCart[5].price;
    }

    function b1_add(){
       b1_no++;
       alert("College side Bag:"+ b1_no+"");
       b1_total=b1_no*shoppingCart[6].price;
    }    

    function b2_add(){
       b2_no++;
       alert("Alice Fashion Bag:"+ b2_no+"");
       b2_total=b2_no*shoppingCart[7].price;
    }

    function h1_add(){
       h1_no++;
       alert("Indian Horse Handicraft:"+ h1_no+"");
       h1_total=h1_no*shoppingCart[8].price;
    }    

    function h2_add(){
       h2_no++;
       alert("DIY Macrame Bracelets:"+ h2_no+"");
       h2_total=h2_no*shoppingCart[9].price;
    }











    function in_rem(){
       if(in_no>0){in_no--;}
       alert("Indian Navy T-shirt"+ in_no+"");
       in_total=in_no*shoppingCart[0].price;
    }


    function dt_rem(){
        if(dt_no>0){dt_no--;}
       alert("Make Some Noise t-shirt:"+ dt_no+"");
       dt_total=dt_no*shoppingCart[1].price;
    }

    function tj_rem(){
        if(tj_no>0){tj_no--;}
       alert("Tom and Jerry t-shirt:"+ tj_no+"");
       tj_total=tj_no*shoppingCart[2].price;
       
    }


    function c3_rem(){
       if(c3_no>0){c3_no--;}
       alert("Overthinking Comic Panel:"+ c3_no+"");
       c3_total=c3_no*shoppingCart[3].price;
    }




    function c2_rem(){
       if(c2_no>0){c2_no--;}
       alert("Smiley Bracelet Strap Case:"+c2_no+"");
       c2_total=in_no*shoppingCart[4].price;
    }


    function c1_rem(){
        if(c1_no>0){c1_no--;}
       alert("Aesthetic Case:"+ c1_no+"");
       c1_total=c1_no*shoppingCart[5].price;
    }

    function b1_rem(){
        if(b1_no>0){b1_no--;}
       alert("College Side Bag:"+ b1_no+"");
       b1_total=b1_no*shoppingCart[6].price;
       
    }


    function b2_rem(){
       if(b2_no>0){b2_no--;}
       alert("Alice Fashion Bag:"+ b2_no+"");
       b2_total=b2_no*shoppingCart[7].price;
    }

    
    function h1_rem(){
        if(h1_no>0){h1_no--;}
       alert("Indian Horse Handicraft:"+ h1_no+"");
       h1_total=h1_no*shoppingCart[8].price;
       
    }


    function h2_rem(){
       if(h2_no>0){h2_no--;}
       alert("DIY Macrame Bracelets:"+ h2_no+"");
       h2_total=h2_no*shoppingCart[9].price;
    }




    function Total(){
        var total=in_total+dt_total+tj_total+c3_total+c2_total+c1_total+b1_total+b2_total+h1_total+h2_total;
        var text="<table border='3'><tr><th>Items</th><th>Price</th><th>Quantity</th><th>Amount</th></tr>"
            
            if(in_total!=0)
        {
            text+="<tr><td>"+shoppingCart[0].item+"</td><td>"+shoppingCart[0].price+"</td><td>"
                +in_no+"</td><td>"+in_total+"</td></tr>"

        }

        if(dt_total!=0)
        {
            text+="<tr><td>"+shoppingCart[1].item+"</td><td>"+shoppingCart[1].price+"</td><td>"
                +dt_no+"</td><td>"+dt_total+"</td></tr>"

            
        }
        if(tj_total!=0)
        {
            text+="<tr><td>"+shoppingCart[2].item+"</td><td>"+shoppingCart[2].price+"</td><td>"
                +tj_no+"</td><td>"+tj_total+"</td></tr>"

            
        }
        if(c3_total!=0)
        {
            text+="<tr><td>"+shoppingCart[3].item+"</td><td>"+shoppingCart[3].price+"</td><td>"+c3_no+"</td><td>"+c3_total+"</td></tr>"
            
            
        }
        if(c2_total!=0)
        {
            text+="<tr><td>"+shoppingCart[4].item+"</td><td>"+shoppingCart[4].price+"</td><td>"+c2_no+"</td><td>"+c2_total+"</td></tr>"

        }

        if(c1_total!=0)
        {
            text+="<tr><td>"+shoppingCart[5].item+"</td><td>"+shoppingCart[5].price+"</td><td>"+c1_no+"</td><td>"+c1_total+"</td></tr>"

            
        }
        if(b1_total!=0)
        {
            text+="<tr><td>"+shoppingCart[6].item+"</td><td>"+shoppingCart[6].price+"</td><td>"+b1_no+"</td><td>"+b1_total+"</td></tr>"

            
        }
        if(b2_total!=0)
        {
            text+="<tr><td>"+shoppingCart[7].item+"</td><td>"+shoppingCart[7].price+"</td><td>"+b2_no+"</td><td>"+b2_total+"</td></tr>"
            
            
        }
        
        if(h1_total!=0)
        {
            text+="<tr><td>"+shoppingCart[8].item+"</td><td>"+shoppingCart[8].price+"</td><td>"+h1_no+"</td><td>"+h1_total+"</td></tr>"

            
        }
        if(h2_total!=0)
        {
            text+="<tr><td>"+shoppingCart[9].item+"</td><td>"+shoppingCart[9].price+"</td><td>"+h2_no+"</td><td>"+h2_total+"</td></tr>"
            
            
        }

       
        text+="<tfoot><tr><td colspan='3'>Total</td><td>"+total+"</td></tr></tfoot></table><br><hr><hr>"

        document.getElementById("result").innerHTML=text;
        // document.getElementById("form").innerHTML=form;
        }

</script>





</body>
</html>