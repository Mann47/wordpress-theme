<?php

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/index.css">
</head>
<body>
    <header id="sect-1">
    <div class="container">
        <div class="logo"><a href="#">Food<span>House</span></a></div>
        <nav id="ban" class="navbar">
            <ul>
                <button id="btnn">X</button>
                <li> <a href="#">HOME</a></li>
                <li> <a href="services.html" target="_blank">SERVICES</a></li>
                <li> <a href="food.html" target="_blank">FOODS</a></li>
                <li> <a href="skills.html" target="_blank">SKILLS</a></li>
                <li> <a href="contact.html" target="_blank">CONTACT US</a></li>
            </ul>
        </nav>
        <button id="many">
            <span class="dar"></span>
            <span class="dar"></span>
            <span class="dar"></span>
        </button>
        <input type="text" class="input" placeholder="search here">
    </div>
    <div class="heading">
        <h2>Welcome to Our Store</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea officiis eaque laboriosam totam eius, dignissimos, et doloremque laborum iste neque tempore reiciendis sint consequatur. Deleniti officia culpa recusandae perferendis saepe. Maiores exercitationem porro quis nobis vitae qui quasi illum labore!</p>
        <div class="btn">
        <button>Add to Cart</button>
        <button>Order Now</button>
        </div>
    </div>
    </header>
</body>
<script>
    var a = document.getElementById("ban");
    document.getElementById("many").addEventListener('click', ()=>{
        a.style.width = "50%";
    })
    document.getElementById("btnn").addEventListener('click', ()=>{
        a.style.width = "0%";
    })
</script>
</html>