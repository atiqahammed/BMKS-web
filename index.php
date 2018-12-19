<?php
	session_start();
    error_reporting(0);

    if (isset($_SESSION["user"])) {
		header("Location: dashboard.php");
    }

    include 'header_start.php';
    

?>


<body>
    
    <p>this page is under construction. :) </p>
    

</body>


</html>