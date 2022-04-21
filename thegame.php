<?php 
// Start the session
session_start();
if($_SESSION['email']== "anthony.ellerson2000@gmail.com")
{
    header("Location: admin.html");
}
?>

<!DOCTYPE html>

<html>
<head>
    <title>Game</title>
</head>
<link rel="stylesheet" href="stylesss.css">
<body>
     
    <!-- Header Section -->
     
    <!-- Menu Navigation Bar -->
    <div class="menu">
        <div class="navbar">
            <img src="logo.png" class="logo">
            <ul>
               <li><a href="index.html">Home</a></li>
               <li><a href="scoreboard.html">Scoreboard</a></li>
               <li><a href="rules.html">Rules</a></li>
               <li><a href="game.html">The Game</a></li>
               <li><a href="login.html">Login</a></li>
            </ul>
        
       </div>

       <div class="content">
        <h1>The Game:</h1>
        <p>Overview: 
            Once the game begins, each participant will be given a target that they will have to “eliminate”. 
            To eliminate your target you must tag them and say, “ I have the high ground”. 
            Once eliminated your target will give you a 4 digit pin that you will type in on the game tab to confirm the elimination and be assigned your next target. Beware that while you are hunting your target, you may actually be the prey since someone will be hunting you as well.
            
            <br>
            Rules:
            USE COMMON SENSE - if you think you shouldn't be doing it, then do not do what you are planning.
            Once your target class starts, they may not be eliminated till the class is over. 
            Do not follow someone back to their dorm room/ apartment/house. These are safe areas. <br>
            If you get eliminated, you must give your code to your murder. If you fail to do this you will be banned from participating in future games.
            To eliminate your target you must tag them and say “I have the high ground”<br>
            Executive stalking is not allowed!!! If your target mistakes you for a creep and calls the cops thats you
            No matter what, DO NOT SPEAK OF THE GAME, the game will run in secret between those who are participating.
            </p>
       
    </div>
     
    <!-- Body section -->

     
    <!-- Footer Section -->

</body>
</html>