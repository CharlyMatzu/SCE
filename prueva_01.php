<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<p>
  <?php
  
		
		  

		  //consulta a base de datos el usuario y el password
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

		?>
        

<label for="matdocent1"></label>
                 <select name="matdocent1" size="1" id="matdocent1">
  <?php 
//loop de busqueda de datos regregresados por la BD ------
	for ($i=0; $i<$numrows; $i++)
					{
						//comprobar si existen datos -----
		if (mysql_num_rows($result)>0)
				 {
					 
		$row = mysql_fetch_array($result);
		 
		$usr_idnum_BD = $row["iddocentes"]; 
		$usr_id_BD = $row["doc_id"]; 
		$usr_nom_BD = $row["doc_nombre"]; 
		$usr_apepat_BD = $row["doc_apellido"]; 
		$usr_pss_DB = $row["doc_pss"]; 
		$usr_lvl_DB = $row["doc_lvl"]; 
		
		
?>
<option value="2" selected="<?php echo $usr_idnum_BD;?>"><?php echo $usr_nom_BD." ".$usr_apepat_BD ;?></option>
  <?php 
 }}
 ?>
</select>

</body>
</html>