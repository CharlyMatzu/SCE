<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Untitled</title>
</head>

<body>
<%

function intervalo_datas(data)

	dia_semana=( weekday(data) )-1
	if dia_semana<>0 then
		dia_ini = dateadd("d", - dia_semana, data )
	else
		dia_ini = data
	end if

	dia_fim = dateadd("d",6,dia_ini)
	
	datas1 = ""& dia_ini & ","& dia_fim &""
	datas = split(datas1, "," ) 
	
	intervalo_datas = datas
	
end function

	intervalo = intervalo_datas(date)
	dia_ini = intervalo(0)
	dia_fim = intervalo(1)


%>


</body>
</html>
