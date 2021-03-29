<?php

 

    session_start();    



    unset($_SESSION['SESS_MEMBER_ID']);

    unset($_SESSION['SESS_FIRST_NAME']);

    unset($_SESSION['SESS_LAST_NAME']);

?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Page de connexion</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="style.css" />
  <style type="text/css">
  
  </style>
</head>
<body>
	<form name="loginform" action="connexion.php" method="post">

<table width="309" border="0" align="center" cellpadding="2" cellspacing="5">

  <tr>

    <td colspan="2">



    </td>

  </tr>

  <tr>

    <td width="116"><div align="right">Identifiant</div></td>

   <td width="177"><input name="username" type="text" /></td>

  </tr>

  <tr>

    <td><div align="right">Mot de passe</div></td>

    <td><input name="mdp" type="password" /></td>

  </tr>

  <tr>

    <td><div align="right"></div></td>

    <td><input name="" type="submit" value="Connexion" /><a href="inscription.php"><input type="button" value="S'inscrire"  </td




></a>
   
  </tr>

</table>

</form>
