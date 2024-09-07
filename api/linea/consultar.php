<?php
header('Content-Type: application/json');

require_once '../../modelo/demostracion.php';
require_once '../../modelo/linea.php';
require_once '../../modelo/tasa.php';
require_once 'respuesta/consultarRespuesta.php';

$resp = new ConsultarRespuesta();

$t= new Tasa();
$t->PlazoDesde= 0;
$t->PlazoHasta= 48;
$t->Tem= 47671;
$t->Tna= 58;
$t->ListTasaScore= 'null';
      

$d= new Demostracion();
$d->Codigo = '1';
$d->Descripcion = 'DNI';

$l= new Linea();
$l->Id = '222';
$l->Codigo= '752';
$l->Tasa= $t;
$l->Codigo= 1;
$l->Demostracion = $d;
$l->Tope= 250000;

$resp->Linea = $l; 
$resp->ContieneError= 'false';

echo json_encode($resp);