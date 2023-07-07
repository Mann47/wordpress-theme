<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKILLS</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        .container{
            background:linear-gradient(to left, rgba(2,10,77,0.5)20%, rgba(182, 54, 97, 0.972)80%);
            width: 100%;
            height: 100vh;
        }
        .main h1{
            display: flex;
            justify-content: center;
            font-size: 60px;
            text-decoration: underline;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: rgb(1, 27, 27);
        }
        .para{
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }
        .para p{
            font-size: 1.5rem;
            width: 95%;
            margin: 1.5rem;
            align-self: center;
        }
        .para h2{
            font-size: 2.5rem;
            background-color: chocolate;
        }
        .item{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            border: 1px solid black;
            background-color: brown;
            width: 80%;
            margin: 3% 10%;
        }
        .item p{
            font-size: 1.2rem;
            color: beige;
            text-align: center;
        }
        .item img{
            width: 25%;
            flex-direction: row;
            border: 1px solid black;
            border-radius: 10px;
            margin: 2rem;
            transition: 0.5s ease;
        }
        .item img:hover{
            transform: scale(1.1);
        }
        @media screen and (max-width:600px){
            .container{
                height: auto;
            }
            .item {
                background: none;
                border: none;
            }
            .item img{
                width: 90%;
                margin: 0.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="main">
            <h1>Skills</h1>
        </div>
        <div class="para">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, deserunt quas dignissimos ab sequi totam error aliquam culpa aperiam eos?<a href="#">learm more</a></p>
            <h2>We have Multiple Skilld Workers</h2>
        </div>
        <div class="item">
            <img src="chef1.jpg">
            <img src="chef2.jpg">
            <img src="chef3.jpg">   
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, temporibus.</p>
        </div>
        
    </div>
</body>
</html>