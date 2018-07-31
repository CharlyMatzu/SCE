<%
	dia=request("dia")
	mes=request("mes")
	ano=request("ano")
%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title></title>
</head>
<body>
<table width="70%" border="1" cellspacing="0" cellpadding="0" align="center">
	<TR>
		<td width="10%">Hora</td>
		<TD>Evento</TD>
	</TR>
	<%for a=0 to 23 
		hora=a
		if hora<10 then 
			hora="0"&a
		else
		
		end if	
	%>
	<tr bgcolor="#C0C0C0">
		<TD><%=hora%>:00</TD>
		<TD>Evento</TD>
	</TR>
	<%next%>		
</table>

</body>
</html>
