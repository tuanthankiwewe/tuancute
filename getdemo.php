<?php
//Creates new record as per request
    //Connect to database
    $servername = "localhost";
    $username = "id11175909_tuanstm";
    $password = "tuan87464";
    $dbname = "id11175909_quatroiquadat";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }

    //Get current date and time
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $d = date("Y-m-d");
    //echo " Date:".$d."<BR>";
    $t = date("H:i:s");
    $status=100;
    $station=10;
    if(!empty($_GET['status']) && !empty($_GET['station']))
    {
    	$status = $_GET['status'];
    	$station = $_GET['station'];

	    $sql = "INSERT INTO logs (station, status, Date, Time)
		
		VALUES ('".$station."', '".$status."', '".$d."', '".$t."')";

		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}


	$conn->close();
?>