<?php
	// start the session
	session_start();
	?>
	

	<html>
	    <head>
	        <title> Enter Details</title>
	        
	        <!--jQuery-->
	        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	        <!--Adding style-->
	         <style type = "text/css">
	             #maincontent {
	                  top:12em;
	                  left:25em;
	                  width:30em;
	                  height:25em;
	                  position:absolute;
	                  border-style:ridge;
	             }
	 
	h1 {
    color: White;
    font-family: "Times New Roman", Times, serif;
    font-size: 250%;
  	text-align:center;
}  
div {
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
	
	input[type=text] {
	                           border: 2px solid blue;
	                           border-radius: 4px;
	                           text-align:center;
	}
	input[type=password] {
	                           border: 2px solid blue ;
	                           border-radius: 4px;
	                           text-align:center;
	}
	 button[type=submit]:disabled {
	                           border: 2px solid blue;
	                           border-radius: 4px;
	                           color: black;
	                           padding: 5px;
	                           cursor: pointer;
	                           
	       }
	        button[type=submit]:enabled {
	                           background-color:#34495E;
	                           border-radius: 2px;
	                           border:none;
	                           color: black;
	                           padding: 5px;
	                           cursor: pointer;
	                           
	       }
	         </style>
	         
	         
	         
	         </head>
	    </head>
	    <body>
	        
	       <!--Adding a heading--> 
	     <h1 align = "center" style="background-color:#34495E;"  class="mainheading" > Please Enter Your Details </h1>
        
        
     <!--Adding the nav bar-->
<div class="container">
                <ul>
                   <li><a href="CV/cv_Page1.html" class="curriculum">Curriculum Vitae</a></li>
                   <li><a href="interests/sports.html">Interests</a></li>
                   <li><a href="eBusiness/eBus1.php">Ebusiness</a></li>
                   <li><a href="https://github.com/aliolden/IS1113Project" class="btn btn-dark">Github</a><li/>
                </ul>
	        
	   
	        <div id ="maincontent">
            <form   method="POST" action="eBus3.html">
	                    <br>
	                    <label for = "name">
	                        <strong> &nbsp; Name:</strong>
	                        <br>
	                        &nbsp;<input type ="text" id ="name" name = "name"/>
	                    </label>
	                    <br><br>
	                    <label for "email">
	                        <strong>&nbsp; Email:</strong>
	                        <br>
	                        &nbsp;<input type = "text" id ="email" name="email"/>
	                    </label>
	                    <br><br>
	                    &nbsp;&nbsp;<label for="user_pin"><strong>PIN:</strong></label>
	                    <br>
	                   &nbsp;<input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
	                    <br><br><br>
	                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
	              
	            </form>
	            
	            <br>
	            <button onClick="validateDetails()">Validate</button>
	            
	        </div>
	        
	        <script type="text/javascript" src="eBus2_validator.js"></script>
	        
	        <?php
	        //Set session variables
	        $_SESSION["total"] = $_POST["total"];
	        $_SESSION["name"] = $_POST["name"];
	         $_SESSION["email"] = $_POST["email"];
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

      
	    </body>
	</html>