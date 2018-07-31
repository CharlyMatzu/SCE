<html>
<head>
	<title>Página nova</title>
	<META HTTP-EQUIV="Expires" CONTENT="-1">
	<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache, must-revalidate">
	<META HTTP-EQUIV="PRAGMA" CONTENT="no-cache">
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=ISO-8859-1">
	<META NAME="keywords" CONTENT="palavras chaves">
	<META NAME="description" CONTENT="Texto descritivo do site">        
</head>
<body>
Exemplo 1. getdate() exemplo 
<br>
<br>
<?php


//$data= gmmktime (0,0,0, 1,26,2004);
$data = mktime(0, 0, 0, 1, 18, 2004);
$today = getdate($data); 
print_r($today["wday"])."<br>";
?>  
 

</body>
</html>
