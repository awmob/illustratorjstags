<?php
	

	const tab = "	";
	const nl = "\r\n";
	const sfx = ".ai";
	const jsfx = ".js";
	const main_dir = "orders/";
	const not_set = "0_NONE_0";

	const root_dir = "/c/wamp64/www/tag_creator/";

	const tags_dir = root_dir . "ai/";
	const icons_dir = root_dir . "icons/";
	

	$icons[0] = "paw";
	$icons[1] = "bone";
	$icons[2] = "heart";
	$icons[3] = "sun";
	$icons[4] = "star";
	$icons[5] = "cat_ears";
	$icons[6] = "phone";
	$icons[7] = "shield";
	$icons[8] = "flower";
	$icons[9] = "music";
	$icons[10] = "crown";
	$icons[11] = "clover";
	$icons[12] = "lightning";
	$icons[13] = "snowflake";
	$icons[14] = "0_NONE_0";

	sort($icons);
	
	$tag_types[0] = "BONE_L";
	$tag_types[1] = "BONE_M";
	$tag_types[2] = "PAW_L";
	$tag_types[3] = "PAW_M";
	$tag_types[4] = "BONE_XL";
	$tag_types[5] = "HEART_L";
	$tag_types[6] = "HEART_S";
	$tag_types[7] = "CAT_M";
	$tag_types[8] = "CAT_L";
	$tag_types[9] = "CIRCLE_L";
	$tag_types[10] = "SLIDER_L";
	$tag_types[11] = "SLIDER_M";

	sort($tag_types);



	$font_names[0] ="ArialMT";
	$font_names[1] ="Arial-BoldMT";
	$font_names[2] ="Arial-Black";
	$font_names[3] ="Calibri";
	$font_names[4] ="Calibri-Bold";
	$font_names[5] ="Centaur";
	$font_names[6] ="CenturyGothic";
	$font_names[7] ="CenturyGothic-Bold";
	$font_names[8] ="Channel";
	$font_names[9] ="ComicSansMS";
	$font_names[10] ="ComicSansMS-Bold";
	$font_names[11] ="CooperBlackStd";
	$font_names[12] ="CopperplateGothic-Bold";
	$font_names[13] ="CopperplateGothic-Light";
	$font_names[14] ="MonotypeCorsiva";
	$font_names[15] ="EdwardianScriptITC";
	$font_names[16] ="ForteMT";
	$font_names[17] ="FreestyleScript-Regular";
	$font_names[18] ="FrenchScriptMT";
	$font_names[19] ="HighlandGothicLightFLF";
	$font_names[20] ="HoboStd";
	$font_names[21] ="Impact";
	$font_names[22] ="KomikaAxis";
	$font_names[23] ="KristenITC-Regular";
	$font_names[24] ="LucidaCalligraphy-Italic";
	$font_names[25] ="MVBoli";
	$font_names[26] ="Peignot";
	$font_names[27] ="SegoeScript";
	$font_names[28] ="SegoePrint-Bold";
	$font_names[29] ="SegoePrint";
	$font_names[30] ="TimesNewRomanPSMT";
	$font_names[31] ="KozMinPr6N-Regular";
	$font_names[32] ="WaltographUI-Bold";

	sort($font_names);



	//specific_values
	
	
	$spec_vals['BONE_L']['symb_x'] = 86;
	$spec_vals['BONE_L']['symb_y'] = -14;
	$spec_vals['BONE_L']['text_x'] = 16;
	$spec_vals['BONE_L']['text_y'] = -21;
	$spec_vals['BONE_L']['text_width'] = 73;
	$spec_vals['BONE_L']['paw_symbol_width'] = 12;
	$spec_vals['BONE_L']['bone_symbol_width'] = 18;

	$spec_vals['BONE_M']['symb_x'] = 74;
	$spec_vals['BONE_M']['symb_y'] = -11;
	$spec_vals['BONE_M']['text_x'] = 12;
	$spec_vals['BONE_M']['text_y'] = -20;
	$spec_vals['BONE_M']['text_width'] = 65;
	$spec_vals['BONE_M']['paw_symbol_width'] = 9;
	$spec_vals['BONE_M']['bone_symbol_width'] = 15;


	$spec_vals['PAW_L']['symb_x'] = 39;
	$spec_vals['PAW_L']['symb_y'] = false;
	$spec_vals['PAW_L']['text_x'] = 13;
	$spec_vals['PAW_L']['text_y'] = -29;
	$spec_vals['PAW_L']['text_width'] = 64;
	$spec_vals['PAW_L']['paw_symbol_width'] = 14;
	$spec_vals['PAW_L']['bone_symbol_width'] = 24;

	