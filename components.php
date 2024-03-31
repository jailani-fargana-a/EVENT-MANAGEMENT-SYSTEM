<?php
function component($name,$h3,$p,$price,$img,$add,$rem){
    $element= "
    
    <div class='row'>
        <div class='col-1'><h2 id='t-shirts'>TShirts</h2>
    <h3>$h3</h3>
    <p >$p</p>
    <h4><span>&#8377;</span>$price</h4>
    <button type='button'>Buy Now!                    <!-- <img src='../img/arrow.png' alt=''> -->

    </button>
    
</div>
<div class='col-2'>
    <img src='$img' alt='' class='dont-ts'>

    <div class='color-box'></div>
    <div class='add-btn'>
        <button onclick='$add'  type='submit' ><img src='../img/add.webp' alt='CART' title='Add to Cart' class='add_rem' ></button>
        <br>
        <button onclick='$rem'><img src='../img/remove.png' alt='Remove From Cart' class='add_rem' title='Remove From Cart'></button>
    

    </div>
    </div>
</div>

<div class='row'>
        <div class='col-1'><h2 id='t-shirts'>TShirts</h2>
    <h3>$h3</h3>
    <p >$p</p>
    <h4><span>&#8377;</span>$price</h4>
    <button type='button'>Buy Now!                    <!-- <img src='../img/arrow.png' alt=''> -->

    </button>
    
</div>
<div class='col-2'>
    <img src='$img' alt='' class='dont-ts'>

    <div class='color-box'></div>
    <div class='add-btn'>
        <button onclick='$add'  type='submit' ><img src='../img/add.webp' alt='CART' title='Add to Cart' class='add_rem' ></button>
        <br>
        <button onclick='$rem'><img src='../img/remove.png' alt='Remove From Cart' class='add_rem' title='Remove From Cart'></button>
    

    </div>
    </div>
</div>


<div class='row'>
        <div class='col-1'><h2 id='t-shirts'>TShirts</h2>
    <h3>$h3</h3>
    <p >$p</p>
    <h4><span>&#8377;</span>$price</h4>
    <button type='button'>Buy Now!                    <!-- <img src='../img/arrow.png' alt=''> -->

    </button>
    
</div>
<div class='col-2'>
    <img src='$img' alt='' class='dont-ts'>

    <div class='color-box'></div>
    <div class='add-btn'>
        <button onclick='$add'  type='submit' ><img src='../img/add.webp' alt='CART' title='Add to Cart' class='add_rem' ></button>
        <br>
        <button onclick='$rem'><img src='../img/remove.png' alt='Remove From Cart' class='add_rem' title='Remove From Cart'></button>
    

    </div>
    </div>
</div>



































";


}