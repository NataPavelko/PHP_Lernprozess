//Geben Sie die LOG-Datei von heute als HMTL-Tabelle aus.

<?php


$file1=fopen("test.html","w");
$text="bla-bla-bla";
fwrite( $file1, $text );
fclose( $file1 );