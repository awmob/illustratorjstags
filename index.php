<!DOCTYPE html>

<html>

	<head>
		<title>TAG CREATOR</title>
	</head>



	<body>
		<h1>Tag Creator</h1>
		<h2>Step 1: Upload CSV</h2>
	
		<p>Tab delimited with the following fields (do not include headers):</p>
		<p><ol><li>username</li><li>filename_save</li><li>line</li><li>line</li><li>line</li><li>line</li><li>notes</li></ol></p>
		<p>First <i>line</i> field must not be blank, but remaining <i>line</i> fields may be blank.</p>


		<form method="POST" action="process_import.php" enctype="multipart/form-data">

			<input type="file" name="csv_file">

			<br>
			<br>
			
			<input type="submit" value="Process CSV" name="submit">
		</form>
	</body>

</html>