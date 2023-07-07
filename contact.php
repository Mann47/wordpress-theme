<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact form</title>
</head>
<style>
    *{
        margin: 0px;
        padding: 0px;
    }
    body{
        background-image: linear-gradient(to top, rgba(0,0,0,0.5)50%, rgba(0,0,0,0.5)50%), url(contact.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 100vh;
    }
    .container{
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .container h1{
        font-size: 2rem;
        text-decoration: underline 3px solid black;
        padding: 10px 0px;
        color: rgb(241, 137, 0);
        text-align: center;
    }
    .container h2{
        font-size: 2rem;
        color: azure;
        text-align: center;
    }
    #form{
        display: flex;
        justify-content: center;
        flex-direction: column;
        width: 40%;
        margin: auto;
        color: aliceblue;
    }
    #form input{
        background: transparent;
        color: aliceblue;
        border: none;
        border-bottom: 2px solid black;
        font-size: 1rem;
    }
    #form label{
        display: flex;
        font-size: 1.2rem;
        margin: 0.5rem 0rem;
    }
    #form textarea{
        background:transparent;
        color: aliceblue;
        font-size: 1rem;
    }
    
</style>
<body>
    <div class="container">
        <h1>CONTACT US</h1>
        <h2>For More Queries</h2>
        <form id="form">
            <label>Name:</label>
            <input type="text" placeholder="enter your name" required>
            <label>Phone No.:</label>
            <input type="text" placeholder="enter your name" required>
            <label>E-mail:</label>
            <input type="email" placeholder="enter your name" required>
            <label>Address:</label>
            <input type="text" placeholder="enter your name" required>
            <label>sugesstions:</label>
            <textarea cols="30" rows="5"></textarea>
            <button>Submit</button>
        </form>
    </div>
</body>
</html>