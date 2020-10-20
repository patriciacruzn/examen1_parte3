<?php 

 require ('modelo/conexion.inc.php');
 $con=new Conexion();
 $usuarios=$con->getUsuarios();
 $notas=$con->getNotas();
 $aproCH=$con->getAprobadosCH();
 $aproLP=$con->getAprobadosLP();
 $aproCB=$con->getAprobadosCB();
 $aproOR=$con->getAprobadosOR();
 $aproPT=$con->getAprobadosPT();
 $aproTJ=$con->getAprobadosTJ();
 $aproSC=$con->getAprobadosSC();
 $aproBE=$con->getAprobadosBE();
 $aproPD=$con->getAprobadosPD();

 require ('vista/v_verusuarios.php');
 ?>