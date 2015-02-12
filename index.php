<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Post Rating by Mawia HL</title>
	<script LANGUAGE="JavaScript">
		function saveRating(URL, sanZawng, zauZawng) {
			eval("page" + " = window.open(URL,'', 'toolbar=0,scrollbars=0,location=0,statusbar=1,menubar=0,resizable=1,width=" + zauZawng + ",height=" + sanZawng + "');");
		}
		function ratingLakna() {
		for (var i=0; i < document.rating.num.length; i++) {
		   if (document.rating.num[i].checked) {
			  var val = document.rating.num[i].value;
			  }
		   }
		   return val;
		}
	</script>
</head>
<body>
	<form name="rating" method="get" action="rating.php" class="rating" align="center">
  	Rate this post:
  	<input name="num" class="radio" type="radio" value="1">1
  	<input name="num" class="radio" type="radio" value="2">2
 	<input name="num" class="radio" type="radio" value="3">3
 	<input name="num" class="radio" type="radio" value="4">4
 	<input name="num" class="radio" type="radio" value="5" checked>5
 	<input type="button" name="submit" value="Vote!" onClick="javascript:saveRating('/rating.php?PID=40&num=' + ratingLakna(), 30, 200)">
	<input type="hidden" name="PID" value="40">
	</form>
</body>
</html>
