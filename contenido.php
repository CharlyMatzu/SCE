<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php

if ($_GET["cont1"]==1)
{
	?>
<span class="Titulo">Agregar Alumno</span><br />
    <br />
<table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr>
        <th align="left" valign="top" scope="col"><form id="usuarios1" name="usuarios1" method="post" action="index.php?cont1=1">
       

		  <table width="500" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <th width="63" scope="col">&nbsp;</th>
              <th width="141" scope="col">&nbsp;</th>
              <th width="296" scope="col"> <?php 
		if($display)
		{?>
          <span class="error"><?php 
		  echo $display;
		  ?></span>
          <?php
		}
		  ?></th>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="30" class="Tabla_datos">ID de alumno:</td>
              <td><label for="idalumno1"></label>
              <input name="idalumno1" type="text" id="idalumno1" value="<?php echo $_POST["idalumno1"] ; ?>" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="30" class="Tabla_datos">Matricula</td>
              <td><label for="matricula1"></label>
              <input name="matricula1" type="text" id="matricula1" value="<?php echo $_POST["matricula1"]; ?>" size="30" maxlength="50" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="30" class="Tabla_datos">Confirmar matricula:</td>
              <td><input name="matricula2" type="text" id="matricula2" value="<?php echo $_POST["matricula2"]; ?>" size="30" maxlength="50" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="30" class="Tabla_datos">Nombre:</td>
              <td><label for="nombre1"></label>
              <input name="nombre1" type="text" id="nombre1" value="<?php echo $_POST["nombre1"]; ?>" size="30" maxlength="50" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="30" class="Tabla_datos">Apellido paterno:</td>
              <td><label for="apepat1"></label>
              <input name="apepat1" type="text" id="apepat1" value="<?php echo $_POST["apepat1"]; ?>" size="30" maxlength="50" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="30" class="Tabla_datos">Apellido materno:</td>
              <td><label for="apemat1"></label>
              <input name="apemat1" type="text" id="apemat1" value="<?php echo $_POST["apemat1"] ; ?>" size="30" maxlength="50" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="30" class="Tabla_datos">Grado:</td>
              <td><label for="grado1"></label>
                <select name="grado1" size="1" id="grado1">
                  <option value="1" selected="selected">1er. Semestre</option>
                   <option value="2">2do. Semestre</option>
                   <option value="3">3er. Semestre</option>
                   <option value="4">4to. Semestre</option>
                   <option value="5">5to. Semestre</option>
                  <option value="6">6to. Semestre</option>
              </select></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="30" class="Tabla_datos">Grupo:</td>
              <td><label for="grupo1"></label>
                <select name="grupo1" size="1" id="grupo1">
                  <option value="a" selected="selected">A</option>
                  <option value="b">B</option>
                  <option value="c">C</option>
                  <option value="d">D</option>
                  <option value="e">E</option>
                  <option value="f">F</option>
                  <option value="g">G</option>
                  <option value="h">H</option>
              </select></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="30" class="Tabla_datos">Email:</td>
              <td><label for="email1"></label>
              <input name="email1" type="text" id="email1" value="<?php echo $_POST["email1"] ; ?>" size="30" maxlength="60" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="30" class="Tabla_datos">&nbsp;</td>
              <td><input type="submit" name="alumnos1" id="alumnos1" value="Registrar" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
    </form></th>
  </tr>
</table>
<?php
	} elseif ($_GET["cont1"]==2)
	{
		?>
    <span class="Titulo">Agregar Docentes<br />
    </span>
<table width="600" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th align="left" valign="top" scope="col"><form id="form1" name="form1" method="post" action="index.php?cont1=2">
          <table width="500" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <th scope="col">&nbsp;</th>
              <th scope="col">&nbsp;</th>
              <th scope="col">&nbsp;</th>
            </tr>
            <tr>
              <th width="58" scope="col">&nbsp;</th>
              <th width="142" scope="col">&nbsp;</th>
              <th width="300" scope="col"> <?php 
		if($display)
		{?>
          <span class="error"><?php 
		  echo $display;
		  ?></span>
          <?php
		}
		  ?></th>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="30" align="left" valign="middle" class="Tabla_datos">ID de usuario:</td>
              <td><label for="iddoncente1"></label>
              <input name="iddoncente1" type="text" id="iddoncente1" value="<?php echo $_POST["iddoncente1"]; ?>" size="30" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="30" align="left" valign="middle" class="Tabla_datos">Nombre:</td>
              <td><label for="nombredoc1"></label>
              <input name="nombredoc1" type="text" id="nombredoc1" value="<?php echo $_POST["nombredoc1"]; ?>" size="30" maxlength="50" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="30" align="left" valign="middle" class="Tabla_datos">Apellidos:</td>
              <td><label for="apedoc1"></label>
              <input name="apedoc1" type="text" id="apedoc1" value="<?php echo $_POST["apedoc1"]; ?>" size="30" maxlength="50" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="30" align="left" valign="middle" class="Tabla_datos">Email:</td>
              <td><label for="docmail1"></label>
              <input name="docmail1" type="text" id="docmail1" value="<?php echo $_POST["docmail1"]; ?>" size="30" maxlength="50" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="30" align="left" valign="middle" class="Tabla_datos">Nivel de acceso:</td>
              <td><label for=""></label>
                <label for="niveldoc1"></label>
                <select name="niveldoc1" size="1" id="niveldoc1">
                  <option value="4">Administrador</option>
                  <option value="3">Editor</option>
                  <option value="2" selected="selected">Docente</option>
              </select></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="30" align="left" valign="middle" class="Tabla_datos">Contraseña:</td>
              <td><label for="pssdoc1"></label>
              <input name="pssdoc1" type="password" id="pssdoc1" size="30" maxlength="50" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="30" align="left" valign="middle" class="Tabla_datos">Confirmar contraseña:</td>
              <td><input name="pssdoc2" type="password" id="pssdoc2" size="30" maxlength="50" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="30" align="left" valign="middle">&nbsp;</td>
              <td><input type="submit" name="docentes1" id="docentes1" value="Registrar" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="30" align="left" valign="middle">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
        </form></th>
      </tr>
</table>
    <span class="Titulo">    </span>
<?php
		
	} elseif ($_GET["cont1"]==3)
		
     { 
      ?>
     <span class="Titulo">Agregar Materias</span><br />
     <br />
     <table width="600" border="0" cellspacing="0" cellpadding="0">
       <tr>
         <th align="left" valign="top" scope="col"><form id="form2" name="form2" method="post" action="index.php?cont1=3">
           <table width="500" border="0" cellspacing="0" cellpadding="0">
             <tr>
               <th width="56" scope="col">&nbsp;</th>
               <th width="141" scope="col">&nbsp;</th>
               <th width="303" scope="col"><?php 
		if($display)
		{?>
          <span class="error"><?php 
		  echo $display;
		  ?></span>
          <?php
		}
		  ?></th>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td height="30" align="left" class="Tabla_datos">Materia:</td>
               <td><label for="matmateria1"></label>
               <input name="matmateria1" type="text" id="matmateria1" size="45" /></td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td height="30" align="left" class="Tabla_datos">Semestre:</td>
               <td><label for="matsemestre1"></label>
                 <select name="matsemestre1" size="1" id="matsemestre1">
                   <option value="1" selected="selected">1er. Semestre</option>
                   <option value="2">2do. Semestre</option>
                   <option value="3">3er. Semestre</option>
                   <option value="4">4to. Semestre</option>
                   <option value="5">5to. Semestre</option>
                   <option value="6">6to. Semestre</option>
               </select></td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td height="30" align="left" class="Tabla_datos">Docente:</td>
               <td><?php listDocentes();?></td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td height="30" align="left" class="Tabla_datos">Siclo:</td>
               <td><?php listSiclos();?></td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td height="30" align="left" class="Tabla_datos">&nbsp;</td>
               <td><input type="submit" name="materia1" id="materia1" value="Guardar Materia" /></td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
             </tr>
           </table>
         </form></th>
       </tr>
     </table>
<p><br />
       <br />
  <?php
     }elseif ($_GET["cont1"]==4)
	  {
		  
		if ( $_POST["listMateria1"] and $_POST["grupo_semestre1"] and $_POST["grupo_grupo1"])
		{  
		
		$gmat=addslashes($_POST["listMateria1"]);
		$gsem=addslashes($_POST["grupo_semestre1"]);
		$ggrup=addslashes($_POST["grupo_grupo1"]);
		  

		  //consulta a base de datos el usuario y el password
	$dbconn=dbConnect();
	if (!$dbconn)
	{
		$display ="Error de conexión a la base de datos.";
		}else{
	//elegimos la base de datos --------------
	mysql_select_db(DATABASE,$dbconn);
	//consultamos a la base de datos
	$colsulta="SELECT * FROM `usuarios` WHERE  `usr_grado`=".$gsem." and `usr_grupo`='".$ggrup."';";
	//ejecutamos la consulta 
	$result_lst = mysql_query($colsulta, $dbconn); 
	//resultado de consulta
	//contamos las lieas de lso resultados
	$numrows_lst=mysql_num_rows($result_lst);
	
		}
		}

		
		?>
<span class="Titulo">Agregar Asistencias</span></p>
<table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col"><form id="form5" name="form5" method="post" action="">
      <table width="500" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th width="63" scope="col">&nbsp;</th>
          <th width="62" scope="col">&nbsp;</th>
          <th width="180" scope="col">&nbsp;</th>
          <th width="169" scope="col">&nbsp;</th>
          <th width="26" scope="col">&nbsp;</th>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td class="Tabla_datos">Materia:</td>
          <td height="30"><?php listMateriasDoc();?></td>
          <td class="Tabla_datos">Grupo:
              <select name="grupo_grupo1" size="1" id="grupo_grupo1">
              <option value="a" selected="selected">A</option>
              <option value="b">B</option>
              <option value="c">C</option>
              <option value="d">D</option>
              <option value="e">E</option>
              <option value="f">F</option>
              <option value="g">G</option>
              <option value="h">H</option>
            </select>
          </td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td class="Tabla_datos">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td class="Tabla_datos">Grado:</td>
          <td height="30"><label for="select"></label>
            <select name="grupo_semestre1" size="1" id="grupo_semestre1">
              <option value="1">1er. Semestre</option>
              <option value="2">2do. Semestre</option>
              <option value="3">3er. Semestre</option>
              <option value="4">4to. Semestre</option>
              <option value="5">5to. Semestre</option>
              <option value="6">6to. Semestre</option>
            </select></td>
          <td class="Tabla_datos"><input type="submit" name="grupo_sel1" id="grupo_sel1" value="Consultar Grupo" /></td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
      </table>
    </form></th>
  </tr>
</table>
<p>

<br />
</p>
<table width="600" border="0" cellspacing="0" cellpadding="0">
             <tr align="center">
               <th scope="col"><table width="559" height="29" border="0" cellpadding="0" cellspacing="0">
                 <tr>
                   <th width="300" align="right" scope="col"><table width="274" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <th width="274" align="left" valign="middle" class="Tabla_datos" scope="col"> Materia :
                       
				       <?php 
					   
//consulta a base de datos el usuario y el password
	$dbconn=dbConnect();
	if (!$dbconn)
	{
		$displayusr ="Error de conexión a la base de datos.";
		}else{
	//elegimos la base de datos --------------
	mysql_select_db(DATABASE,$dbconn);
	//consultamos a la base de datos
	$colsulta="SELECT *
FROM `materias`
WHERE `idmaterias` =".$gmat.";";
	//ejecutamos la consulta 
	$result = mysql_query($colsulta, $dbconn); 
	//resultado de consulta
	if (!$result)
	{
		}else{
			
	 $row = mysql_fetch_array($result);
		$lst_mat_id = $row["idmaterias"]; 
		$lst_mat_nom = $row["mat_materia"]; 
		
		echo $lst_mat_nom;
		}}
	
					   
					   ?></th>
                     </tr>
                     <tr>
                       <td align="left" valign="middle" class="Tabla_datos">Maestro : <?php echo $_SESSION["usernom"]." ".$_SESSION["apepat"];?></td>
                     </tr>
                     <tr>
                       <td align="left" valign="middle" class="Tabla_datos">Grupo: 
					   <?php 
					   if ($gsem)
					   {
					   echo $gsem." to.";
					   }
					   
					   ?></td>
                     </tr>
                   </table></th>
                   <th width="259" scope="col"><table width="232" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <th width="232" align="right" valign="middle" scope="col"><br />
                         <span class="Texto_19">Fecha: <?php $fecha=date("j ,n ,Y"); echo $fecha;?></span></th>
                     </tr>
                   </table></th>
                 </tr>
               </table>
                 <table width="558" border="0" cellspacing="0" cellpadding="0">
                   <tr>
                     <th width="501" scope="col"><?php
					 if ($display)
					 {?>
                     <span class="error"><?php echo $display;?></span>
					 <?php 
						 }
					  ?></th>
                     <th width="57" scope="col">&nbsp;</th>
                   </tr>
                 </table>
                 <br />
               <form id="form3" name="form3" method="post" action="index.php?cont1=4&mat1=<?php echo $gmat;?>">
                 <table width="500" border="0" cellspacing="0" cellpadding="0">
                   <tr>
                     <th scope="col">&nbsp;</th>
                     <th class="Tabla_datos" scope="col">Matricula</th>
                     <th scope="col">&nbsp;</th>
                     <th align="left" class="Tabla_datos" scope="col">Nombre</th>
                     <th class="Tabla_datos" scope="col">&nbsp;</th>
                     <th scope="col">&nbsp;</th>
                     <th class="Tabla_datos" scope="col">&nbsp;</th>
                   </tr>
                   <tr>
                     <th scope="col">&nbsp;</th>
                     <th class="Tabla_datos" scope="col">&nbsp;</th>
                     <th scope="col">&nbsp;</th>
                     <th align="left" class="Tabla_datos" scope="col">&nbsp;</th>
                     <th class="Tabla_datos" scope="col">&nbsp;</th>
                     <th scope="col">&nbsp;</th>
                     <th class="Tabla_datos" scope="col">&nbsp;</th>
                   </tr>
                   <?php 
				   //loop de busqueda de datos regregresados por la BD ------
					for ($i=0; $i<$numrows_lst; $i++)
					{
						//comprobar si existen datos -----
					 if (mysql_num_rows($result_lst)>0)
				 {
					 
					$row_lst = mysql_fetch_array($result_lst);
		 
					$usr_id_BD = stripslashes($row_lst["usr_id"]);
					$usr_id_BD = stripslashes($row_lst["idusuarios"]);
					$usr_imatri_BD = stripslashes($row_lst["usr_matricula"]);  
					$usr_nom_BD = stripslashes($row_lst["usr_nombre"]); 
					$usr_apepat_BD = stripslashes($row_lst["usr_apellido_pat"]); 
					$usr_apemat_BD  = stripslashes($row_lst["usr_apellido_mat"]); 
					$usr_mail_BD  = stripslashes($row_lst["usr_mail"]); 
		
//Cambiar color de tabla en l apublicacion ---------------		
			if ($bg >= 1)
	  {
	  $color="#0f0f0f";
	  $bg =0;
	  }
	  else
	  {	  $color="";
	  $bg=1;
	  } 
		
				   ?>
                   <tr bgcolor="<?php echo $color; ?>" >
                     <th width="14" scope="col">&nbsp;</th>
                     <th width="86" valign="top" class="Tabla_datos" scope="col"><?php echo $usr_imatri_BD; ?></th>
                     <th width="16" scope="col">&nbsp;</th>
                     <th width="207" height="20" align="left" valign="top" class="Tabla_datos" scope="col"><?php echo $usr_nom_BD." ".$usr_apepat_BD." ".$usr_apemat_BD ;?>
 <br /></th>
                     <th width="78" valign="top" class="Tabla_datos" scope="col"> <a href="snd_msg.php?mail1=<?php echo $usr_mail_BD; ?>" target="msg" class="links_sub">Mensaje &gt;&gt;</a></th>
                     <th width="47" scope="col"><span class="Tabla_datos">Si
                         <input name="<?php echo $usr_id_BD; ?>" type="radio" id="radio" value="1" checked="checked" />
                     </span></th>
                     <th width="52" class="Tabla_datos" scope="col">No 
                       <span id="1">
                       <input type="radio" name="<?php echo $usr_id_BD; ?>" id="radio2" />
                     </span></th>
                   </tr><?php 
					 }
						}
				   
				   ?>
                 </table>
                 <br />
                 <table width="500" border="0" cellspacing="0" cellpadding="0">
                   <tr>
                     <th scope="col">&nbsp;</th>
                     <th scope="col">&nbsp;</th>
                     <th scope="col">&nbsp;</th>
                   </tr>
                   <tr>
                     <th scope="col">&nbsp;</th>
                     <th scope="col">&nbsp;</th>
                     <th scope="col">&nbsp;</th>
                   </tr>
                   <tr>
                     <th width="62" scope="col">&nbsp;</th>
                     <th width="240" scope="col"><input type="reset" name="button" id="button" value="Limpiar Formato" /></th>
                     <th width="198" scope="col"><input type="submit" name="asistencia1" id="asistencia1" value="Guardar Asistencia" /></th>
                   </tr>
                 </table>
               </form></th>
             </tr>
</table>
<p><br />
           <br />
<?php        
	   }elseif ($_GET["cont1"]==5)
	   {?>
         agregar tareas
         <?php
		   }elseif ($_GET["cont1"]==6)
		   {?>
		  agregar horarios
          <?php
     }elseif ($_GET["cont1"]==7)
	  {
		  
		  
		  
$sesion_asis=$_SESSION["idnum"];

		  //consulta a base de datos el usuario y el password
	$dbconn=dbConnect();
	if (!$dbconn)
	{
		$display ="Error de conexión a la base de datos.";
		}else{
	//elegimos la base de datos --------------
	mysql_select_db(DATABASE,$dbconn);
	//consultamos a la base de datos
	$colsulta="SELECT *
FROM `docentes`;";
	//ejecutamos la consulta 
	$result_lst = mysql_query($colsulta, $dbconn); 
	//resultado de consulta
	//contamos las lieas de lso resultados
	$numrows_lst=mysql_num_rows($result_lst);
	
		}
		


		?>
<span class="Titulo">Docentes</span></p>

<table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr align="center">
    <th scope="col"><table width="559" height="29" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <th width="300" scope="col">&nbsp;</th>
        <th width="259" scope="col"><table width="232" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <th width="232" align="right" valign="middle" scope="col"><br />
              <span class="Texto_19">Fecha:
                <?php $fecha=date("j ,n ,Y"); echo $fecha;?>
              </span></th>
          </tr>
        </table></th>
      </tr>
    </table>
      <table width="558" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th width="501" scope="col"><?php
					 if ($display)
					 {?>
            <span class="error"><?php echo $display;?></span>
            <?php 
						 }
					  ?></th>
          <th width="57" scope="col">&nbsp;</th>
        </tr>
      </table>
      <br />
      <form id="form8" name="form3" method="post" action="index.php?cont1=4&amp;mat1=<?php echo $gmat;?>">
        <table width="500" border="0" cellspacing="0" cellpadding="0">
          
          
          <tr>
            <th scope="col">&nbsp;</th>
            <th class="Tabla_datos" scope="col">&nbsp;</th>
            <th scope="col">&nbsp;</th>
            <th align="left" class="Tabla_datos" scope="col">&nbsp;</th>
            <th class="Tabla_datos" scope="col">&nbsp;</th>
            <th scope="col">&nbsp;</th>
            <th class="Tabla_datos" scope="col">&nbsp;</th>
          </tr>
          <?php 
				   //loop de busqueda de datos regregresados por la BD ------
					for ($i=0; $i<$numrows_lst; $i++)
					{
						//comprobar si existen datos -----
					 if (mysql_num_rows($result_lst)>0)
				 {
					 
					$row_lst = mysql_fetch_array($result_lst);
		 
					$lst_doc_id = stripslashes($row_lst["iddocentes"]);
					$lst_doc_nom = stripslashes($row_lst["doc_nombre"]); 
					$lst_doc_ape = stripslashes($row_lst["doc_apellido"]);
					
		
//Cambiar color de tabla en l apublicacion ---------------		
			if ($bg >= 1)
	  {
	  $color="#0f0f0f";
	  $bg =0;
	  }
	  else
	  {	  $color="";
	  $bg=1;
	  } 
		
				   ?>
             <tr bgcolor="<?php echo $color; ?>">
            <th  scope="col">&nbsp;</th>
            <th  scope="col">&nbsp;</th>
            <th  scope="col">&nbsp;</th>
            <th  scope="col">&nbsp;</th>
            <th scope="col">&nbsp;</th>
            <th  scope="col">&nbsp;</th>
            <th  scope="col">&nbsp;</th>
          </tr>
          <tr bgcolor="<?php echo $color; ?>" >
            <th width="33" scope="col">&nbsp;</th>
            <th width="87" align="left" valign="top" class="Tabla_datos" scope="col">Docente:</th>
            <th width="14" scope="col">&nbsp;</th>
            <th width="326" height="20" align="left" valign="top" class="Tabla_datos" scope="col"><?php
			
			 echo $lst_doc_nom." ".$lst_doc_ape; ?></th>
            <th width="12" class="Tabla_datos" scope="col">&nbsp;</th>
            <th width="11" scope="col">&nbsp;</th>
            <th width="17" class="Tabla_datos" scope="col">&nbsp;</th>
          </tr>
          <tr bgcolor="<?php echo $color; ?>">
            <th  scope="col">&nbsp;</th>
            <th align="left" class="Tabla_datos"  scope="col">Materias:</th>
            <th  scope="col">&nbsp;</th>
            <th align="left"  scope="col">
            <span class="Tabla_datos">
            <?php
			//CARGAR LISTA DE MATERIAS --------------------------------------------------------------------

	
	$dbconn=dbConnect();
	if (!$dbconn)
	{
		$display ="Error de conexión a la base de datos.";
		}else{
	//elegimos la base de datos --------------
	mysql_select_db(DATABASE,$dbconn);
	//consultamos a la base de datos
	$colsultamat="SELECT *
FROM `materias`
WHERE `docentes_iddocentes` =".$lst_doc_id.";";
	//ejecutamos la consulta 
	$result_mat = mysql_query($colsultamat, $dbconn); 
	//resultado de consulta
	//contamos las lieas de lso resultados
	$numrows_mat=mysql_num_rows($result_mat);
		}

//loop de busqueda de datos regregresados por la BD ------
	for ($im=0; $im<$numrows_mat; $im++)
					{
						//comprobar si existen datos -----
		if (mysql_num_rows($result_mat)>0)
				 {
					 
		$rowmat = mysql_fetch_array($result_mat);
		 
		$lst_mat_idnum_BD = $rowmat["idmaterias"]; 
		$lst_mat_nom_BD = $rowmat["mat_materia"]; 
		echo $lst_doc_idnum_BD;
		
 echo $lst_mat_nom_BD;
 
 if ($im==$numrows_mat-1)
 {
	
echo ".";
	 
}else{
 echo ", ";

 }
 
 }}


			?>
            </span></th>
            <th scope="col">&nbsp;</th>
            <th  scope="col">&nbsp;</th>
            <th  scope="col">&nbsp;</th>
          </tr>
          <tr bgcolor="<?php echo $color; ?>">
            <th  scope="col">&nbsp;</th>
            <th  scope="col">&nbsp;</th>
            <th  scope="col">&nbsp;</th>
            <th  scope="col">&nbsp;</th>
            <th scope="col">&nbsp;</th>
            <th  scope="col">&nbsp;</th>
            <th  scope="col">&nbsp;</th>
          </tr>
          <?php 
					 }
						}
				   
				   ?>
        </table>
<br />
      </form></th>
  </tr>
</table>

<p>&nbsp;</p>
<p>
  <?php
     }elseif ($_GET["cont1"]==8)
	  {
		  
		
		
		$gmat=addslashes($_POST["listMateria1"]);
		$gsem=addslashes($_POST["grupo_semestre1"]);
		$ggrup=addslashes($_POST["grupo_grupo1"]);
		$sesion_asis=$_SESSION["idnum"];
			
		  

		  //consulta a base de datos el usuario y el password
	$dbconn=dbConnect();
	if (!$dbconn)
	{
		$display ="Error de conexión a la base de datos.";
		}else{
	//elegimos la base de datos --------------
	mysql_select_db(DATABASE,$dbconn);
	//consultamos a la base de datos
	$colsulta="SELECT *
FROM `asistencia`
WHERE `usuarios_idusuarios` =".$sesion_asis.";";
	//ejecutamos la consulta 
	$result_lst = mysql_query($colsulta, $dbconn); 
	//resultado de consulta
	//contamos las lieas de lso resultados
	$numrows_lst=mysql_num_rows($result_lst);
	
		}
		

		
		?>
  <span class="Titulo">Asistencias</span></p>
<?php 
if (!$_SESSION["lvl"])
		  {
?>

<table width="600" border="0" cellspacing="0" cellpadding="0">
             <tr align="center">
               <th scope="col"><table width="559" height="29" border="0" cellpadding="0" cellspacing="0">
                 <tr>
                   <th width="300" scope="col">&nbsp;</th>
                   <th width="259" scope="col"><table width="232" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <th width="232" align="right" valign="middle" scope="col"><br />
                         <span class="Texto_19">Fecha: <?php $fecha=date("j ,n ,Y"); echo $fecha;?></span></th>
                     </tr>
                   </table></th>
                 </tr>
               </table>
                 <table width="558" border="0" cellspacing="0" cellpadding="0">
                   <tr>
                     <th width="501" scope="col"><?php
					 if ($display)
					 {?>
                     <span class="error"><?php echo $display;?></span>
					 <?php 
						 }
					  ?></th>
                     <th width="57" scope="col">&nbsp;</th>
                   </tr>
                 </table>
                 <br />
               <form id="form3" name="form3" method="post" action="index.php?cont1=4&mat1=<?php echo $gmat;?>">
                 <table width="500" border="0" cellspacing="0" cellpadding="0">
                   <tr>
                     <th scope="col">&nbsp;</th>
                     <th class="Tabla_datos" scope="col">Fecha</th>
                     <th scope="col">&nbsp;</th>
                     <th align="left" class="Tabla_datos" scope="col">Materia</th>
                     <th height="20" class="Tabla_datos" scope="col">&nbsp;</th>
                     <th scope="col"><span class="Tabla_datos">Si</span></th>
                     <th bgcolor="#530000" class="Tabla_datos" scope="col">No</th>
                   </tr>
                   <tr>
                     <th scope="col">&nbsp;</th>
                     <th class="Tabla_datos" scope="col">&nbsp;</th>
                     <th scope="col">&nbsp;</th>
                     <th align="left" class="Tabla_datos" scope="col">&nbsp;</th>
                     <th class="Tabla_datos" scope="col">&nbsp;</th>
                     <th scope="col">&nbsp;</th>
                     <th bgcolor="#530000" class="Tabla_datos" scope="col">&nbsp;</th>
                   </tr>
                   <?php 
				   //loop de busqueda de datos regregresados por la BD ------
					for ($i=0; $i<$numrows_lst; $i++)
					{
						//comprobar si existen datos -----
					 if (mysql_num_rows($result_lst)>0)
				 {
					 
					$row_lst = mysql_fetch_array($result_lst);
		 
					$usr_id_asis = stripslashes($row_lst["idasistencia"]);
					$usr_docente_asis = stripslashes($row_lst["asis_docente"]);
					$usr_asistencia_asis = stripslashes($row_lst["asis_asistencia"]);  
					$usr_fecha_asis =$row_lst["asis_fecha"];  
					$usr_doc_asis =$row_lst["docentes_iddocentes"];
					
					$usr_materia_asis = stripslashes($row_lst["materias_idmaterias"]); 
					
		
//Cambiar color de tabla en l apublicacion ---------------		
			if ($bg >= 1)
	  {
	  $color="#0f0f0f";
	  $bg =0;
	  }
	  else
	  {	  $color="";
	  $bg=1;
	  } 
		
				   ?>
                   <tr bgcolor="<?php echo $color; ?>" >
                     <th width="14" scope="col">&nbsp;</th>
                     <th width="86" class="Tabla_datos" scope="col"><?php
$fecha=date("d/m/Y",strtotime($usr_fecha_asis));
echo $fecha;			 
?></th>
                     <th width="16" scope="col">&nbsp;</th>
                     <th width="207" height="25" align="left" class="Tabla_datos" scope="col"><?php listMatAsis($usr_materia_asis);
                     ?>
                     <th width="83" class="Tabla_datos" scope="col"><a href="snd_msg.php?mail1=<?php MailDocente($usr_doc_asis);?>" target="msg">Mensaje&gt;&gt;</a></th>
                     <th width="42" scope="col"><span class="Tabla_datos">
                       <?php 
					 if ($lst_asis_nom==1)
					 {
						 echo "X";
						 }
					  ;?>
                     </span></th>
                     <th width="52" bgcolor="#530000" class="Tabla_datos" scope="col"><?php if ($lst_asis_nom==0)
					 {
						 echo "X";
						 }?></th>
                   </tr>
                   <?php 
					 }
						}
				   
				   ?>
                 </table>
                 <br />
               </form></th>
             </tr>
</table><?php }?>
<p><br />
           <br />
<?php        
	   }elseif ($_GET["cont1"]==9)
	   {?>
             ver tareas
			 <?php
           }elseif($_GET["cont1"]==10)
			 {?>
             ver horarios
			 <?php
     }elseif ($_GET["cont1"]==11)
	  {
		  
		$gmat=addslashes($_POST["listMateria1"]);
		$gsem=addslashes($_POST["grupo_semestre1"]);
		$ggrup=addslashes($_POST["grupo_grupo1"]);
		$sesion_asis=$_SESSION["idnum"];
		  
		  if (!$_SESSION["idnum"])
		  {
			  $dbmat="SELECT * FROM `materias`";
			  
			}else if($_SESSION["idnum"]){
				$grado=$_SESSION["usergrado"];
				$dbmat="SELECT * FROM `materias` WHERE `mat_semestre`=".$grado.";";	
			}
			
			if($_SESSION["lvl"]==2){
				$num_mat=$_SESSION["idnum"];
				$dbmat="SELECT *
FROM `materias`
WHERE `docentes_iddocentes` =".$num_mat."";
			}else if($_SESSION["lvl"]==4){
				
				$dbmat="SELECT * FROM `materias`";
			}
		
		
		

		
		  //consulta a base de datos el usuario y el password
	$dbconn=dbConnect();
	if (!$dbconn)
	{
		$display ="Error de conexión a la base de datos.";
		}else{
	//elegimos la base de datos --------------
	mysql_select_db(DATABASE,$dbconn);
	//consultamos a la base de datos
	$colsulta=$dbmat;
	//ejecutamos la consulta 
	$result_lst = mysql_query($colsulta, $dbconn); 
	//resultado de consulta
	//contamos las lieas de lso resultados
	$numrows_lst=mysql_num_rows($result_lst);
	
		}
		

		
		?>
  <span class="Titulo">Materias</span>
<table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr align="center">
    <th scope="col"><table width="558" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th width="501" scope="col"><?php
					 if ($display)
					 {?>
            <span class="error"><?php echo $display;?></span>
            <?php 
						 }
					  ?></th>
          <th width="57" scope="col">&nbsp;</th>
        </tr>
      </table>
      <br />
      <form id="form7" name="form3" method="post" action="index.php?cont1=4&amp;mat1=<?php echo $gmat;?>">
        <table width="500" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <th scope="col">&nbsp;</th>
            <th align="left" class="Texto_14" scope="col">Materia</th>
            <th scope="col">&nbsp;</th>
            <th align="left" class="Texto_14" scope="col">Docente</th>
            <th class="Texto_14" scope="col">Grado</th>
          </tr>
          <tr>
            <th scope="col">&nbsp;</th>
            <th class="Tabla_datos" scope="col">&nbsp;</th>
            <th scope="col">&nbsp;</th>
            <th align="left" class="Tabla_datos" scope="col">&nbsp;</th>
            <th class="Tabla_datos" scope="col">&nbsp;</th>
          </tr>
          <?php 
				   //loop de busqueda de datos regregresados por la BD ------
					for ($i=0; $i<$numrows_lst; $i++)
					{
						//comprobar si existen datos -----
					 if (mysql_num_rows($result_lst)>0)
				 {
					 
					$row_lst = mysql_fetch_array($result_lst);
		 
					$usr_id_mat = stripslashes($row_lst["idmaterias"]);
					$usr_nom_mat = stripslashes($row_lst["mat_materia"]);
					$usr_doc_mat = stripslashes($row_lst["mat_docente"]);   
					
					$usr_sem_mat = stripslashes($row_lst["mat_semestre"]); 
					
		
//Cambiar color de tabla en l apublicacion ---------------		
			if ($bg >= 1)
	  {
	  $color="#0f0f0f";
	  $bg =0;
	  }
	  else
	  {	  $color="";
	  $bg=1;
	  } 
		
				   ?>
          <tr bgcolor="<?php echo $color; ?>" >
            <th width="16" scope="col">&nbsp;</th>
            <th width="160" height="30" align="left" class="Tabla_datos" scope="col"><?php
echo $usr_nom_mat;			 
?></th>
            <th width="14" scope="col">&nbsp;</th>
            <th width="230" align="left" class="Tabla_datos" scope="col"> <?php 
					echo $usr_doc_mat;?></th>
            <th width="80" class="Tabla_datos" scope="col"><?php echo $usr_sem_mat;?></th>
          </tr>
          <?php 
					 }
						}

				   ?>
        </table>
        <br />
      </form></th>
  </tr>
</table>
<p><br />
  <br />
</p>
<p> 
  <?php
           }elseif($_GET["cont1"]==12)
			 {?>
  <span class="Titulo">                  Contacto</span>
<table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th align="left" scope="col"><table width="559" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th width="56" scope="col">&nbsp;</th>
        <th width="503" scope="col"><table width="452" height="71" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="10">&nbsp;</td>
            <td width="426" align="center" valign="top"><form id="form6" name="form2" method="post" action="int_list_sec.php?av=1">
              <table width="363" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td width="105" height="30">Nombre:</td>
                  <td width="258"><label>
                    <input name="nombre" type="text" id="nombre" size="30" />
                  </label></td>
                </tr>
                <tr>
                  <td height="30">Asunto:</td>
                  <td><label>
                    <input name="direccion" type="text" id="direccion" size="30" />
                    </label></td>
                </tr>
                <tr>
                  <td height="30"><p>Tel:</p></td>
                  <td><label>
                    <input name="telefono" type="text" id="telefono" size="30" />
                  </label></td>
                </tr>
                <tr>
                  <td height="30">E-mail</td>
                  <td><label>
                    <input name="e-mail" type="text" id="mail" size="30" />
                  </label></td>
                </tr>
                <tr>
                  <td height="30">Comentario:</td>
                  <td><label>
                    <textarea name="comentarios" id="comentarios" cols="30" rows="5"></textarea>
                  </label></td>
                </tr>
                <tr>
                  <td height="30">&nbsp;</td>
                  <td><input type="submit" name="Enviar" id="Enviar" value="Enviar" /></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><label></label></td>
                </tr>
              </table>
            </form></td>
            <td width="16">&nbsp;</td>
          </tr>
        </table></th>
      </tr>
    </table></th>
  </tr>
</table>
<p>
  <?php }elseif($_GET["cont1"]==13)
				  {?>agregar grupos
  
  
  
  
  
  
  
  
  
  <?php }elseif($_GET["cont1"]==14)
					 {?> 
  <span class="Titulo">Agregar siclo</span><br />
</p>
<table width="600" border="0" cellpadding="0" cellspacing="0">
<tr>
					     <th height="35" align="left" scope="col"><form id="form4" name="form4" method="post" action="index.php?cont1=14">
					       <table width="500" border="0" cellpadding="0" cellspacing="0">
					         <tr>
					           <th width="54" scope="col">&nbsp;</th>
					           <th width="72" scope="col">&nbsp;</th>
					           <th width="126" scope="col"><?php
					 if ($display)
					 {?>
                     <span class="error"><?php echo $display;?></span>
					 <?php 
						 }
					  ?></th>
					           <th width="60" scope="col">&nbsp;</th>
					           <th width="188" scope="col">&nbsp;</th>
				             </tr>
					         <tr>
					           <td>&nbsp;</td>
					           <td height="30" class="Tabla_datos">Inicia: 
				               </td>
					           <td><label for="inicia_mes1"></label>
					             <select name="inicia_mes1" size="1" id="inicia_mes1">
					               <option value="1">Enero</option>
					               <option value="2">Febrero</option>
					               <option value="3">Marzo</option>
					               <option value="4">Abril</option>
					               <option value="5">Mayo</option>
					               <option value="6">Junio</option>
					               <option value="7">Julio</option>
					               <option value="8">Agosto</option>
					               <option value="9">Septiembre</option>
					               <option value="10">Octubre</option>
					               <option value="11">Noviembre</option>
					               <option value="12">Diciembre</option>
		                       </select></td>
					           <td class="Tabla_datos">Año: </td>
					           <td><label for="inicia_ano1"></label>
					             <select name="inicia_ano1" size="1" id="inicia_ano1"><?php
						$actual=date("Y");
						$anteriores=$actual-20;
						$sigiuientes=$actual+20;

						for($inc=$anteriores;$inc<$sigiuientes;$inc++)
						{
									 
						if ($inc==$actual)
						 {
						echo '<option value="'.$inc.'" selected="selected">'.$inc.'</option>';
						}else{
						echo '<option value="'.$inc.'">'.$inc.'</option>';
						}
						}
								 
								 ?>
		                       </select></td>
				             </tr>
					         <tr>
					           <td>&nbsp;</td>
					           <td>&nbsp;</td>
					           <td>&nbsp;</td>
					           <td>&nbsp;</td>
					           <td>&nbsp;</td>
				             </tr>
					         <tr>
					           <td>&nbsp;</td>
					           <td height="30" class="Tabla_datos">Termina:</td>
					           <td><select name="termina_mes2" size="1" id="termina_mes2">
					             <option value="1">Enero</option>
					             <option value="2">Febrero</option>
					             <option value="3">Marzo</option>
					             <option value="4">Abril</option>
					             <option value="5">Mayo</option>
					             <option value="6">Junio</option>
					             <option value="7">Julio</option>
					             <option value="8">Agosto</option>
					             <option value="9">Septiembre</option>
					             <option value="10">Octubre</option>
					             <option value="11">Noviembre</option>
					             <option value="12">Diciembre</option>
				               </select></td>
					           <td class="Tabla_datos">Año:</td>
					           <td><select name="termina_ano2" size="1" id="termina_ano2">
					             <?php
						$actual=date("Y");
						$anteriores=$actual-20;
						$sigiuientes=$actual+20;

						for($inc=$anteriores;$inc<$sigiuientes;$inc++)
						{
									 
						if ($inc==$actual+1)
						 {
						echo '<option value="'.$inc.'" selected="selected">'.$inc.'</option>';
						}else{
						echo '<option value="'.$inc.'">'.$inc.'</option>';
						}
						}
								 
								 ?>
				               </select></td>
				             </tr>
					         <tr>
					           <td>&nbsp;</td>
					           <td>&nbsp;</td>
					           <td>&nbsp;</td>
					           <td>&nbsp;</td>
					           <td>&nbsp;</td>
				             </tr>
					         <tr>
					           <td>&nbsp;</td>
					           <td>&nbsp;</td>
					           <td><input type="submit" name="siclo1" id="siclo1" value="Agregar Siclo" /></td>
					           <td>&nbsp;</td>
					           <td>&nbsp;</td>
				             </tr>
					         <tr>
					           <td>&nbsp;</td>
					           <td>&nbsp;</td>
					           <td>&nbsp;</td>
					           <td>&nbsp;</td>
					           <td>&nbsp;</td>
				             </tr>
				           </table>
				         </form></th>
  </tr>
</table>
					 <p><br />
					 <?php 
			 }elseif(!$_GET["cont1"])
			 {?>
<span class="Titulo">Bienvenido</span></p>
					 <table width="600" border="0" cellspacing="0" cellpadding="0">
					   <tr>
					     <th scope="col">&nbsp;</th>
					     <th scope="col"><?php 
					 $gallery="gallery.php";
					 require($gallery);
					 ?></th>
					     <th scope="col">&nbsp;</th>
				       </tr>
					   <tr>
					     <th scope="col">&nbsp;</th>
					     <th align="left" scope="col">&nbsp;</th>
					     <th scope="col">&nbsp;</th>
				       </tr>
					   <tr>
					     <th scope="col">&nbsp;</th>
					     <th align="left" scope="col"><strong class="Texto_19">Que es SCE</strong></th>
					     <th scope="col">&nbsp;</th>
				       </tr>
					   <tr>
					     <th scope="col">&nbsp;</th>
					     <th align="left" scope="col">&nbsp;</th>
					     <th scope="col">&nbsp;</th>
				       </tr>
					   <tr>
					     <th scope="col">&nbsp;</th>
					     <th align="left" scope="col"><p class="texto_normal">Porque sabemos que está interesado en el futuro y  aprovechamiento escolar de sus hijos, hemos desarrollado el portal SCE, un sencillo  sistema de monitoreo de asistencia, por medio del cual usted padre de familia y  el personal de la institución escolar en la que han ingresado sus hijos podrán  estar en contacto así como informarse mutuamente sobre las asistencias y  conducta de sus hijos a través de una sistema de envío de correo a  través del portal  el cual ayuda a mantener una estrecha comunicación desde su casa o trábalo.</p></th>
					     <th scope="col">&nbsp;</th>
				       </tr>
					   <tr>
					     <th width="43" scope="col">&nbsp;</th>
					     <th width="515" scope="col">&nbsp;</th>
					     <th width="42" scope="col">&nbsp;</th>
				       </tr>
</table>
					 <p></p>
<p>&nbsp;</p>
<?php
           }?>
<script type="text/javascript">
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");
</script>
</body>
</html>