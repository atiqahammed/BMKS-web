<?php
	session_start();
    error_reporting(0);

    if (isset($_SESSION["user"])) {
		header("Location: dashboard.php");
    }

    echo "I am here";
    //include("start_header.php");

?>












	
	<title>Bohail Manob Kalyan Songstha</title>
</head>






<body>
    
    <p>this page is under construction. :) </p>
    

</body>





</html>