<?php



session_start();
if (isset($_GET['limpar'])){
    unset($_SESSION['buy']);
}



$camisas = array(
['name'=>'camisa 01', 'image'=>'uploads/tb-img-01.jpg', 'price'=>'55.9'],
['name'=>'camisa 02', 'image'=>'uploads/tb-img-02.jpg', 'price'=>'79.9'],
['name'=>'camisa 03', 'image'=>'uploads/tb-img-03.jpg', 'price'=>'45.9']
);



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Loja Senac</title>



<link rel="shortcut icon" href="images/logo.png">
<link rel="stylesheet" href="css/style.css">



<!-- boostrap -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
<nav class="navbar navbar-light bg-danger">
<div class="container">
<a href="#" class="navbar-brand">
<img src="images/logo.png" alt="Loja Senac" width="50" height="50">
</a>
</div>
</nav>
<div class="card-group text-center container">



<?php foreach($camisas as $key => $value): ?>
<div class="card">
<img src="<?= $value['image'] ?>" alt="<?= $value['name'] ?>">
<div class="card-body">
<h5><?= $value['name'] ?></h5>
<p>R$ <?= $value['price'] ?></p>
<a href="?comprar=<?php echo $key ?>" class="btn btn-warning">COMPRAR</a>
</div>
</div>
<?php endforeach; ?>

</div>
<div class="container">
<?php
if (isset($_GET['comprar'])) {
$idCamisa = (int)$_GET['comprar'];
if (isset($camisas[$idCamisa])) {
if (isset($_SESSION['buy'][$idCamisa])) {
$_SESSION['buy'][$idCamisa]['quant']++;
}else{
$_SESSION['buy'][$idCamisa] = array('quant' => 1, 'name' =>$camisas[$idCamisa]['name'], 'price'=>$camisas[$idCamisa]['price']);
}
echo '<script>alert("Camisa adicionada ao carrinho")</script>';
}else{
echo "Produto não existe";
}
}
?>
<h2>Carrinho</h2>
<?php
if (isset($_SESSION['buy'])) {
foreach ($_SESSION['buy'] as $key => $value) {
echo "<p>Nome: ".$value['name']."| Quant.: ".$value['quant']." | Preço: ".$value['price']*$value['quant'];
}
}else{
echo "O carrinho está vazio";
}

?>
<p><a href="?limpar" class="btn btn-secondary">LIMPAR CARRINHO</a></p>
</div>

<?php
    $total = [
		       'quants' => 0,
		       'prices' => 0
		    ];
if(isset($_SESSION['buy']))
	foreach ($_SESSION['buy'] as $key) {
		$total['quants'] = $total['quants'] + $key['quant']; 
		$total['prices'] = $total['prices'] + $key['price'] * $key['quant']; 
	}
echo $total['quants']  . ' produtos  por R$ ' . $total['prices'];
?>
</body>
</html>