<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>teste de calendario</title>
	<script>
		function get_data(form1, campo)
		{
			a=window.open("calendario.php?campo="+ form1+"."+campo+"","","width=320, height=160");
		}
	</script>
</head>

<body>
<form action="" method="post" name="form1" id="form1">
	<input type="text" name="data" size="15" maxlength="15">&nbsp;<input type="button" value="pegar data" onclick="get_data(this.form.name, this.form.data.name)">
</form>
<table width="10" height="10">
<tr>
	<td></td>
</tr>
</table>


</body>
</html>
