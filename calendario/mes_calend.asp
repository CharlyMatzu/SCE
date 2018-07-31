<!--#include file="ver_eventos.inc"-->
<%
codigo_sessao=session.lcid
session.lcid=1046
%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title></title>
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
<%

mes=request("mes")
ano=request("ano")

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
%>
	<table width="80%" height="100%" border="1" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td colspan="7" height="12">
			<center>
				<a href="mes_calend.asp?mes=<%=mes%>&ano=<%=ano%>"><%=monthname(mes)%></a>
			</center>
		</td>
	</tr>
	<tr bgcolor="#008080">
		<td width="43" height="12" align="center">Dom</td>
		<td align="center" height="12" width="43">Seg</td>
		<td align="center" height="12" width="43">Ter</td>
		<td align="center" height="12" width="43">Qua</td>
		<td align="center" height="12" width="43">Qui</td>
		<td align="center" height="12" width="43">Sex</td>
		<td align="center" height="12" width="43">Sab</td>
	</tr>
	<%for lin=0 to linha %>
	<tr>
		<td align="center" valign="top" <%if trim(domingos(lin))<>"" then %> bgcolor="#C0C0C0"<%end if%>>
			<%if trim(domingos(lin))<>"" then  %>			
				<div align="left">			
					<font face="Verdana" size="1"><a href="dia_calend.asp?dia=<%=domingos(lin)%>&mes=<%=request("mes")%>&ano=<%=request("ano")%>"><%=domingos(lin)%></a> - <a href="inc_calend.asp?dia=<%=domingos(lin)%>&mes=<%=request("mes")%>&ano=<%=request("ano")%>">incluir</a></font>
				</div>
			<%	
				ver_eventos domingos(lin),mes, ano				
			end if%>	
		</td>
		<td align="center" valign="top bgcolor="#ffffff">
			<%if trim(segundas(lin))<>"" then  %>			
				<div align="left">			
					<font face="Verdana" size="1"><a href="dia_calend.asp?dia=<%=segundas(lin)%>&mes=<%=request("mes")%>&ano=<%=request("ano")%>"><%=segundas(lin)%></a> - <a href="inc_calend.asp?dia=<%=segundas(lin)%>&mes=<%=request("mes")%>&ano=<%=request("ano")%>">incluir</a></font>
				</div>				
			<% ver_eventos segundas(lin),mes, ano	
			end if%>	
		</td>
		<td align="center" valign="top" bgcolor="#ffffff" >
			<%if trim(tercas(lin))<>"" then  %>			
				<div align="left">			
					<font face="Verdana" size="1"><a href="dia_calend.asp?dia=<%=tercas(lin)%>&mes=<%=request("mes")%>&ano=<%=request("ano")%>"><%=tercas(lin)%></a> - <a href="inc_calend.asp?dia=<%=tercas(lin)%>&mes=<%=request("mes")%>&ano=<%=request("ano")%>">incluir</a></font>
				</div>				 
			<% ver_eventos tercas(lin),mes, ano	
			end if%>	
		</td>
		<td align="center" valign="top" bgcolor="#ffffff">
			<%if trim(quartas(lin))<>"" then  %>			
				<div align="left">			
					<font face="Verdana" size="1"><a href="dia_calend.asp?dia=<%=quartas(lin)%>&mes=<%=request("mes")%>&ano=<%=request("ano")%>"><%=quartas(lin)%></a> - <a href="inc_calend.asp?dia=<%=quartas(lin)%>&mes=<%=request("mes")%>&ano=<%=request("ano")%>">incluir</a></font>
				</div>
			<%	ver_eventos quartas(lin),mes, ano	
			end if%>	
			
		</td>
		<td align="center" valign="top" bgcolor="#ffffff">
		<%if trim(quintas(lin))<>"" then  %>			
				<div align="left">			
					<font face="Verdana" size="1"><a href="dia_calend.asp?dia=<%=quintas(lin)%>&mes=<%=request("mes")%>&ano=<%=request("ano")%>"><%=quintas(lin)%></a> - <a href="inc_calend.asp?dia=<%=quintas(lin)%>&mes=<%=request("mes")%>&ano=<%=request("ano")%>">incluir</a></font>
				</div>
			<% ver_eventos quintas(lin),mes, ano	
			end if%>	
		</td>
		<td align="center" valign="top" bgcolor="#ffffff" >
			<%if trim(sextas(lin))<>"" then  %>			
				<div align="left">			
					<font face="Verdana" size="1"><a href="dia_calend.asp?dia=<%=sextas(lin)%>&mes=<%=request("mes")%>&ano=<%=request("ano")%>"><%=sextas(lin)%></a> - <a href="inc_calend.asp?dia=<%=sextas(lin)%>&mes=<%=request("mes")%>&ano=<%=request("ano")%>">incluir</a></font>
				</div>
			<% ver_eventos sextas(lin),mes, ano	
			end if%>	
		</td>
		<td align="center" valign="top" bgcolor="#ffffff">
			<%if trim(sabados(lin))<>"" then  %>			
				<div align="left">			
					<font face="Verdana" size="1"><a href="dia_calend.asp?dia=<%=sabados(lin)%>&mes=<%=request("mes")%>&ano=<%=request("ano")%>"><%=sabados(lin)%></a> - <a href="inc_calend.asp?dia=<%=sabados(lin)%>&mes=<%=request("mes")%>&ano=<%=request("ano")%>">incluir</a></font>
				</div>
			<%ver_eventos sabados(lin),mes, ano	
			end if%>	
		</td>
	</tr>
	<%next	%>
	</table>


</body>
</html>

<% session.lcid=codigo_sessao%>