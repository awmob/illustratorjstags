<?php


	function parse_lines($file_contents){
		$lines = explode(delim,$file_contents);
		return $lines;
	}


	function process_lines($line){
		$line_bits = explode(tab, $line);

		$line_set['username'] = clean(trim($line_bits[0]));
		$line_set['filename'] = clean(trim($line_bits[1]));
		$line_set['linea'] = clean(trim($line_bits[2]));
		$line_set['lineb'] = clean(trim($line_bits[3]));
		$line_set['linec'] = clean(trim($line_bits[4]));
		$line_set['lined'] = clean(trim($line_bits[5]));
		$line_set['notes'] = clean(trim($line_bits[6]));

		return $line_set;
		
	}

	function clean($segment){
		$segment = str_replace("\"","",$segment);
		return $segment;
	}

	function set_dropdowns($arr){
		$options = "";
		foreach($arr as $ar){
			if ($ar == def){
				$options .= "<option selected value='".$ar."'>".$ar."</option>";
			}
			else{
				$options .= "<option value='".$ar."'>".$ar."</option>";
			}
		}
		return $options;
	}


	function condense_lines($a, $b, $c, $d){

		$arr = Array();

		if(trim($a) != ""){
			array_push($arr, trim($a));
		}
		if(trim($b) != ""){
			array_push($arr, trim($b));
		}
		if(trim($c) != ""){
			array_push($arr, trim($c));
		}
		if(trim($d) != ""){
			array_push($arr, trim($d));
		}

		return $arr;

	}


	function folder_now(){
		$name = date('Y_m_m_his');
		$dir_name = main_dir . $name;
		mkdir(main_dir . $name);
		return $dir_name;
	}

	function make_user_folder($user_folder){
		
		if(!file_exists($user_folder)){
			mkdir($user_folder);
		}
	}

	function user_file($filename, $user_folder){
		$save_file = $user_folder . "/" . $filename;
		
		return $save_file;
	}

	function save_js($filename, $data){
		$filename = str_replace(sfx, jsfx, $filename);
		$fh = fopen($filename,'w');
		fwrite($fh, $data);
		fclose($fh);
	}



	



	/*  NOT USED
	//SAVE THE FINAL FILE
	var filenamesave = new File('/c/wamp64/www//tagtest/STEEL_BONE_ONE_SIDEsave.ai');
	newDoc.saveAs(filenamesave);

	var type = ExportType.AUTOCAD;
	var dxf_file = new File('/c/wamp64/www//tagtest/STEEL_BONE_ONE_SIDEdxfsave.dxf');
	var file_options = options_set();

	newDoc.exportFile(dxf_file, type, file_options);


	 //export test
	function options_set(){
		var exportOptions = new ExportOptionsAutoCAD();
			exportOptions.exportFileFormat = AutoCADExportFileFormat.DXF;
			exportOptions.exportOption = AutoCADExportOption.PreserveAppearance;
			exportOptions.colors = AutoCADColors.TrueColors;

		return exportOptions;
	}
	*/