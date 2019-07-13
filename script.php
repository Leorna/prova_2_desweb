<?php
    $ano = $_GET["ano"];

    $file = fopen('violencia-domestica-df.csv', 'r');
    $dados = fgetcsv($file);
    
    $index = 0;
    foreach($dados as $dado) {
        if($dado != $ano)
            $index++;
        else
            break;
    }

    $dados = fgetcsv($file);
    while($dados) {
        echo "<p>Local: $dados[0], Ocorrência no ano de $ano: $dados[$index]</p>";
        $dados = fgetcsv($file);
    }

    fclose($file);
?>