<div id="LoginHeading">
<?php
		if($_SESSION["fname"] != "")
		{
			echo "<span> Welcome ".$_SESSION["fname"]." | </span>";
			echo "<a href='SignOut.php'> Sign Out </a>";
		}
		else
		{
			echo "<a href='addCustomer.php'> Sign Up |</a>";
			echo "<a href='SignIn.php'> Sign In </a>";
		}
?>
	
</div>

<header> <img src="../Images/PPTTitleNew.jpg" width="1200" height="250" alt=""/></header>

<nav>
	<ul class="topnav" id="TopNavBar">
    	<li><a href="Home.php">Home</a></li>
        <li class="dropdown">
        	<a href="#" class="dropbtn">Products</a>
          <div class="dropdown-content">
                <a href="Decks.php">Decks</a>
          </div>
		</li>
        <li class="dropdown">
       	  <a href="#" class="dropbtn">Custom Graphics</a>
          <div class="dropdown-content">
                <a href="CustomOrder.php">Order</a>
          </div>
	  </li>
         <li class="dropdown">
        	<a href="#" class="dropbtn">Customer Service</a>
            <div class="dropdown-content">
            	<a href="cart.php">Shopping Cart</a>
                <a href="FeedbackForm.php">Feedback</a>
           </div>
		</li>
        <?php 
        if($_SESSION["admin"] == 1)
		{
			echo "</li>
         			<li class='dropdown'>
        			<a href='#' class='dropbtn'>Admin</a>
            		<div class='dropdown-content'>
            			<a href='addProd.php'>Add Product</a>
           			</div>
					</li>";
		}
		?>
    </ul>
  </nav>