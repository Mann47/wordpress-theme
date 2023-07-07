<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varity of foods</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        .head{
            background:linear-gradient(to left, rgba(70, 45, 15, 0.8), rgba(155, 45, 75, 0.8));
            width: 100%;
            height: 100vh;
        }
        .heading h1{
            color: rgb(214, 79, 0), rgb(200, 25, 10);
            font-size: 60px;
            display: flex;
            justify-content: center;
            text-decoration: underline;
        }
        .main h2{
            display: flex;
            justify-content: center;
            margin-top: 20px;
            font-size: 70px;
            color: orange;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-color: brown;
        }
        #container{
            display: grid;
            grid-template-columns: repeat(4,auto);
            grid-gap: 2rem;
            justify-content: space-around;
            margin-top: 5%;
        }
        .boxes a button:hover{
            background-color: rgb(224, 60, 60);
            box-shadow: 10px 7px 12px red;
            cursor: pointer;
        }
        .boxes a button{
            background-color: rgb(223, 101, 101);
            width: 40vh;
            height: 15vh;
            box-shadow: 7px 5px 10px red;
            text-align: center;
            font-size: 20px;;
            color: darkred;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            transition: 1s;
            border: 1px solid black;
        }
        @media screen and (max-width:500px){
            .head{
            background:linear-gradient(to left, rgba(70, 45, 15, 0.8), rgba(155, 45, 75, 0.8));
            width: 100%;
            height: auto;
            overflow: hidden;
        }
        .heading h1{
            color: rgb(214, 79, 0), rgb(200, 25, 10);
            font-size: 2rem;
            display: flex;
            text-align: center;
            text-decoration: underline;
        }
        .main{
            display:block;
            width: 70%;
            margin: auto;

        }
        .main h2{
            display: flex;
            justify-content: center;
            margin-top: 1rem;
            font-size: 2rem;
            text-align: center;
            color: orange;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        #container{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin:4% 0%;
        }
        
        .boxes a button{
            background-color: rgb(223, 101, 101);
            width: 40vh;
            height: 12vh;
            box-shadow: 7px 5px 10px red;
            text-align: center;
            font-size: 20px;;
            color: darkred;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            transition: 1s;
            border: 1px solid black;
        }
        }
    </style>
</head>
<body>
    <div class="head">
        <div class="heading">
            <h1>OUR POPULAR CUISINES</h1>
        </div>
        <div class="main">
            <h2>Select the Items</h2>
        </div>
        <div id="container">
        <div class="boxes"> <a href="#"><button>CREMEIE PASTA</button></a></div>
        <div class="boxes"> <a href="#"><button>SIMPLE PASTA</button></a></div>
        <div class="boxes"> <a href="#"><button>VEG-BURGER</button></a></div>
        <div class="boxes"> <a href="#"><button>NON-VEG BURGER</button></a></div>
        <div class="boxes"> <a href="#"><button>PIZZAS</button></a></div>
        <div class="boxes"> <a href="#"><button>CHINESE</button></a></div>
        <div class="boxes"> <a href="#"><button>ITALIAN</button></a></div>
        <div class="boxes"> <a href="#"><button>MAXICAN</button></a></div>
        <div class="boxes"> <a href="#"><button>INDIAN</button></a></div>
        <div class="boxes"> <a href="#"><button>SOUTH INDIAN</button></a></div>
        <div class="boxes"> <a href="#"><button>VEG</button></a></div>
        <div class="boxes"> <a href="#"><button>NON-VEG</button></a></div>
        
        </div>
    </div>
    
</body>
</html>