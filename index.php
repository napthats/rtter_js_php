<?php
session_start();
?>
<html>
<head>
<title>Twitter OAuth via popup</title>
</head>
<body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="jquery.oauthpopup.js"></script>
<script>
$(document).ready(function(){
		    $('#connect').click(function(){
					  $.oauthpopup({
					    path: 'connect.php',
						callback: function(){
						window.location.reload();
					      }
					    });
					});
		    $('#alert').click(function(){
					alert($('#contents').text());
					});
		  });
</script>
<div id="contents"><?php
print_r($_SESSION);
?></div>
<input type="button" value="Connect with Twitter" id="connect" /><br />
<input type="button" value="alert!" id="alert" /><br />
<a href="signout.php">Sign Out</a>
</body>
</html>
