<?php
  define("PI",3.1415926535,TRUE);

  define("site","http://www.google.com",FALSE);

  echo "La constante PI vaut ",PI,"<br />";
  echo "La constante PI vaut ",pi,"<br />";
  if (defined( "PI")) echo "La constante PI est déjà définie","<br />";
  if (defined( "pi")) echo "La constante pi est déjà définie","<br />";
  if(defined( "site")) 
    {
    echo "<a href=\" " ,site, " \">Lien vers mon site </ a><br>";
    echo "<a href=\" " ,SITE, " \">Lien vers mon site </ a>";
    }
?>
