<?php

?>

<html>
	<head><title>test</title>
	<body>
		<form action = "controllers" method = "post">
			Title: <input type = "text" name = "title"><br>
			Description: <input type = "text" name = "description"><br>
			Category: <input type = "text" name = "Category"><br>
			Hours: <input type = "text" name = "hoursNeeded"><br>
			Team Size: <input type = "text" name = "teamSize"><br>
			<input type = "submit">
		</form>

		<form action="find" method="post">
        	Search: <input type="text" name="term" /><br />
      		<input type="submit" name="submit" value="Submit" />
      	</form>

		<button><a href = "delete">Delete Me</a></button>


	</body>
</html>