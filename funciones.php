<?php 
//Conexion a la base de datos -----------------------------------------------------------
function dbConnect()
{
		// la @ evita que sea publicado el error en pantalla
	//@ $db_conn = mysql_connect("localhost", "fabian.forte", "fabian1");
	$db_conn = mysqli_connect(REDDB, USERDB, PSSDB);
	if (!$db_conn)
	{ $display ="no hubo conección"; }
	else
	{//echo "Coneccion  exitosa";
	return $db_conn;
	}
}


// recivimos las variables de inicio de sesion por metodo POST , sin una variable ya no sirve.

if ($_POST["iduser1"] && $_POST["idpss1"])
{	

	$idUsuario=addslashes($_POST["iduser1"]);
	$pssUsuario=addslashes($_POST["idpss1"]);
	
	//consulta a base de datos el usuario y el password
	$dbconn=dbConnect();
	if (!$dbconn)
	{
		$displayusr ="Error de conexión a la base de datos.";
		}else{
	//elegimos la base de datos --------------
	mysql_select_db(DATABASE,$dbconn);
	//consultamos a la base de datos
	$colsulta="SELECT * FROM `usuarios` 
	WHERE `usr_id`='".$idUsuario."';";
	//ejecutamos la consulta 
	$result = mysql_query($colsulta, $dbconn); 
	//resultado de consulta
	 $row = mysql_fetch_array($result);
	 	$usr_idnum_BD = $row["idusuarios"]; 
		$usr_id_BD = $row["usr_id"]; 
		$usr_nom_BD = $row["usr_nombre"]; 
		$usr_apepat_BD = $row["usr_apellido_pat"]; 
		$usr_pss_DB = $row["usr_pss"]; 
		$usr_matri_DB = $row["usr_matricula"]; 
		$usr_grad_DB = $row["usr_grado"]; 
		$usr_grup_DB = $row["usr_grupo"]; 
		
		}
	
	
	//comprobamos si la varibale iduser es igual a una existente
	if ($idUsuario==$usr_id_BD)
	{
//comprobamos si la varibale idpss  es igual a una existente
		if ($pssUsuario==$usr_matri_DB)
		{	
			$_SESSION["idnum"]=$usr_idnum_BD;
			$_SESSION["userid"]=$usr_id_BD;
			$_SESSION["usernom"]=$usr_nom_BD;
			$_SESSION["apepat"]=$usr_apepat_BD;
			$_SESSION["usergrado"]=$usr_grad_DB;
			$_SESSION["apegrupo"]=$usr_grup_DB;
			
			
			$displayusr="Inicio con ëxito";
			//echo $display;
			}else{
				$displayusr="Error de Password";
				//echo $display;
				}
		
		unset ($_POST["iduser1"]);
		unset ($_POST["idpss1"]);
		
		unset ($idUsuario);
		unset ($pssUsuario);
		
		
	}else{$displayusr="Error de usuario";}
	
}else{} 


//cerramos sesion de usuario en linea -------------------
function finSession(){
	unset ($_SESSION["idnum"]);
	unset ($_SESSION["userid"]);
	unset ($_SESSION["usernom"]);
	unset ($_SESSION["apepat"]);
	unset ($_SESSION["lvl"]);
	unset ($_POST["cerrar1"]);
	unset ($_SESSION["usergrado"]);
	unset ($_SESSION["apegrupo"]);

}

if (isset($_POST["cerrar1"]))
	{
finSession();
	}


//SISTEMA DE CONSULTRA DE DOCENTES ---------------------------------------------------------------------------------
// recivimos las variables de inicio de sesion por metodo POST , sin una variable ya no sirve.

if ($_POST["iddocente1"] && $_POST["docpss1"])
{	

	$idUsuario=addslashes($_POST["iddocente1"]);
	
	$pssUsuario=addslashes($_POST["docpss1"]);
	
	//consulta a base de datos el usuario y el password
	$dbconn=dbConnect();
	if (!$dbconn)
	{
		$displayusr ="Error de conexión a la base de datos.";
		}else{
	//elegimos la base de datos --------------
	mysql_select_db(DATABASE,$dbconn);
	//consultamos a la base de datos
	$colsulta="SELECT * FROM `docentes` WHERE `doc_id`='".$idUsuario."';";
	//ejecutamos la consulta 
	$result = mysql_query($colsulta, $dbconn); 
	//resultado de consulta
	if (!$result)
	{
		}else{
			
	 $row = mysql_fetch_array($result);
	 	$usr_idnum_BD = $row["iddocentes"]; 
		$usr_id_BD = $row["doc_id"]; 
		$usr_nom_BD = $row["doc_nombre"]; 
		$usr_apepat_BD = $row["doc_apellido"]; 
		$usr_pss_DB = $row["doc_pss"]; 
		$usr_lvl_DB = $row["doc_lvl"]; 
		}}
	
	
	//comprobamos si la varibale iduser es igual a una existente
	if ($idUsuario==$usr_id_BD)
	{
		
//comprobamos si la varibale idpss  es igual a una existente
		if ($pssUsuario==$usr_pss_DB)
		{	
		
			$_SESSION["idnum"]=$usr_idnum_BD;
			$_SESSION["userid"]=$usr_id_BD;
			$_SESSION["usernom"]=$usr_nom_BD;
			$_SESSION["apepat"]=$usr_apepat_BD;
			$_SESSION["lvl"]=$usr_lvl_DB;
			
			$displayusr="Inicio con ëxito";
			//echo $display;
			}else{
				$displayusr="Error de Password";
				//echo $display;
				}
		
		unset ($_POST["iddocente1"]);
		unset ($_POST["docpss1"]);
		
		unset ($idUsuario);
		unset ($pssUsuario);
		
		
	}else{$displayusr="Error de usuario";}
	
}else{} 


