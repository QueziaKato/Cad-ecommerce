<?php
include_once("controller/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=decive-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <link rel="stylesheet" href="css/style.css">  
</head>
<body>
    <header>
          <div class="center">
              <h1>Cadastro de Produto</h1>
              <a href="index.php" target="self">Voltar</a>
</div>
</header>
<section id="produtos">
    <form action="insere-poduto.php " method="post">
        Nome: <input type="text" name="nome"><br>
        Descrição: <input type="text" name="descricao"><br>
        Estoque: <input type="number" name="estoque"><br>
        Preço: <input type="number" name="preco" min="0.00" max="10000.00" step="0.01"><br>
        Categoria:
       <select name="seleciona_categoria" id="">
        <option value="">Selecione</option>
        <?php
        $resultado_categoria= "SELECT * FROM categoria";
        $resultcategoria = mysqli_query($mysqli, $resultado_categoria);
        while($row_categotias = mysqli_fetch_assoc($resultcategoria)){
?>
 
<option value=" <?php echo $row_categotias['IDCATEGORIA']; ?> "><?php echo $row_categotias['DESCRICAO']; ?></option>
 
<?php
        }
        ?>
</select>
      Marca:
<select id="seleciona_marca" name="seleciona_marca">
<option value="">Selecione ou digite uma nova marca</option>
<?php
                $query_marcas = "SELECT * FROM marcas";
                $result_marcas = mysqli_query($mysqli, $query_marcas);
                while ($row_marca = mysqli_fetch_assoc($result_marcas)) {
                    echo '<option value="' . $row_marca['IDMARCA'] . '">' . $row_marca['NOME'] . '</option>';
                }
                ?>
</select>
<input type="text" id="nova_marca" name="seleciona_marca" placeholder="Nova marca"><br>
 
            <input type="submit" value="Cadastrar">
</form>
</section>
</body>
</html>
