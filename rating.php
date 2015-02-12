<?php
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'HRIATLOH';
    return $ipaddress;
}

$rating=htmlspecialchars(intval($_GET['num']));
$post=htmlspecialchars(intval($_GET['PID']));
$clientip = get_client_ip();
$servername = "localhost";
$username = "root";
$password = "yourpass";
$dbname = "rating";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection buai nasa mai: " . $conn->connect_error);
}
$sql = "SELECT * FROM ratingzirna WHERE INET_NTOA(chhinchhiahna)='$clientip' AND pid='$post'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   		echo "You have already rated.";
} else {
	$rated = "INSERT INTO ratingzirna (id, pid, rating, hunlehni, chhinchhiahna)	
				VALUES (null, $post, $rating, NOW(), '".ip2long($clientip)."')";

				if ($conn->query($rated) === TRUE) {
    				echo "Thanks for rating this post.";
				} else {
    				echo "Buaina: " . $rated . "<br>" . $conn->error;
				}
  	}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thanks</title>
	<style>
		.footer {
			font-size: 0.9em;
			background-color: #333333;
			color: #FFFFFF;
			padding: 4px;			
			border-top-width: 1px;
			border-top-style: solid;
			border-top-color: #CCCCCC;
		}
	</style>
</head>
<body>
<div class="footer" align="center"><a href="" onclick="javascript:window.close(this)" style="color: #FFFFFF">Close Window [X]</a></div>
</body>
</html>
