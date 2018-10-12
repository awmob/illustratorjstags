<!DOCTYPE html>
<html>

	<head>
		<title>TAG CREATOR</title>

		<link rel="stylesheet" type="text/css" href="main.css">
	</head>



	<body>
		<h1 class="tester">Tag Creator</h1>
		<h2>Step 2: Process CSV</h2>
		
		<p>
			<?php

				// Check if image file is a actual image or fake image
				if(isset($_POST["submit"]) && $_FILES["csv_file"]["tmp_name"]) {
					
					require "config.php";
					require "functions.php";

					$check = $_FILES["csv_file"]["tmp_name"];
					
					//no error handling yet
					$file_contents = file_get_contents($check);
					
					$lines = parse_lines($file_contents);

					echo "<form method = 'POST' action='process_output.php'>";

						echo "<table>";

						foreach($lines as $ln){

							echo "<tr>";

								$line_arr = process_lines($ln);

								echo "<td>";
								
									echo "Username: <input type='text' name='username[]' value='".$line_arr['username']."' size='12'>";

									echo "&nbsp;";

									echo "Filename: <input type='text' name='filename[]' value='".$line_arr['filename']."' size='30'>";

								echo "</td>";

								
								echo "<td>";
								
									echo "<select name='tag_type[]'>";
									echo set_dropdowns($tag_types);
									echo "</select>";

									echo "<br>";

									echo "<select name='icon[]'>";
									echo set_dropdowns($icons);
									echo "</select>";

									echo "<br>";

									echo "<select name='font_name[]'>";
									echo set_dropdowns($font_names_show);
									echo "</select>";

									
									echo "&nbsp;";
								
								echo "</td>";

								echo "<td>";

									echo "<textarea cols='20' rows='5'>".$line_arr['notes']."</textarea>";


								echo "</td>";

								echo "<td>";

									echo "Lines 1 to 4:<br>";
									
									echo "<input type='text' name='linea[]' value='".$line_arr['linea']."' size='12'>";

									echo " <input type='text' name='lineb[]' value='".$line_arr['lineb']."' size='12'>";

									echo " <input type='text' name='linec[]' value='".$line_arr['linec']."' size='12'>";

									echo " <input type='text' name='lined[]' value='".$line_arr['lined']."' size='12'>";


								echo "</td>";
							echo "</tr>";

							
							
						}

						echo "<tr><td colspan='4' align='center'><input type='submit' id='subme' value='Submit' name='submit'</td></tr>";

						echo "</table>";

					echo "</form>";
					
				}
				else{
					echo "No file uploaded.";
				}
			?>
		</p>

		
	</body>

</html>