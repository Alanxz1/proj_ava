<script src="assets/js/voltar.js"></script>
<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $repeticoes = $_POST["repeticoes"];

        echo "<div class='resultado-php'>";
        echo "<h2>Dados:</h2>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Sobrenome: $sobrenome</p>";
        echo "<p>Número de Repetições: $repeticoes</p>";
        echo "<h2>Resultado da Repetição:</h2>";
        echo "<ol>";
    for ($i = 1; $i <= $repeticoes; $i++) {
         if ($i % 2 == 1) { // Se o número de repetições é ímpar
        echo "<li>$nome</li>";
    } else {
        echo "<li>$sobrenome</li>";
        }
         }
    echo "</ol>";
     echo "</div>";
    }
?> 
<!DOCTYPE html>
   <body>
        <div class="container"> 
            <button onclick="Voltar()" id="btn">Voltar</button>
        </div>
   </body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
    * {
    font-family: 'Inter', sans-serif;
    }

    body{
        background-color: #0b3b5b;
    }

    .resultado-php {
        background-color: #1679AB;
        padding: 15px;
        text-align: center;
        margin: 100px;
        border-radius: 35px;
        
    }

    .resultado-php h2 {
        color: #fff;
        font-size: 20px;
    }

    .resultado-php p {
        font-style: italic;
    }

    .resultado-php ol {
        list-style-type: decimal; 
        margin: 0 auto; 
        max-width: 400px;
        text-align: left; 
        padding-left: 0; 
    }

    .resultado-php li {
        color: #000;
        text-align: center;
    }
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #btn {
        padding: 15px 25px;
        font-size: 20px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #FDA403;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #E8751A;
    }

    #btn:hover {
        background-color: #E8751A;
        cursor: pointer;
    }
    #btn:active {
        background-color: #E5C287;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }
</style>
