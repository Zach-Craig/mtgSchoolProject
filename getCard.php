<?php
   require '../EchoPHP/api.php';

   $echomtg = new EchoPHP();
   $echomtg->initSession();

   #$echomtg->addCard( 4797, 1, 1.50, '08-20-2015', 0 );
   $myInventory = $echomtg->getInventory();
   print("<pre>".print_r($myInventory,true)."</pre>");
   #print_r($myInventory)   
   
   #phpInfo();
?>