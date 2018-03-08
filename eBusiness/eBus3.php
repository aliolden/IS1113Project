<?php
session_start();
$name = $_REQUEST['name'];
$email =$_REQUEST['email'];
?>
	<html>
	    <head>
	        <title>RECEIPT</title>
	        <!--Adding style-->
	             <style type = "text/css">
h1 {
    color: White
    font-family: "Times New Roman", Times, serif ;
    font-size: 250%;
    top:10em;
	left:25em;
	text-align:center;
}
p {
   text-align:center;
}

ul li a{
  text-decoration:none;
  margin: 20px;
  
  color:white;
  
  
}

ul li a:hover{
  background: white;
  padding:2%;
  color:black;
}

ul li {
  list-style:none;
   display:inline;
  position:relative;
  top:30%;

  
}

ul{
  background: #34495E;
  width:100%;
  height:10%;
  position:absolute;
  
}
.container{
    text-align: center;
}



a{
    text-decoration: none;
    color:black;
    margin:5%;
}
	    #mainContent {
	        top:12em;
	        left:25em;
	        width:30em;
	        height:25em;
	       position:absolute;
	       border-style:groove;
	                 }
	             </style>
	         </head>
	    </head>
	    <body>
	        <!--Adding a heading-->
	       <h1 style="background-color:#34495E;"  class="mainheading" > Your purchase reciept </h1>
        
        
     <!--Adding the nav bar-->
<div class="container">
                <ul>
                   <li><a href="CV/cv_Page1.html" class="curriculum">Curriculum Vitae</a></li>
                   <li><a href="interests/sports.html">Interests</a></li>
                   <li><a href="eBusiness/eBus1.php">Ebusiness</a></li>
                   <li><a href="https://github.com/aliolden/IS1113Project" class="btn btn-dark">Github</a><li/>
                </ul>
	        <br/>
	       
	     
	      <div id = "mainContent">
        <?php
        //Echo session varaibles that were set to the previous page
        echo("<strong>Name: </strong>". $name);
        echo("<br><br><strong>Email: </strong>". $email);
        echo "<br><br><strong>Total Price is $</strong>" .$_SESSION["total"] . "."; 
        ?>

        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        
<br/>
<br/>
<p> Thank you for choosing AO Technologies.
<br/>
<br/>
<a href = "../homepage.html" class = "btn btn-dark">  Back To Home.</a>

</p>
        </div>
        
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>

	</html>