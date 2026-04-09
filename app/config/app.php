<?php
   $host = "LocalHost";
   $dbFlow = "Flow_Banco";
   $user = "root";
   $password = "";

   try
   {
    $pdo = new PDO("mysql:host=$host;dbname=$dbFlow;charset=utf8",$user, $password);

    //Função de configuração de erros como exceção
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo "Conectado com Sucesso!!";
   }
   catch(PDOException $e)
   {
        echo "Erro na conexão: " . $e->getMessage();
   }
   
?>
