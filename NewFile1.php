<?php

$pila = array ();

array_push ($pila, "María");
array_push ($pila, "Carlos");
array_push ($pila, "Ana");
array_push ($pila, "Luis");
array_push ($pila, "Sofía");
array_push ($pila, "Pedro");
array_push ($pila, "Lucía");
array_push ($pila, "Miguel");
array_push ($pila, "Elena");

$ELEMENTO = array_pop($pila);

echo "El último elemento ingresado a la pila es: ". $ELEMENTO;

?>