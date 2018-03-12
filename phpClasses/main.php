<!DOCTYPE html>
<head>

	<style>
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

	.button {
	    background-color: #4CAF50; /* Green */
	    border: none;
	    color: white;
	    padding: 15px 32px;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 16px;
	    margin: 4px 2px;
	    cursor: pointer;
	}

	button.btnSubmit {
	  outline: none;
	  border: none;
	  cursor: default;
	  -webkit-transition: -webkit-box-shadow 300ms ease;
	  transition: -webkit-box-shadow 300ms ease;
	  transition: box-shadow 300ms ease;
	  transition: box-shadow 300ms ease, -webkit-box-shadow 300ms ease;
	  letter-spacing: 2px;
	  -webkit-box-shadow: 0px 0px 25px 10px rgba(255, 255, 255, 0.2);
	          box-shadow: 0px 0px 25px 10px rgba(255, 255, 255, 0.2);
	  -webkit-user-select: none;
	     -moz-user-select: none;
	      -ms-user-select: none;
	          user-select: none;
	  position: relative;
	  -webkit-box-sizing: border-box;
	          box-sizing: border-box;
	  width: 175px;
	  height: 50px;
	  border-radius: 35px;
	  border: 2px solid;
	  border-color: #1ECD97;
	  background: none;
	  color: #1ECD97;
	  -webkit-transition: all 300ms ease-out;
	  transition: all 300ms ease-out;
	}
	button.btnSubmit:hover {
	  cursor: pointer;
	  font-size: 1.05em;
	  border-color: transparent;
	  background: #1ECD97;
	  color: #fafafa;
	}
	button.btnSubmit.clicked {
	  pointer-events: none;
	  -webkit-animation: anim1 200ms cubic-bezier(0.2, 0, 0.8, 1), anim2 300ms cubic-bezier(0.6, 0, 0.7, 1) 300ms 1 forwards;
	          animation: anim1 200ms cubic-bezier(0.2, 0, 0.8, 1), anim2 300ms cubic-bezier(0.6, 0, 0.7, 1) 300ms 1 forwards;
	}
	button.btnSubmit.clicked.done {
	  display: -webkit-box;
	  display: -ms-flexbox;
	  display: flex;
	  -webkit-box-pack: center;
	      -ms-flex-pack: center;
	          justify-content: center;
	  -webkit-box-align: center;
	      -ms-flex-align: center;
	          align-items: center;
	  width: 50px;
	  background: #1ECD97;
	  background: -webkit-gradient(linear, left top, left bottom, from(0), color-stop(#1ECD97), to(#25dfa6));
	  background: linear-gradient(0, #1ECD97, #25dfa6);
	  border-width: 0;
	  border-color: rgba(30, 205, 151, 0);
	  color: rgba(30, 205, 151, 0);
	  -webkit-transition: all 1000ms ease;
	  transition: all 1000ms ease;
	  -webkit-animation: anim4 300ms cubic-bezier(0.2, 0, 0.4, 1) forwards;
	          animation: anim4 300ms cubic-bezier(0.2, 0, 0.4, 1) forwards;
	}

	input[type=text] {
    width: 70%;
    margin: 8px 0;
    padding: 15px 20px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-family: sans-serif;
    font-size: 15px;
    text-align: center;
    opacity: 0.6;
   
}

fieldset
{
    border:2px solid green;
    -moz-border-radius:8px;
    -webkit-border-radius:8px;	
    border-radius:8px;	
}
.container{
  margin: 50px auto;
  width: 640px;
}
</style>

</head>
<body>

	<ul>
	  <li><a class="active" href="#home">Smart Accounting</a></li>

	  <li><a href="#">Chart of Accounts</a></li>
	  <li ><a align="right" href="#">Journal</a></li>
	  <li ><a align="right" href="#">Reports</a></li>
	  <li ><a align="right" href="#">Trial Balance</a></li>
	</ul>

	<div class="container">
		<article align="center">
		
		</article>

	</div>

	
	<footer align="center">AppDomain copyright 2018</footer>


</body>