<? 
	if (isset($ano)=="") $ano= date("Y");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Calendário </title>
	<script language='javascript'>
function mOvr(src,clrOver) 
{
	if (!src.contains(event.fromElement)) {
		src.style.cursor = 'hand';
		src.bgColor = clrOver; 				
		}
} 
function mOut(src,clrIn) 
{
	if (!src.contains(event.toElement)) {
		src.style.cursor = 'default';
		src.bgColor = clrIn; 
		
		}
}
function mclick(src)
{
 if(event.srcElement.tagName=='TD')
 {
  src.children.tags('a')[0].click();
 }
}
</script>

</head>

<body>
<table width="100?" border="0" cellspacing="1" cellpadding="1" align="center">
<tr>
	<form action="gerar_calend.php" name="form1">
	<td colspan=2 align="center">Ano <?=$ano?> -  
		<select name="ano" id="ano" size="1" onChange="javascript: document.form1.submit()">
		<option value="" SELECTED>escolha outro ano</option>
		<? for ($a=2000;$a<2004;$a++ )
		{	?>			
			<option value="<?=$a?>"><?=$a?></option>
		<?}?>	
		</select>
	 </td>
	 </form>
</tr>
<?
//exit();
$col=1;
for ($mes=1;$mes<=1;$mes++)
	{
	$linha=0;
	
	$domingos = array("", "", "", "", "", "");
	$segundas = array("", "", "", "", "", "");
	$tercas = array("", "", "", "", "", "");
	$quartas = array("", "", "", "", "", "");
	$quintas = array("", "", "", "", "", "");
	$sextas = array("", "", "", "", "", "");
	$sabados = array("", "", "", "", "", "");
	
	for ($dias=1;$dias<=31;$dias++)
	{
		if ( checkdate($mes, $dias, $ano) )
		{
			$data = mktime(0, 0, 0, $mes, $dias, $ano);
			$today = getdate($data); 
			$dia_semana = $today["wday"];
			switch ($dia_semana)
			{
				case 0:
					$domingos[$linha]=$today["mday"];
					break;
				case 1:
					 $segundas[$linha]=$today["mday"];break;
			    case 2:
					 $tercas[$linha]=$today["mday"];break;
				case 3:
					 $quartas[$linha]=$today["mday"];break;
				case 4:
					 $quintas[$linha]=$today["mday"];break;
				case 5:
					 $sextas[$linha]=$today["mday"];break;
				case 6:
					 $sabados[$linha]=$today["mday"];$linha++;break;
			}
			
		}
		else
		{	
			break;
		}
	}
	
	
if ($col==1){ ?>
	<tr>
<?}
	$data = mktime(0, 0, 0, $mes, 01, $ano);
	$today = getdate($data); 
	$mes_texto= $today["month"];
?>
<td width="505" align="center" valign="top">
	<center>
		<a href="mes_calend.asp?mes=<?=$mes?>&ano=<?=$ano?>"><?=$mes_texto?></a>
	</center>
	<table width="300" border="1" cellspacing="0" cellpadding="0" align="center">
	<tr bgcolor="#008080">
		<td align="center" width="43">Dom</td>
		<td align="center" width="43">Seg</td>
		<td align="center" width="43">Ter</td>
		<td align="center" width="43">Qua</td>
		<td align="center" width="43">Qui</td>
		<td align="center" width="43">Sex</td>
		<td align="center" width="43">Sab</td>
	</tr>
	<?for ($lin=0;$lin<=$linha;$lin++){ ?>
	<tr>
		<td align="center" <?if (trim($domingos[$lin])!=""){ ?>bgcolor="#C0C0C0" onMouseOver="mOvr(this,'#919FB0')" onMouseOut="mOut(this,'#C0C0C0')"  onclick="mclick(this);"<?}?>><a href="#"><?=$domingos[$lin]?></a></td>
		<td align="center" <?if (trim($segundas[$lin])!="") { ?>bgcolor="#ffffff" onMouseOver="mOvr(this,'#919FB0')" onMouseOut="mOut(this,'#ffffff')"  onclick="mclick(this);"<?}?>><a href="#"><?=$segundas[$lin]?></a></td>
		<td align="center" <?if (trim($tercas[$lin])!="") { ?>bgcolor="#ffffff" onMouseOver="mOvr(this,'#919FB0')" onMouseOut="mOut(this,'#ffffff')"  onclick="mclick(this);"<?}?>><a href="#"><?=$tercas[$lin]?></a></td>
		<td align="center" <?if (trim($quartas[$lin])!="") { ?>bgcolor="#ffffff" onMouseOver="mOvr(this,'#919FB0')" onMouseOut="mOut(this,'#ffffff')"  onclick="mclick(this);"<?}?>><a href="#"><?=$quartas[$lin]?></a></td>
		<td align="center" <?if (trim($quintas[$lin])!="") { ?>bgcolor="#ffffff" onMouseOver="mOvr(this,'#919FB0')" onMouseOut="mOut(this,'#ffffff')"  onclick="mclick(this);"<?}?>><a href="#"><?=$quintas[$lin]?></a></td>
		<td align="center" <?if (trim($sextas[$lin])!="") { ?>bgcolor="#ffffff" onMouseOver="mOvr(this,'#919FB0')" onMouseOut="mOut(this,'#ffffff')"  onclick="mclick(this);"<?}?>><a href="#"><?=$sextas[$lin]?></a></td>
		<td align="center" <?if (trim($sabados[$lin])!="") { ?>bgcolor="#ffffff" onMouseOver="mOvr(this,'#919FB0')" onMouseOut="mOut(this,'#ffffff')"  onclick="mclick(this);"<?}?>><a href="#"><?=$sabados[$lin]?></a></td>
	</tr>
	<?}?>
	</table>

	</td>
	<?if ($col==2){ ?>	
</tr>
	<? $col=1;
	}
	else
	{
		$col=2;
	}
}
?>
	
</table>

</body>
</html>


