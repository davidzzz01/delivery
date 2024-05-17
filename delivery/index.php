<?php 
    $sabores_pizza = array(
    "Margarita",
    "Calabresa",
    "Quatro Queijos",
    "Portuguesa",
    "Frango com Catupiry",
    "Pepperoni",
    "Marguerita",
    "Napolitana",
    "Vegetariana",
    "Toscana"
);

$acompanhamentos = array(
    "Coca-Cola",
    "Sprite",
    "Molhos Especiais",
    "Ketchup",
    "Maionese"
);

include("header.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #pessoal{
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
        min-height: 100;
        width: 100%;
    }
    .form{
        font-family: 'Courier New', Courier, monospace;
    }
    .input:hover{
        transition: 0.5;
        box-shadow: 1px 1px 6px rgb(66, 168, 241);
    }
</style>
<body>
    <div class="form-control" >
    <h1 style="text-align: center;">Realize seus pedidos</h1>
    </div>
    <form action="pedidos.php" method="post" class="form form-control">
    <label><b>Nome</b></label>
    <input type="text" class="form-control input" name="nome" placeholder="Digite seu nome"></br>
    <label><b>Telefone</b></label>
    <input type="text" class="form-control input" name="telefone" placeholder="Digite seu Telefone"style="margin-bottom: 15px;">
    <label><b>Sabores de pizza:</b></label>
<select class="form-select form-select-lg mb-3" name="pizza">
    <?php foreach($sabores_pizza as $pizza) { ?>
        <option value="<?php echo $pizza; ?>"><?php echo $pizza; ?></option >
    <?php } ?>
</select>
        <label><b>Acompanhamentos:</b></label><br>
        <input type="checkbox" name="acompanhamento" value="Coca-cola"> Coca-cola<br>
        <input type="checkbox" name="acompanhamento" value="Sprite"> Sprite<br>
        <input type="checkbox" name="acompanhamento" value="Ketchup"> Ketchup<br>
        <input type="checkbox" name="acompanhamento" value="Barbecue"> Barbecue<br>
        <input type="checkbox" name="acompanhamento" value="Maionese"> Maionese<br>
        <input type="checkbox" name="acompanhamento" value="Molho especial"> Molho especial<br><hr>

        <div class="form-group">
            <div class="row">
                <p><b>Endereço:</b></p>
                <div class="col">
                    <label for="cep">CEP:</label>
                    <input class="form-control" type="text" id="cep" name="cep" placeholder="Digite seu CEP" onblur="pesquisacep(this.value)">
                </div>
                <div class="col">
                    <label for="endereco">Rua:</label>
                    <input class="form-control" type="text" id="rua" name="rua" placeholder="Digite sua rua">
                </div>
                <div class="col">
                    <label for="bairro">Bairro:</label>
                    <input class="form-control" type="text" id="bairro" name="bairro" placeholder="Digite seu bairro">
                </div>
                <div class="col">
                    <label for="cep">Cidade:</label>
                    <input class="form-control" type="text" id="cidade" name="cidade" placeholder="Digite  sua Cidade">
                </div>
            </div>
        </div>
        <br>
        <input type="submit" class="btn btn-success" onclick="">
 </form>
<?php include("footer.php")?>
</body>

<script>
const form=document.querySelector('#form-group');
const cep=document.querySelector('#cep');
const rua=document.querySelector('#rua');
const bairro=document.querySelector('#bairro');
const cidade=document.querySelector('#cidade');

</script>
</html>