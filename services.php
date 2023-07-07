<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
</head>
<style>
    *{
        margin: 0px;
        padding: 0px;
    }
    body, html{
        overflow-x: hidden;
    }
    #sect-1{
        background-color: cornsilk;
        width: auto;
        height: 100vh;
        box-sizing: border-box;
    }
    .about{
        font-size: 30px;
        color: black;
        display: flex;
        justify-content: center;
        color: brown;
        text-decoration: underline;
    }
    .para h1{
        font-size: 60px;
        display: flex;
        justify-content: center;
        font-family:Arial, Helvetica, sans-serif;
        margin-top: 2%;
        color: rgba(255, 0, 0, 0.774);
    }
    .para p{
        font-size: 22px;
        text-align: center;
        color: rgb(100, 0, 0);
        display: block;
        position: relative;
        top: 10px;
    }
    #contianer{
     display: flex;
     flex-direction: row;
     justify-content: space-around;
     margin-top: 40px;
     text-align: center;
    }
    .grid{
        border: 1px solid red;
        border-radius: 20px;
        background-color: coral;
        width: 25vw;
        height: 55vh;
        box-shadow: 7px 5px 10px rgb(190, 77, 77);
    }
    .grid img{
        display: block;
        width: 50%;
        margin: auto;
        margin-top: 20px;
    }
    .grid p{
        margin-top: 20px;
        font-size: 20px;
        font-family: Arial, Helvetica, sans-serif;
    }
    .grid h3{
        margin-top: 20px;
        font-size: 30px;
        color: rgb(80, 6, 21);
    }
    @media screen and (max-width:500px){
        #sect-1{
        background-color: cornsilk;
        width: 100vw;
        height: 185vh;
    }
        .about{
        font-size: 1.5rem;
        color: black;
        display: flex;
        justify-content: center;
        color: brown;
        text-decoration: underline;
    }
    .para h1{
        width: 70%;
        font-size: 2rem;
        display: flex;
        text-align: center;
        font-family:Arial, Helvetica, sans-serif;
        margin-top: 2rem;
        color: rgba(255, 0, 0, 0.774);
    }
    .para{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }
    .para p{
        width: 70%;
        font-size: 1.3rem;
        text-align: center;
        color: rgb(100, 0, 0);
        display: flex;   
          margin-top: 2%;
    
    }
    #contianer{
     display: flex;
     flex-direction: row;
    flex-wrap: wrap;
     margin-top: 2rem;
     text-align: center;
    }
    .grid{
        border: 1px solid red;
        border-radius: 20px;
        background-color: coral;
        width: 70%;
        height: 20rem;
        margin: 1rem 0rem;
        box-shadow: 7px 5px 10px rgb(190, 77, 77);
    }
    .grid p{
        display: flex;
        flex-wrap: wrap;
        margin-top: 1rem;
        font-size: 1rem;
        font-family: Arial, Helvetica, sans-serif;
    }
    }
</style>
<body>
    <section id="sect-1">
        <div class="about">
            <h1>OUR SERVICES</h1>
        </div>
        <div class="para">
            <h1>The Biggest Food Store</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem rerum perspiciatis, voluptate ab obcaecati porro eligendi aliquid repellat quo odio veritatis harum ex animi fugit ducimus eum vero libero explicabo cumque. Nihil, aspernatur laboriosam. Officiis sequi delectus velit recusandae provident!</p>
        </div>
        <div id="contianer">
        <div class="grid"><img src="1.png">
            <h3>Westren Food</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias delectus iure consectetur quasi repellat ad quidem vero sapiente accusamus facilis.</p>
        </div>
        <div class="grid"><img src="2.png">
            <h3>Indian Food</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt quidem possimus doloribus animi iste doloremque iure vitae rem impedit? Eum?</p>
        </div>
        <div class="grid"><img src="3.png">
            <h3>Fast Delivery</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum alias deserunt reiciendis. Sint maiores excepturi nemo expedita nesciunt voluptatem soluta.</p>
        </div>
        </div>
    </section>
</body>
</html>