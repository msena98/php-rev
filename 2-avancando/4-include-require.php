<?php

/* include/require
*
* Caso o arquivo não seja encontrado, include irá lançar um aviso (E_WARNING)
* enquanto require irá lançar um erro e não permitirá a execução do programa.
*/

include('1-array.php');
include_once('1-array.php'); // caso o arquivo já tenha sido incluso, o include_once não o inclui novamente

require('2-foreach.php');
require_once('2-foreach.php'); // caso o arquivo já tenha sido incluso, o require_once não o inclui novamente

?>