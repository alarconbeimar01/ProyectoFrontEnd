<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<form action="dos.php" method="post"
 name="form1">
 <input type="password" name="<? $pas = "pas"; echo
 $pas ?>" id="<? echo $pas; ?>" />
 <input type="submit" name="boton" value="enviar" onclick="<? $pas =crypt('','Beimar'); ?>"  />
 </form>
</body>
</html>