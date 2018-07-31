<?php
//FUNCION AHGREGAR ALUMNO ---------------------------------------------------
if (!$_POST["alumnos1"])
{
	
}else{
if(!$_POST["matricula1"])
{
$display="No ha agregado la matricula.";
}else{
if ($_POST["matricula1"]==$_POST["matricula2"])
{
	$matri=true;
	}else{$display="No coincide la matricula con comprobación.";}
	
}
}

	
if ($_POST["idalumno1"] and $matri and $_POST["nombre1"] and $_POST["apepat1"] and $_POST["apemat1"] and $_POST["email1"])
{
	
$id_alumno=addslashes($_POST["idalumno1"]);
$usrmatricula=addslashes($_POST["matricula1"]);
$usrnombre=addslashes($_POST["nombre1"]);
$usrapepat=addslashes($_POST["apepat1"]);
$usrapemat=addslashes($_POST["apemat1"]);
$usrgrado=addslashes($_POST["grado1"]);
$usrgrupo=addslashes($_POST["grupo1"]);
$usrmail=addslashes($_POST["email1"]);
	
	
	//consulta a base de datos el usuario y el password
	$dbconn=dbConnect();
	if (!$dbconn)
	{
		$display ="Error de conexión a la base de datos.";
		}else{
	//elegimos la base de datos --------------
	mysql_select_db(DATABASE,$dbconn);
	//consultamos a la base de datos
	$colsulta="INSERT INTO `sistema`.`usuarios` (
	`idusuarios` ,
	`usr_id` ,
	`usr_pss` ,
	`usr_nombre` ,
	`usr_apellido_mat` ,
	`usr_apellido_pat` ,
	`usr_grado` ,
	`usr_grupo` ,
	`usr_mail` ,
	`usr_fecha` ,
	`usr_matricula` ,
	`grupos_idgrupos`
	)
	VALUES (
	NULL , '".$id_alumno."', 'PSS', '".$usrnombre."', '".$usrapemat."', '".$usrapepat."', '".$usrgrado."', '".$usrgrupo."', '".$usrmail."', NOW(), '".$usrmatricula."', '1'
	);";
	//ejecutamos la consulta 
	$result = mysql_query($colsulta, $dbconn); 
		
		//Si se agregaron lso datos reportarlo al usuario y borrar las variables POST y las usadas-------------
		if ($result)
		{
			unset ($id_alumno);
			unset ($usrmatricula);
			unset ($usrnombre);
			unset ($usrapepat);
			unset ($usrapemat);
			unset ($usrgrado);
			unset ($usrgrupo);
			unset ($usrmail);

			unset ($_POST["idalumno1"]);
			unset ($_POST["matricula1"]);
			unset ($_POST["nombre1"]);
			unset ($_POST["apepat1"]);
			unset ($_POST["apemat1"]);
			unset ($_POST["grado1"]);
			unset ($_POST["grupo1"]);
			unset ($_POST["email1"]);
			unset ($_POST["matricula2"]);
			
			
			$display="Se ha agregado con éxito.";
			}else{
			$display="No se agregaron los datos.";
				}
		
		
		}
}


//AGREGAR DOCENTES A LA BASE DE DATOS --------------------------------------------------------------------------

if (!$_POST["docentes1"])
{
	
}else{
	if(!$_POST["pssdoc1"]){
		$display="Falta la contraseña.";
		}else{

	if ($_POST["pssdoc1"] == $_POST["pssdoc2"])
{
	$psscomp=true;
	$display="la confirmación es correcta.";
	}else {
		$psscomp=false;
		$display="la confirmación es incorrecta."; 
		}}
}