//CARGAR LISTA DE DOCENTES --------------------------------------------------------------------
function listDocentes()
{
	
	$dbconn=dbConnect();
	if (!$dbconn)
	{
		$display ="Error de conexión a la base de datos.";
		}else{
	//elegimos la base de datos --------------
	mysql_select_db(DATABASE,$dbconn);
	//consultamos a la base de datos
	$colsulta="SELECT * FROM `docentes` WHERE `iddocentes`;";
	//ejecutamos la consulta 
	$result = mysql_query($colsulta, $dbconn); 
	//resultado de consulta
	//contamos las lieas de lso resultados
	$numrows=mysql_num_rows($result);
		}
		?>
        

<label for="listDocente1"></label>
                 <select name="listDocente1" size="1" id="listDocente1">
  <?php 
//loop de busqueda de datos regregresados por la BD ------
	for ($i=0; $i<$numrows; $i++)
					{
						//comprobar si existen datos -----
		if (mysql_num_rows($result)>0)
				 {
					 
		$row = mysql_fetch_array($result);
		 
		$lst_doc_idnum_BD = $row["iddocentes"]; 
		$lst_doc_id_BD = $row["doc_id"]; 
		$lst_doc_nom_BD = $row["doc_nombre"]; 
		$lst_doc_apepat_BD = $row["doc_apellido"]; 
		$lst_doc_pss_DB = $row["doc_pss"]; 
		$lst_doc_lvl_DB = $row["doc_lvl"]; 
		echo $lst_doc_idnum_BD;
		
?>
<option value="<?php echo $lst_doc_idnum_BD;?>"><?php echo $lst_doc_nom_BD." ".$lst_doc_apepat_BD ;?></option>
  <?php 
 }}
 ?>
</select>
<?php
}

//CARGAR LISTA DE MATERIAS --------------------------------------------------------------------
function listMaterias()
{
	
	$dbconn=dbConnect();
	if (!$dbconn)
	{
		$display ="Error de conexión a la base de datos.";
		}else{
	//elegimos la base de datos --------------
	mysql_select_db(DATABASE,$dbconn);
	//consultamos a la base de datos
	$colsulta="SELECT *
FROM `materias`
WHERE `idmaterias`;";
	//ejecutamos la consulta 
	$result = mysql_query($colsulta, $dbconn); 
	//resultado de consulta
	//contamos las lieas de lso resultados
	$numrows=mysql_num_rows($result);
		}
		?>
        

<label for="listMateria1"></label>
                 <select name="listMateria1" size="1" id="listMateria1">
  <?php 
//loop de busqueda de datos regregresados por la BD ------
	for ($i=0; $i<$numrows; $i++)
					{
						//comprobar si existen datos -----
		if (mysql_num_rows($result)>0)
				 {
					 
		$row = mysql_fetch_array($result);
		 
		$lst_mat_idnum_BD = $row["idmaterias"]; 
		$lst_mat_nom_BD = $row["mat_materia"]; 
		echo $lst_doc_idnum_BD;
		
?>
<option value="<?php echo $lst_mat_idnum_BD;?>"><?php echo $lst_mat_nom_BD  ;?></option>
  <?php 
 }}
 ?>
</select>
<?php
}

//CARGAR LISTA DE SICLOS --------------------------------------------------------------------
function listSiclos()
{
	
	$dbconn=dbConnect();
	if (!$dbconn)
	{
		$display ="Error de conexión a la base de datos.";
		}else{
	//elegimos la base de datos --------------
	mysql_select_db(DATABASE,$dbconn);
	//consultamos a la base de datos
	$colsulta="SELECT *
FROM `siclo`
WHERE `idsiclo`;";
	//ejecutamos la consulta 
	$result = mysql_query($colsulta, $dbconn); 
	//resultado de consulta
	//contamos las lieas de lso resultados
	$numrows=mysql_num_rows($result);
		}
		?>
        

<label for="listSiclo1"></label>
                 <select name="listSiclo1" size="1" id="listSiclo1">
  <?php 
//loop de busqueda de datos regregresados por la BD ------
	for ($i=0; $i<$numrows; $i++)
					{
						//comprobar si existen datos -----
		if (mysql_num_rows($result)>0)
				 {
					 
		$row = mysql_fetch_array($result);
		 
		$lst_siclo_idnum_BD = $row["idsiclo"]; 
		$lst_siclo_ini_BD = $row["siclo_inicia_ano"]; 
		$lst_siclo_ter_BD = $row["siclo_termina_ano"]; 
		
		
?>
<option value="<?php echo $lst_siclo_idnum_BD;?>"><?php echo $lst_siclo_ini_BD." - ".$lst_siclo_ter_BD ;?></option>
  <?php 
 }}
 ?>
</select>
<?php
}

