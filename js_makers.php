<?php


	function common_js_maker($icon, $font, $lines, $tag_type, $ai_file_name_save, $spec_vals, $user_folder){

		$js = "///////INITIALIZE ///////////" . nl . nl;

		$js .= "var filename = new File('" . tags_dir . $tag_type . sfx . "');"  . nl;
		$js .= "var newDoc = app.open(filename);"  . nl;


		//TEXT - if the sym x is false then goes after first line, otherwise goes in corner
		
		$js .= "var y_track = " . $spec_vals[$tag_type]['text_y'] . ";";
		$js .= "var x = " . $spec_vals[$tag_type]['text_x'] . ";";

		$js .= "var font_name = '".$font."';"  . nl;

		$js .= "var txt_width = ". $spec_vals[$tag_type]['text_width'] .";"  . nl;



		if($icon == "bone"){
			$symb_width = $spec_vals[$tag_type]['bone_symbol_width'];
		}
		else{
			$symb_width = $spec_vals[$tag_type]['paw_symbol_width'];
		}

		for ($i = 0; $i < sizeof($lines); $i++){
			$js .= "///////NEW  TEXT ITERATION ///////////" . nl . nl;
			//loop through lines. add symbol after 2nd line

			$js .= "var textRef".$i." = newDoc.textFrames.add();"  . nl;

			$js .= "textRef".$i.".contents = '".$lines[$i]."';"  . nl;
			$js .= "textRef".$i.".textRange.characterAttributes.textFont = textFonts.getByName(font_name);"  . nl;

			$js .= "redraw();"  . nl;

			$js .= "textRef".$i.".top = y_track;"  . nl;
			$js .= "textRef".$i.".left = x;"  . nl;

			$js .= "var txt_height = height_ratio_get(textRef".$i.", txt_width);"  . nl;

			$js .= "textRef".$i.".width = txt_width;"  . nl;
			$js .= "textRef".$i.".height = txt_height;"  . nl;


			$js .= "y_track -= (txt_height - 2);"  . nl;

			//add symbol only on second iteration and only if not a bone ie. if symbol y is false
			if(!$spec_vals[$tag_type]['symb_y'] && $i == 0 && $icon != not_set){

				$js .= "///////ENTERING INLINE ICON ///////////" . nl . nl;
				//track x
				$js .= "var symb_width = ".$symb_width.";"  . nl;

				$js .= "var x_tmp_symb = (textRef".$i.".width / 2) - (symb_width / 2) + x;";

				$js .= "var symbolname = new File('" . icons_dir . $icon . sfx ."');"  . nl;
				$js .= "var symbolDoc = app.open(symbolname);"  . nl;
				$js .= "symbolDoc.pageItems[0].selected = true;"  . nl;	
				
				$js .= "app.copy();"  . nl;
				$js .= "newDoc.activate();"  . nl;
				$js .= "app.paste();"  . nl;

				$js .= "newDoc.pageItems[0].left = 0;"  . nl;
				
				$js .= "var height = height_ratio_get(newDoc.pageItems[0], symb_width);"  . nl;

				$js .= "newDoc.pageItems[0].width = symb_width;"  . nl;
				$js .= "newDoc.pageItems[0].height = height;"  . nl;

				$js .= "newDoc.pageItems[0].top = y_track;"  . nl;

				$js .= "newDoc.pageItems[0].left = x_tmp_symb;"  . nl;

				$js .= "redraw();"  . nl;

				$js .= "newDoc.pageItems[0].selected = false;"  . nl;

				$js .= "y_track -= (height + 1);"  . nl;

				$js .= "///////END INLINE ICON ///////////" . nl . nl;

			}	
			//end for

		}


		//ICON
		$js .= "///////ENTERING CORNER ICON ///////////" . nl . nl;
		if ($spec_vals[$tag_type]['symb_y'] && $icon != not_set){
			$js .= "var symbolname = new File('" . icons_dir . $icon . sfx ."');"  . nl;
			$js .= "var symbolDoc = app.open(symbolname);"  . nl;
			$js .= "symbolDoc.pageItems[0].selected = true;"  . nl;

			$js .= "app.copy();"  . nl;
			$js .= "newDoc.activate();"  . nl;
			$js .= "app.paste();"  . nl;

			$js .= "newDoc.pageItems[0].left = 0;"  . nl;

			$js .= "var symb_width = ".$symb_width.";"  . nl;
			$js .= "var height = height_ratio_get(newDoc.pageItems[0], symb_width);"  . nl;

			$js .= "newDoc.pageItems[0].width = symb_width;"  . nl;
			$js .= "newDoc.pageItems[0].height = height;"  . nl;
			$js .= "newDoc.pageItems[0].top = ".$spec_vals[$tag_type]['symb_y'].";"  . nl;
			$js .= "newDoc.pageItems[0].left = ".$spec_vals[$tag_type]['symb_x'].";"  . nl;

			$js .= "redraw();"  . nl;

			$js .= "newDoc.pageItems[0].selected = false;"  . nl;
		}

		$js .= "///////END CORNER ICON ///////////" . nl . nl;
		
		//constrained height function
		$js .= "function height_ratio_get(item, new_width){"  . nl;
		$js .= tab . "var ratio = item.width / item.height;"  . nl;
		$js .= tab . "var height = new_width / ratio;"  . nl;
		$js .= tab . "return height;"  . nl;
		$js .= "}"  . nl;

		return $js;
	}



	