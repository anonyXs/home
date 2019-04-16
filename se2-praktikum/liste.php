<?php

?>

<html>

	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>SE2 - Liste</title>
		<link rel="shortcut icon" href="https://library.ust.hk/wp-content/uploads/2016/10/SE-icon.png" type="image/png" />
		<link rel="icon" href="https://library.ust.hk/wp-content/uploads/2016/10/SE-icon.png" type="image/png" />
	</head>

	
	<script>
		function addList() {
			var list_min = 0;
			var list_max = 10;
			var border_radius = 15;
			
			for (i=list_min; i<list_max; i++) {
				
				document.write("<li style='border-radius: " + (i == list_min ? border_radius : 0) + "px " + (i == list_min ? border_radius : 0) + "px " + (i == list_max-1 ? border_radius : 0) + "px " + (i == list_max-1 ? border_radius : 0) + "px;' class='listItem'>" +
					"<div id='listItemFrame'>" +
						"<div class='listItemHeader'>" +
							"<b>anonyXs</b> @admin Mo 08. April 2019</br>" +
						"</div>" +
						"<div class='listItemBody'>" +
							"Wow, das ist ja eine coole Liste!" +
						"</div>" +
					"</div>" +
				"</li>");
			}
		}
	</script>
	
	
	<body>
	
		<div id="main">
		
			<div id="headline">
				Nachrichten
			</div>
		
			<hr color="#555">
		
			<ul id="list">
				<script>addList();</script>			
			</ul>
			
		</div>
	
	
	</body>

</html>
