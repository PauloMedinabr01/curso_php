<?php

// Incluindo arquivos que não existem

//include_once 'teste.php';

?>

<?php

include_once 'teste2.php'; // arquivo será incluido apenas uma vez
include_once 'teste2.php';

include 'teste2.php'; // arquivo será incluido mais de uma vez
include 'teste2.php'; // arquivo será incluido mais de uma vez

// arquivo que não existe - erro fatal e interrompe o script
// require_once 'teste3.php';

require_once 'teste3.php';

?>

<p>Testando código após o include_once!</p>
