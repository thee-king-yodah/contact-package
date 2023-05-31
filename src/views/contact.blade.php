<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body class="width:100%;display:flex">

   <h1> Anytime us anytime</h1>

   <form method="POST" action="/contact" style="
    display:flex;
    flex-direction:column;
    padding:10px;
    max-width:500px;
    margin-left:auto;
    margin-right:auto;
    margin-top:20px;
    border:1px solid grey;
   ">
    @csrf

    <input type="text" name="name" placeholder="Enter your name">
    <input type="email" name="email" placeholder="Enter your Email">
    <textarea name="message" placeholder="Message" cols="30" rows="10"></textarea>
    <button type="submit">Submit</button>

   </form>
    
</body>
</html>