<?php session_start();
//llamamos archivo de avariables

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php 
$mail_snd=$_GET["mail1"];
$subjet="Comentario de:  ".$_SESSION["usernom"]." ".$_SESSION["apepat"];
if ($_POST["snd_msg1"])
{
mail($mail_snd,$subjet,$cuerpo);
	}
?>
<form id="form1" name="form1" method="post" action="">
  <table width="275" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <th width="13" scope="col">&nbsp;</th>
      <th width="246" align="left" scope="col"><?php echo " Enviar mail a: ".$mail_snd; ?></th>
      <th width="16" scope="col">&nbsp;</th>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><?php echo $subjet; ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="center"><label for="mail_com"></label>
        <textarea name="mail_com" id="mail_com" cols="30" rows="5"></textarea></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="snd_msg1" id="snd_msg1" value="Enviar" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>