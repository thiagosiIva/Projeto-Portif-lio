<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--CSS-->
    <link rel="stylesheet" href="./style/style.css">
<!--aqui começa o bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!--fonte google-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <title>Calculadora</title>
</head>
<body>

<h1>Calculadora</h1>

<div id="calc">
    <div id="result">
            <h1>Resultado</h1>
    </div>
    <input class="form-control" type="number" placeholder="Digite um numero" aria-label="Digite um numero">

    <select class="form-select" aria-label="Default select example">
        <option selected>Selecione o tipo de operação</option>
         <option value="1">+</option>
        <option value="2">-</option>
        <option value="2">*</option>
         <option value="3">/</option>
    </select>

    <input class="form-control" type="number" placeholder="Digite um numero" aria-label="Digite um numero">

    <button type="button" class="btn btn-primary">=</button>

</div>
    
</body>
</html>