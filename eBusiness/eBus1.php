<!DOCTYPEhtml>
	<html>
	    <head>
	        <title>Select Product</title>
	        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	        <script type = "text/javascript" src ="cost_calc.js"></script>
	        <!--Adding style-->
	        <style type = "text/css">
h1 {
    color: White;
    font-family: "times new roman" Times, Serif;
    font-size: 250%;
    top:10em;
	left:25em;
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
	        #maincontent {
	                        top:13em;
	                        left:25em;
	                        width:30em;
	                        height:30em;
	                        position:absolute;
	                        border-style:groove;
	        }
	        #button1 {
	            top:24em;
	            left:3em;
	            position:absolute;
	        }
	        #button2 {
	            top:24em;
	            left:13em;
	            position:absolute;
	        }
	        #button3 {
	            top:26em;
	            left:9em;
	            position: absolute;
	        }
	       
	        input[type=text] {
	                           border: 2px solid black;
	                           border-radius: 4px;
	                           text-align:center;
	}
	       button[type=submit]:disabled {
	                           background-color: grey;
	                           border-radius: 2px;
	                           border:none;
	                           color: black;
	                           padding: 5px;
	                           cursor: pointer;
	                           
	       }
	       button[type=submit]:enabled {
	                          color: black;
	       }
	       button {
	            
	                           border-radius: 2px;
	                           border:none;
	                           color: black;
	                           padding: 5px;
	                           cursor: pointer;
	       }
	       button:hover {
	           color:black;
	       }
	       
	       
	        </style>
	    </head>
	    <body>
	        <!--Adding a heading-->
	         <h1 style="background-color:#34495E;"  class="mainheading" > Select A Product </h1>
        
     <!--Adding the nav bar-->
      <ul>
<div class="container">
                <ul>
                   <li><a href="CV/cv_Page1.html" class="curriculum">Curriculum Vitae</a></li>
                   <li><a href="interests/sports.html">Interests</a></li>
                   <li><a href="eBus1.php">Ebusiness</a></li>
                   <li><a href="https://github.com/aliolden/IS1113Project" class="btn btn-dark">Github</a><li/>
                </ul>
	        
	           <!--Putting in radio buttons-->
	        <div id ="maincontent">
	        <form method ="POST" action ="eBus2.php">
	            <label for = "salesforce">
	            &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="salesforce" name="product"  onClick="disablebtnProceed()"/>
	            Salesforce @ $100
	            </label>
	            <br/><br>
	            <label for ="cloud9">
	               &nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" id ="cloud9" name = "product" onClick = "disablebtnProceed()"/>
	                Cloud 9 @ $200
	            </label>
	            <br><br>
	            <label for= "aws">
	             &nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" id="aws" name="product" onClick="disablebtnProceed()"/>
	                Amazon Web Services @ $300
	            </label>
	            <br><br>
	            <label for ="Gmail">
	              &nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" id ="Gmail" name = "product" onClick = "disablebtnProceed()"/>
	                Gmail @ $400
	            </label>
	            
	            <br><br><br>
	            <!--Putting in buttons-->
	            <label for ="subtotal">
	            <Strong> &nbsp;  Sub Total:</Strong> 
	              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" id="subtotal" name="subtotal" value="0.00" readonly/>
	            </label>
	            <br><br>
	            <label for = "discount">
	                <strong>&nbsp; Discount @ 5%:</strong>
	                <input type = "text" id ="discount" name ="discount" readonly/>
	            </label>
	            <br><br>
	            <label for ="vat">
	                <strong>&nbsp; Vat @ 10%:</strong>
	               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type = "text" id ="vat" name ="vat" readonly />
	            </label>
	            
	            <br><br>
	            
	            <label for ="total">
	             <strong>  &nbsp; Total:</strong> 
	              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type ="text" id="total" name = "total" value="0.00" readonly/>
	            </label>
	            
	            <br><br>
	            <div id ="button1">
	            <button type = "submit" id="btnProceed" disable>Add to Shopping Cart</button>
	            </div>
	            </form> 
	            <!--Adding button that calculates the cost-->
	            <div id ="button2">
	          <button onClick="calcSub();calcDisVatTotal()">Calculate Cost</button>
	          </div>
	          
	       
	        
	        <br/>
	        <!--Button clears page--> 
	        <div id ="button3">
	        <a href="eBus1.php"><button>Clear Choice</a></button>
	           <a href="eBus2.php" class="btn btn-dark">Next</a>
	        </div>
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
       <br/>
       <br/>
       <br/>
       </body>
       </html>