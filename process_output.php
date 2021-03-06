<!DOCTYPE html>
<html>

	<head>
		<title>TAG CREATOR</title>

		<link rel="stylesheet" type="text/css" href="main.css">
	</head>



	<body>
		<h1 class="tester">Tag Creator</h1>
		<h2>Step 3: Process Inputs</h2>
		
		<p>
			<?php

				// Check if image file is a actual image or fake image
				if(isset($_POST["submit"])) {
					require_once "config.php";
					require_once "functions.php";
					require_once "js_makers.php";

					//create folder with today
					$cur_folder = folder_now();


					// vars - username,  filename,  tag_type,  icon, font_name, linea thru d

					for($i=0;$i<sizeof($_POST['username']);$i++){

						$main_file_name = $_POST['filename'][$i] . sfx;
						

						$user_strip = str_replace("*","",$_POST['username'][$i]);

						$user_folder = $cur_folder . "/" . $user_strip;
						make_user_folder($user_folder);

						
						$lines = condense_lines($_POST['linea'][$i], $_POST['lineb'][$i], $_POST['linec'][$i], $_POST['lined'][$i]);

						//make filename
						$final_file = user_file($main_file_name, $user_folder);

						$offsets = offsets($_POST['font_name'][$i], $font_names);
						

						//call the js makers
						$js_data = common_js_maker($_POST['icon'][$i], $_POST['font_name'][$i], $lines, $_POST['tag_type'][$i], $final_file, $spec_vals, $user_folder, $main_file_name, $offsets);

						//save the js
						save_js($final_file, $js_data);


					}

				}

					
				else{
					echo "No data submitted.";
				}
			?>
		</p>

		
	</body>

</html>