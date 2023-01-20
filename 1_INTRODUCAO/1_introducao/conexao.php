<?php
try {
  $conn = new PDO('mysql:host=localhost;dbname=sys', 'root', 'BeWise*2022a');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Teker, seu serviço foi conectado com sucesso!";
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>