if ($_POST["iddoncente1"] and $psscomp and $_POST["nombredoc1"] and $_POST["apedoc1"] )
{
	$id_docente=addslashes($_POST["iddoncente1"]);
	$nombre_doc=addslashes($_POST["nombredoc1"]);
	$ape_doc=addslashes($_POST["apedoc1"]);
	$pss_doc=addslashes($_POST["pssdoc1"]);
	$meil_doc=addslashes($_POST["docmail1"]);
	$nivel_doc=addslashes($_POST["niveldoc1"]);
	

	
	//consulta a base de datos el usuario y el password
	$dbconn=dbConnect();
	if (!$dbconn)
	{
		$display ="Error de conexión a la base de datos.";
		}else{
	//elegimos la base de datos --------------
	mysql_select_db(DATABASE,$dbconn);
	//consultamos a la base de datos
	$colsulta="INSERT INTO `sistema`.`docentes` (
`iddocentes` ,
`doc_id` ,
`doc_nombre` ,
`doc_apellido` ,
`doc_email` ,
`doc_pss` ,
`doc_lvl`
)
VALUES (
NULL , '".$id_docente."', '".$nombre_doc."', '".$ape_doc."', '".$meil_doc."', '".$pss_doc."', '".$nivel_doc."'
);
";
	//ejecutamos la consulta 
	$result = mysql_query($colsulta, $dbconn); 

		
		//Si se agregaron los datos reportarlo al usuario y borrar las variables POST y las usadas-------------
		if ($result)
		{
		unset ($id_docente);
		 unset ($nombre_doc);
		 unset ($ape_doc);
		 unset ($meil_doc);
		 unset ($pss_doc); 
		 unset ($nivel_doc);
		 
		 unset ($_POST["iddoncente1"]);
		 unset ($_POST["nombredoc1"]);
		 unset ($_POST["apedoc1"]);
		 unset ($_POST["pssdoc1"]);
		 unset ($_POST["pssdoc2"]);
		 unset ($_POST["docmail1"]);
		 unset ($_POST["niveldoc1"]);

			$display="Se ha agregado con éxito.";
			}else{
			$display="No se agregaron los datos.";
				}
		
		
		}
}


// ALMACENAR EL CICLO ESCOLAR AY ESTA MENDIGO GAY ------------------------------------------------------------------------
if ($_POST["siclo1"])
{
	$inicia_mes=addslashes($_POST["inicia_mes1"]);
	$inicia_ano=addslashes($_POST["inicia_ano1"]);
    $termina_mes=addslashes($_POST["termina_mes2"]);
	$termina_ano=addslashes($_POST["termina_ano2"]);
	
	
	//consulta a base de datos el usuario y el password
	$dbconn=dbConnect();
	if (!$dbconn)
	{
		$display ="Error de conexión a la base de datos.";
		}else{
	//elegimos la base de datos --------------
	mysql_select_db(DATABASE,$dbconn);
	//consultamos a la base de datos
	$colsulta="INSERT INTO `sistema`.`siclo` (
`idsiclo` ,
`siclo_inicia_mes` ,
`siclo_inicia_ano` ,
`siclo_termina_mes` ,
`siclo_termina_ano` ,
`siclo_fecha` ,
`docentes_iddocentes`
)
VALUES (
NULL , '".$inicia_mes."', '".$inicia_ano."', '".$termina_mes."', '".$termina_ano."', NOW(), ''
);";
	//ejecutamos la consulta 
	$result = mysql_query($colsulta, $dbconn); 

		
		//Si se agregaron los datos reportarlo al usuario y borrar las variables POST y las usadas-------------
		if ($result)
		{
		unset ($_POST["inicia_mes1"]);
		unset ($_POST["inicia_ano1"]);
		unset ($_POST["termina_mes2"]);
		unset ($_POST["termina_ano2"]);
		unset ($_POST["siclo1"]);
		unset ($inicia_mes);
		unset ($inicia_ano);
		unset ($termina_mes);
		unset ($termina_ano);
		
		
		

			$display="Se ha agregado con éxito.";
			}else{
			$display="No se agregaron los datos.";
				}
		
		
		}
}



