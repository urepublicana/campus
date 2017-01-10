<?php

	require_once("../php/conexion.php");

	$ShortName = "CPC2";
	$Id_CPA = "1112";
	$Nombre = "Curso_Prueba_Categoria2";
	$Id_categoria = 2;

	$ahora =  strtotime("now");

	$Formato_Semanal = "weeks";
	$Secciones = "12";
	$Secciones_Ocultas = "Invisibles";


	
	$val1 = "SELECT * FROM mdl_course WHERE shortname = '$ShortName' LIMIT 0, 1";
	$r1 = $con_moodle->query($val1);
	$cnt1 = $r1->num_rows;
	if($cnt1 == 0){

		$val2 = "SELECT * FROM mdl_course WHERE idnumber = '$Id_CPA' LIMIT 0, 1";
		$r2 = $con_moodle->query($val2);
		$cnt2 = $r2->num_rows;
		if($cnt2 == 0){

			$qr1 = "INSERT INTO mdl_course 
			(fullname,shortname,category,visible,startdate,idnumber,summaryformat,format,lang,newsitems,showgrades,
			showreports,maxbytes,enablecompletion,groupmode,groupmodeforce,defaultgroupingid,timecreated,timemodified,sortorder,summary,visibleold,cacherev) 
			VALUES( '$Nombre' , '$ShortName' ,'$Id_categoria','1','$ahora','$Id_CPA','1','weeks','','5','1','0','0','0','0','0','0','$ahora','$ahora','0','','1','$ahora')";

			$r1 = $con_moodle->query($qr1);
			$id_1 = $con_moodle->insert_id;
			echo "<br>Registro mdl_course = ".$id_1;
				if($id_1 > 0){
					$qr2= "INSERT INTO mdl_context (contextlevel,instanceid,depth,path) VALUES('50','$id_1','0',NULL)";
					$r2 = $con_moodle->query($qr2);
					$id_2 = $con_moodle->insert_id;
					echo "<br>Registro mdl_context = ".$id_2;
				}
			/*
			INSERT INTO mdl_course_format_options (courseid,format,sectionid,name,value) VALUES('8','weeks','0','numsections','12')
			INSERT INTO mdl_course_format_options (courseid,format,sectionid,name,value) VALUES('8','weeks','0','hiddensections','1')
			INSERT INTO mdl_course_format_options (courseid,format,sectionid,name,value) VALUES('8','weeks','0','coursedisplay','0')
			*/

		}else{
			echo "Error Val2 ==> ".$cnt2;
		}

	}else{
		echo "Error Val1 ==> ".$cnt1;
	}

	
?>