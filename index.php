<?php
	session_start();
    error_reporting(0);

    if (isset($_SESSION["user"])) {
		header("Location: dashboard.php");
    }

    include 'header_start.php';
    

?>


<body>
    
    <nav class="menu">
    	<header>Menu <span>X</span></header>
    	<ol>
    		<ol class="menu-item"><a href="#">home1</a></ol>
    		<ol class="menu-item"><a href="#">home2</a></ol>
    		<ol class="menu-item"><a href="#">home3</a>
    			<ol class="sub-menu"><a href="">sb1</a></ol>
    		</ol>
    		<ol class="menu-item"><a href="#">home4</a></ol>
    	</ol>
    </nav>




    <p>this page is under construction. :) </p>
    

</body>


</html>