//CARGAR LISTA DE MATERIAS POR DOCENTE --------------------------------------------------------------------
function listMateriasDoc()
{
	
	$mat_doc=$_SESSION["idnum"];
	$dbconn=dbConnect();
	if (!$dbconn)
	{
		$display ="Error de conexión a la base de datos.";
		}else{
	//elegimos la base de datos --------------
	mysql_select_db(DATABASE,$dbconn);
	//consultamos a la base de datos
	$colsulta="SELECT *
FROM `materias`
WHERE `docentes_iddocentes` =".$mat_doc.";";
	//ejecutamos la consulta 
	$result = mysql_query($colsulta, $dbconn); 
	//resultado de consulta
	//contamos las lieas de lso resultados
	$numrows=mysql_num_rows($result);
		}
		?>
        

<label for="listMateria1"></label>
                 <select name="listMateria1" size="1" id="listMateria1">
  <?php 
//loop de busqueda de datos regregresados por la BD ------
	for ($i=0; $i<$numrows; $i++)
					{
						//comprobar si existen datos -----
		if (mysql_num_rows($result)>0)
				 {
					 
		$row = mysql_fetch_array($result);
		 
		$lst_mat_idnum_BD = $row["idmaterias"]; 
		$lst_mat_nom_BD = $row["mat_materia"]; 
		echo $lst_doc_idnum_BD;
		
?>
<option value="<?php echo $lst_mat_idnum_BD;?>"><?php echo $lst_mat_nom_BD  ;?></option>
  <?php 
 }}
 ?>
</select>
<?php
}



//CARGAR LISTA DE DOCENTES --------------------------------------------------------------------
function MailDocente($num_doc)
{
	
	$dbconn=dbConnect();
	if (!$dbconn)
	{
		$display ="Error de conexión a la base de datos.";
		}else{
	//elegimos la base de datos --------------
	mysql_select_db(DATABASE,$dbconn);
	//consultamos a la base de datos
	$colsulta="SELECT * FROM `docentes` WHERE `iddocentes`=".$num_doc.";";
	//ejecutamos la consulta 
	$result = mysql_query($colsulta, $dbconn); 
	//resultado de consulta
	//contamos las lieas de lso resultados
	$numrows=mysql_num_rows($result);
		}
		?>
        

  <?php 
//loop de busqueda de datos regregresados por la BD ------
	for ($i=0; $i<$numrows; $i++)
					{
						//comprobar si existen datos -----
		if (mysql_num_rows($result)>0)
				 {
					 
		$row = mysql_fetch_array($result);
		 
		$lst_doc_idnum_BD = $row["iddocentes"]; 
		$lst_doc_nom_BD = $row["doc_email"]; 
		
		echo $lst_doc_nom_BD;
		
 }}
}







//CARGAR LISTA DE MATERIAS POR DOCENTE --------------------------------------------------------------------
function listMatAsis($usr_materia_asis)
{
	
	$mat_doc=$_SESSION["idnum"];
	$dbconn=dbConnect();
	if (!$dbconn)
	{
		$display ="Error de conexión a la base de datos.";
		}else{
	//elegimos la base de datos --------------
	mysql_select_db(DATABASE,$dbconn);
	//consultamos a la base de datos
	$colsulta="SELECT *
FROM `materias`
WHERE `idmaterias` =".$usr_materia_asis.";";
	//ejecutamos la consulta 
	$result = mysql_query($colsulta, $dbconn); 
	//resultado de consulta
	//contamos las lieas de lso resultados
	$numrows=mysql_num_rows($result);
		}
		?>
        


  <?php 
//loop de busqueda de datos regregresados por la BD ------
	for ($i=0; $i<$numrows; $i++)
					{
						//comprobar si existen datos -----
		if (mysql_num_rows($result)>0)
				 {
					 
		$row = mysql_fetch_array($result);
		 
		$lst_mat_idnum_BD = $row["idmaterias"]; 
		$lst_mat_nom_BD = $row["mat_materia"]; 
		echo $lst_doc_idnum_BD;
		
?>
<?php echo $lst_mat_nom_BD  ;?>
  <?php 
 }}
}



?>