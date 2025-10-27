<?php
    if (php_sapi_name() == "cli") {
        // Si es CLI (terminal), usa "\n"
        $newline = "\n";
    } else {
        // Si es navegador, usa "<br>"
        $newline = "<br>";
    }

    echo "Hola, Mundo!" . $newline;
    echo "Este mensaje se adapta al entorno de ejecución." . $newline;
    echo "El entorno en el que se ejecuta PHP es " . php_sapi_name();
?>