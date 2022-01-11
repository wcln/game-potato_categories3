<!DOCTYPE html>
<html>
<head>
	<title>BCLN - Quiz</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato"><!-- google web font -->
	<link rel="stylesheet" type="text/css" href="style/style.css"/>
	<link rel="shortcut icon" href="images/favicon.ico"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
	<script>

	// CHANGE THIS VARIABLE TO THE DESIRED SUB FOLDER NAME
	var SUB_FOLDER = "<?=$_GET['title']?>";
	var answers;

	$.ajax({
		url: "versions/" + SUB_FOLDER + "/answers.txt",
		success: function(data) {
			answers = data;
		}
	});

	</script>
	<script src="lib/ndgmr.Collision.js"></script>
	<script type="text/javascript" src="helper.js"></script><!-- contains helper functions which do not call functions in balloon.js -->
	<script type="text/javascript" src="potato_categories3.js"></script><!-- the main game JS file -->
</head>
<body onload="init();"><!-- body onload calls function to initialize game -->

	<canvas id="gameCanvas" width="480" height="665">
		<!-- game will be rendered here -->
	</canvas>

</body>
</html>
