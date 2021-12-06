<?php
 $str = "dog";
 echo md5($str);
 echo "<br>";

 echo sha1($str);
 echo "<br>";

 echo crypt($str,"dog");
 echo "<br>";

 $hash = password_hash($str,PASSWORD_DEFAULT);
 echo password_hash($str,PASSWORD_DEFAULT);
 echo "<br>";

 echo password_verify($str,$hash);