// ALMACENAR MATERIAS  ------------------------------------------------------------------------
if ($_POST["matmateria1"] and $_POST["matsemestre1"] and $_POST["materia1"] )
{
	$matmateria=addslashes($_POST["matmateria1"]);
	$matsemestre=addslashes($_POST["matsemestre1"]);
	$matdocent=addslashes($_POST["listDocente1"]);
	$matsiclo=addslashes($_POST["listSiclo1"]);
	$matdocente_num=addslashes($_POST["listDocente1"]);
	

//-------------------------------------------------------------------------------------------
//buscamos el nombre del docente



//consulta a base de datos el usuario y el password
	$dbconn=dbConnect();
	if (!$dbconn)
	{
		$displayusr ="Error de conexión a la base de datos.";
		}else{
	//elegimos la base de datos --------------
	mysql_select_db(DATABASE,$dbconn);
	//consultamos a la base de datos
	$colsulta="SELECT * FROM `docentes` WHERE `iddocentes`='".$matdocent."';";
	//ejecutamos la consulta 
	$result = mysql_query($colsulta, $dbconn); 
	//resultado de consulta
	if (!$result)
	{
		}else{
			
	 $row = mysql_fetch_array($result);
	 
	 	$doc_idnum_BD = $row["iddocentes"]; 
		$doc_id_BD = $row["doc_id"]; 
		$doc_nom_BD = $row["doc_nombre"]; 
		$doc_apepat_BD = $row["doc_apellido"]; 
		$doc_pss_DB = $row["doc_pss"]; 
		$doc_lvl_DB = $row["doc_lvl"]; 
		$nom_doc= $doc_nom_BD." ".$doc_apepat_BD;
		}}
//-----------------------------------------------------------------
	//consulta a base de datos el usuario y el password
	$dbconn=dbConnect();
	if (!$dbconn)
	{
		$display ="Error de conexión a la base de datos.";
		}else{
	//elegimos la base de datos --------------
	mysql_select_db(DATABASE,$dbconn);
	//consultamos a la base de datos
	$colsulta="INSERT INTO `sistema`.`materias` (
`idmaterias` ,
`docentes_iddocentes` ,
`mat_materia` ,
`mat_semestre` ,
`mat_docente` ,
`siclo_idsiclo` ,
`grupos_idgrupos` ,
`grupos_docentes_iddocentes` ,
`grupos_materias_idmaterias` ,
`grupos_materias_docentes_iddocentes` ,
`grupos_siclo_idsiclo`
)
VALUES (
NULL , '".$doc_idnum_BD."', '".$matmateria."', '".$matsemestre."', '".$nom_doc."', '".$matsiclo."', '1', '1', '1', '1', '');";
	//ejecutamos la consulta 
	$result = mysql_query($colsulta, $dbconn); 

		
		//Si se agregaron los datos reportarlo al usuario y borrar las variables POST y las usadas-------------
		if ($result)
		{
		unset ($_POST["inicia_mes1"]);
 
		unset ($termina_ano);
		
		
		

			$display="Se ha agregado con éxito.";
			}else{
			$display="No se agregaron los datos.";
				}
		
		
		}
}


//ALMACENAR ASISTENCIA EN LA BASE DE DATOS ----------------------------------------------------------------------------
if ($_POST["asistencia1"])
{
	$asis_materia=$_GET["mat1"];
	$asis_doc=$_SESSION["idnum"];

	foreach ($_POST as $id_usuario_asis=>$valor)
	{
		if ($id_usuario_asis=="asistencia1")
		{
		}else{
		//echo "el numero ".$asis_usuario." el valor ".$valor."<br>";
//--------------------------------------------------------------------------------
//Comprobar datos del usuarios


	
//----------------------------------------------------------------------------------	
			
	//consulta a base de datos el usuario y el password
	$dbconn=dbConnect();
	if (!$dbconn)
	{
		$display ="Error de conexión a la base de datos.";
		}else{
	//elegimos la base de datos --------------
	mysql_select_db(DATABASE,$dbconn);
	//consultamos a la base de datos
	$colsulta="INSERT INTO `sistema`.`asistencia` (
`idasistencia` ,
`asis_docente` ,
`asis_asistencia` ,
`asis_usrnom` ,
`asis_usrap` ,
`asis_fecha` ,
`usuarios_idusuarios` ,
`usuarios_grupos_idgrupos` ,
`siclo_idsiclo` ,
`docentes_iddocentes` ,
`materias_idmaterias` ,
`materias_docentes_iddocentes` ,
`materias_siclo_idsiclo`
)
VALUES (
NULL , 'docente', '".$valor."', '".$asis_usuario."', '".$asis_ape_pat." ".$asis_ape_mat."', NOW(), '".$id_usuario_asis."', '1', '1', '".$asis_doc."', '".$asis_materia."', '1', '1');";

	//ejecutamos la consulta 
	$result = mysql_query($colsulta, $dbconn); 

		
		//Si se agregaron los datos reportarlo al usuario y borrar las variables POST y las usadas-------------
		if ($result)
		{
		unset ($_POST["$_POST"]);

		

			$display="Se ha agregado con éxito.";
			}else{
			$display="No se agregaron los datos.";
				}
		
		
		}
		
		
		
		}
			
			
}}








?>