<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Densidade</title>
    <script src="assets/js/voltar.js"></script>
</head>
<body>
    <h2>Resultado da Densidade</h2>
    <?php
    if(isset($_POST['massa']) && isset($_POST['volume'])){
        $massa = floatval($_POST['massa']);
        $volume = floatval($_POST['volume']);
        
        // verifica se os valores de massa e volume são válidos (diferentes de zero)
        if($massa != 0 && $volume != 0){
            // calculo da densidade
            $densidade = $massa / $volume;
            echo "<p>A densidade é: " . $densidade ;
        } else {
            echo "<p>Erro: Massa e volume devem ser diferentes de zero.</p>";
        }
    }
    ?>
    <div class="container"> 
            <button onclick="Voltar()" id="btn">Voltar</button>
    </div>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
    * {
    font-family: 'Inter', sans-serif;
    }

    body{
        background-color: #0b3b5b;
    }

    .resultado-php h2 {
        color: white;
        font-size: 20px;
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
</body>
</html>
