
<%

codigo_sessao=session.lcid
session.lcid=1046

ano=request("ano")
if ano="" then ano=  year(date)
%>
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
<table width="100%" border="0" cellspacing="1" cellpadding="1" align="center">
<tr>
	<form action="gerar_calend.asp?ano=<%=a%>" name="form1">
	<td colspan=2 align="center">Ano <%=ano%> -  
		<select name="ano" id="ano" size="1" onChange="javascript: document.form1.submit()">
		<option value="" SELECTED>escolha outro ano</option>
		<%for a=1900 to 3000
			%>			
			<option value="<%=a%>"><%=a%></option>
		<%	next%>	
		</select>
	 </td>
	 </form>
</tr>
<%
col=1


for mes=1 to 12 
	
	linha=0
	
	redim domingos(5)
	redim segundas(5)
	redim tercas(5)
	redim quartas(5)
	redim quintas(5)
	redim sextas(5)
	redim sabados(5)
	
	for dias=1 to 31
		data = (dias &"/" & mes &"/" & ano)
				
		if isdate(data)= true then
			select case weekday(data,1)
				case 1
					domingos(linha)=day(data)
				case 2	
					 segundas(linha)=day(data)
			    case 3
					 tercas(linha)=day(data)
				case 4 
					 quartas(linha)=day(data)
				case 5 
					 quintas(linha)=day(data)
				case 6 	 
					 sextas(linha)=day(data)
				case 7 
					 sabados(linha)=day(data)
					 linha=linha+1	
			end select

		else
			exit for
		end if
	next
	
	
if col=1 then %>
	<tr>
<%end if

%>
<td width="505" align="center" valign="top">
	<center>
		<a href="mes_calend.asp?mes=<%=mes%>&ano=<%=ano%>"><%=monthname(mes)%></a>
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
	<%for lin=0 to linha %>
	<tr>
		<td align="center" <%if trim(domingos(lin))<>"" then %>bgcolor="#C0C0C0" onMouseOver="mOvr(this,'#919FB0')" onMouseOut="mOut(this,'#C0C0C0')"  onclick="mclick(this);"<%end if%>><a href="#"><%=domingos(lin)%></a></td>
		<td align="center" <%if trim(segundas(lin))<>"" then %>bgcolor="#ffffff" onMouseOver="mOvr(this,'#919FB0')" onMouseOut="mOut(this,'#ffffff')"  onclick="mclick(this);"<%end if%>><a href="#"><%=segundas(lin)%></a></td>
		<td align="center" <%if trim(tercas(lin))<>"" then %>bgcolor="#ffffff" onMouseOver="mOvr(this,'#919FB0')" onMouseOut="mOut(this,'#ffffff')"  onclick="mclick(this);"<%end if%>><a href="#"><%=tercas(lin)%></a></td>
		<td align="center" <%if trim(quartas(lin))<>"" then %>bgcolor="#ffffff" onMouseOver="mOvr(this,'#919FB0')" onMouseOut="mOut(this,'#ffffff')"  onclick="mclick(this);"<%end if%>><a href="#"><%=quartas(lin)%></a></td>
		<td align="center" <%if trim(quintas(lin))<>"" then %>bgcolor="#ffffff" onMouseOver="mOvr(this,'#919FB0')" onMouseOut="mOut(this,'#ffffff')"  onclick="mclick(this);"<%end if%>><a href="#"><%=quintas(lin)%></a></td>
		<td align="center" <%if trim(sextas(lin))<>"" then %>bgcolor="#ffffff" onMouseOver="mOvr(this,'#919FB0')" onMouseOut="mOut(this,'#ffffff')"  onclick="mclick(this);"<%end if%>><a href="#"><%=sextas(lin)%></a></td>
		<td align="center" <%if trim(sabados(lin))<>"" then %>bgcolor="#ffffff" onMouseOver="mOvr(this,'#919FB0')" onMouseOut="mOut(this,'#ffffff')"  onclick="mclick(this);"<%end if%>><a href="#"><%=Sabados(lin)%></a></td>
	</tr>
	<%next	%>
	</table>

	</td>
	<%if col=2 then %>	
</tr>
	<% col=1
	else
		col=2
	end if
next
%>
	
</table>

</body>
</html>

<% session.lcid=codigo_sessao%>
