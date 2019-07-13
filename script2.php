<?php
    $local = $_POST["local"];

    $file = fopen("violencia-domestica-df.csv", "r");

    $dados = fgetcsv($file);

    $soma = 0;

    while ($dados) {
        if($dados[0] == $local)
            break;
        $dados = fgetcsv($file);
    }

    if (!$dados) {
        echo "<p>Dados nao encontrados</p>";
        die();
    }
    
    echo "<p>Local: $dados[0]</p><br/>---Dados por ano---";
    $ano = 2011;
    for ($i = 1; $i < count($dados); $i++) {
        echo "<p>$ano: $dados[$i]</p>";
        $soma += $dados[$i];
        $ano++;
    }
    
    echo "<p>Soma dos dados = $soma</p>";
?>




