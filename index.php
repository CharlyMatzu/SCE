<?php session_start();
//llamamos archivo de avariables
require_once ("vars.php");
// require_once ("funciones.php"); 
// require_once ("funciones_db.php"); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body leftmargin="0" bottommargin="0" topmargin="0" rightmargin="0">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th align="center" scope="col"><table width="900" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th align="left" valign="top" class="fnd_tabla_prin" scope="col" ><table width="900" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th height="71" align="center" class="head_menu" scope="col"><div 
       <?php if (!$_SESSION["lvl"])
			{
			echo 'class="Menu_sup"';
			}else if($_SESSION["lvl"]==2){echo 'class="Menu_sup_doc"';
			}else if($_SESSION["lvl"]==4){echo 'class="Menu_sup_admin"';
			}
		?>
>
          <ul id="MenuBar1" class="MenuBarHorizontal">
            <li><a href="index.php">Inicio</a></li><?php
			if ($_SESSION["idnum"])
			{
			 ?>
            <li><a href="#" class="MenuBarItemSubmenu">Alumnos</a>
              <ul>
                <li><a href="index.php?cont1=8">Asistencias</a></li>
</ul>
            </li><?php 
			}?>
            
            <li><a href="index.php?cont1=7" class="MenuBarItemSubmenu">Docentes</a>
              <?php
			if ($_SESSION["lvl"]>=2)
			{
			 ?><ul>
                <li><a href="index.php?cont1=4">Asistencia</a></li>
</ul><?php }?>
            </li>
            <li><a href="index.php?cont1=11">Materias</a></li>
            <li><a href="index.php?cont1=12">Contacto</a></li><?php
			if ($_SESSION["lvl"]>=4)
			{
			 ?>
            <li><a href="#" class="MenuBarItemSubmenu">Administracion</a>
              <ul>
                <li><a href="index.php?cont1=2">Agregar docente</a></li>
                <li><a href="index.php?cont1=14">Agregar Ciclo</a></li>
                <li><a href="index.php?cont1=1">Agregar alumno</a></li>
<li><a href="index.php?cont1=3">Agregar materias</a></li>
<?php }?> </ul>
            </li>
          </ul>
        </div> &nbsp;</th>
      </tr>
      <tr>
        <td height="834" valign="top"><table width="900" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <th height="299" align="left" valign="top" scope="col"><table width="300" border="0" cellspacing="0" cellpadding="0" class="acceso">
              <tr>
                <th valign="top" scope="col"><div id="TabbedPanels1" class="TabbedPanels">
                  <ul class="TabbedPanelsTabGroup">
                  <?php
				  if ($_SESSION)
				  {
					  if ($_SESSION["lvl"]>=2)
					  {
					  ?>
                  
					 <?php 
					  }else{
						  ?> <li class="TabbedPanelsTab" tabindex="0">Alumnos</li> <?php
						  }
					  
					  }else{ 
				  ?>
                    <li class="TabbedPanelsTab" tabindex="0">Alumnos</li><?php } ?>
                    
                  <?php
				  if ($_SESSION)
				  {
					  if ($_SESSION["lvl"]<=0)
					  {
					  ?>
                  
					 <?php 
					  }else{
						  ?> <li class="TabbedPanelsTab" tabindex="0">Docentes</li> <?php
						  }
					  
					  }else{ 
				  ?>
                    <li class="TabbedPanelsTab" tabindex="0">Docentes</li><?php } ?>
                  </ul>
                  <div class="TabbedPanelsContentGroup">
                    <div class="TabbedPanelsContent">
                      <?php
                    if (!$_SESSION["userid"])
					{
						?>
                      <table width="230" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td align="left" valign="middle"><p><span class="titulo_pestanas"> Área de alumnos</span> <br />
                            Acceda a los datos de su hijo desde aquí.</p>
                            <p>
                              <?php if($displayusr)
							  {?>
                              <span class="error">
                                <?php
							  echo "<br>".$displayusr."<br>";
                              ?>
                                </span>
                              <?php
							  }
							  ?>
                            </p>
                            <form id="form2" name="form1" method="post" action="index.php">
                              <table width="200" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td width="83">&nbsp;</td>
                                  <td width="117">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td height="30" class="Tabla_datos">Matricula:</td>
                                  <td><input name="iduser1" type="text" id="iduser2" size="17" /></td>
                                </tr>
                                <tr>
                                  <td height="30" class="Tabla_datos">Contraseña:</td>
                                  <td><input name="idpss1" type="password" id="idpss2" size="17" /></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td><?php echo $display; ?></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td><input type="submit" name="Enviar2" id="Enviar2" value="Accesar" /></td>
                                </tr>
                              </table>
                            </form>
                            <p>&nbsp;</p></td>
                        </tr>
                      </table>
                      <?php
						}else{
							?>
                      <table width="230" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td align="left" valign="top"><p><span class="titulo_pestanas"> Bienvenido</span> <br />
                            <br />
                            <?php
							  if ($_SESSION["lvl"]<=0)
							  {
							echo ' Ahora puede ver los datos de su hijo:<br /> <br />';}
							   ?>
                            <span class="titulo_pestanas"><?php echo $_SESSION["usernom"]." ".$_SESSION["apepat"];?></span><br /><br />
                            <?php
							  if ($_SESSION["lvl"]<=0)
							  {
								 echo "<br><span class='titulo_pestanas'>".$_SESSION["usergrado"]." Semestre Grupo \"".$_SESSION["apegrupo"]."\" </span>"; 
								  echo "<br />
                                <br />así como contactar a sus profesores.<br><br>";}
							   ?>
                          </p>
                            <form id="form3" name="form3" method="post" action="index.php">
                              <input type="submit" name="cerrar1" id="cerrar1" value="Cerrar Sesión" />
                            </form>
                            <p>&nbsp;</p></td>
                        </tr>
                      </table>
                      <?php
						}
					
					?>
                    </div>
                    <div class="TabbedPanelsContent">
                      <table width="230" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td align="left" valign="middle"><p><span class="titulo_pestanas">Área restringida</span> <br />
                            Solo para maestros y personal docente y administrativo.</p>
                            <p>
                              <?php if($displayusr)
							  {?>
                              <span class="error">
                                <?php
							  echo "<br>".$displayusr."<br>";
                              ?>
                                </span>
                              <?php
							  }
							  ?>
                            </p>
                            <form id="form1" name="form1" method="post" action="index.php">
                              <table width="200" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td width="83">&nbsp;</td>
                                  <td width="117">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td height="30" class="Tabla_datos">Docente:</td>
                                  <td><input name="iddocente1" type="text" id="iddocente1" size="17" /></td>
                                </tr>
                                <tr>
                                  <td height="30" class="Tabla_datos">Contraseña:</td>
                                  <td><input name="docpss1" type="password" id="docpss1" size="17" /></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td><?php echo $display; ?></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td><input type="submit" name="Enviar" id="Enviar" value="Accesar" /></td>
                                </tr>
                              </table>
                            </form>
                            <p>&nbsp;</p></td>
                        </tr>
                      </table>
                    </div>
                </div></th>
              </tr>
            </table></th>
          </tr>
        </table><table width="887" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th width="607" align="left" valign="top">
      <?php 
	$req="contenido.php";
	require_once($req);
	?></th>
    <th width="280" align="left" valign="top" "><p>&nbsp;
      </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>
        <?php 
	$reqcal="calendario/calendario.php";
	require_once($reqcal);

	?><p>        
        <p>        
        <p>
        <p>        
        <p> 
    <iframe height="200" width="300" id="msg" name="msg" scrolling="no" frameborder="0" src="" ></iframe>
      </p></th>
  </tr>
</table>

       </td>
      </tr>
    </table>
    </th>
  </tr>
</table>
      <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <th class="head_menu" scope="col"><table width="900" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <th width="64" scope="col">&nbsp;</th>
              <th width="787" scope="col">&nbsp;</th>
              <th width="49" scope="col">&nbsp;</th>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td align="center"><span class="Texto_14"><strong>&copy;-Diseñado por SIC, Cecytes Esperanza, Sonora.</strong></span><strong><br />
                Derechos Reservados Abril 2012</strong></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table></th>
        </tr>
    </table></th>
  </tr>
</table>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
  </script>
</body>
</html>
