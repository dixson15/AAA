<?php 

class testView extends Configuration{
	
	public function __construct(){

		$nav='<style>

 		ul {
	    list-style-type: none;
	    margin: 0;
	    padding: 0;
	    overflow: hidden;
	    background-color: #333;
	}

	li {
	    float: left;
	}

	li a {
	    display: block;
	    color: white;
	    text-align: center;
	    padding: 14px 16px;
	    text-decoration: none;
	}
	a:hover:not(.active) {
	    background-color: #111;
	}

	.active {
	background-color:#4CAF50;
	}

	</style>

	<ul>
	  <li><a class="active" href="#home">Smart Accounting</a></li>

	  <li><a href="#">Chart of Accounts</a></li>
	  <li ><a align="right" href="#">Journal</a></li>
	  <li ><a align="right" href="#">Reports</a></li>
	  <li ><a align="right" href="#">Trial Balance</a></li>
	  <li ><a align="right" href="logout.php" text-align="left">Log out</a></li>
	</ul>

 	<h3>Chart of Acounts</h3>';

 	echo $nav;


	}
}




?>