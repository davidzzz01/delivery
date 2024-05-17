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
    #pessoal {
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
        min-height: 100;
        width: 100%;
    }

    .form {
        font-family: 'Courier New', Courier, monospace;
    }

    .input:hover {
        transition: 0.5;
        box-shadow: 1px 1px 6px rgb(66, 168, 241);
    }

    #loading {
        display: none;
    }
</style>
<body>
<div class="container mt-4" style="width: 800px">
    <div class="form-control">
        <h1 style="text-align: center;">Realize seus pedidos</h1>
    </div>
    <form action="pedidos.php" method="post" class="form form-control">
        <label><b>Nome</b></label>
        <input type="text" class="form-control input" name="nome" placeholder="Digite seu nome"></br>
        <label><b>Telefone</b></label>
        <input type="text" class="form-control input" name="telefone" placeholder="Digite seu Telefone"
               style="margin-bottom: 15px;">
        <label><b>Sabores de pizza:</b></label>
        <select class="form-select form-select-lg mb-3" name="pizza">
            <?php foreach ($sabores_pizza as $pizza) { ?>
                <option value="<?php echo $pizza; ?>"><?php echo $pizza; ?></option>
            <?php } ?>
        </select>
        <label><b>Acompanhamentos:</b></label><br>
        <input type="checkbox" name="acompanhamento[]" value="Coca-cola"> Coca-cola<br>
        <input type="checkbox" name="acompanhamento[]" value="Sprite"> Sprite<br>
        <input type="checkbox" name="acompanhamento[]" value="Ketchup"> Ketchup<br>
        <input type="checkbox" name="acompanhamento[]" value="Barbecue"> Barbecue<br>
        <input type="checkbox" name="acompanhamento[]" value="Maionese"> Maionese<br>
        <input type="checkbox" name="acompanhamento[]" value="Molho especial"> Molho especial<br>
        <hr>

        <div class="form-group">
            <div class="row">
                <p><b>Endereço:</b></p>
                <div class="col-3">
                    <div class="d-flex">
                        <label for="cep">CEP:</label>
                        <div class="spinner-border text-primary" role="status" style="width: 15px; height: 15px;"
                             id="loading">
                        </div>
                    </div>
                    <input class="form-control" type="text" id="cep" name="cep" placeholder="Digite seu CEP"
                           onblur="pesquisacep(this.value)">

                </div>


                <div class="col">
                    <label>Endereço:</label>
                    <input class="form-control" id="endereco" type="textarea" disabled>
                </div>
            </div>
        </div>
        <br>
        <input type="submit" class="btn btn-success" onclick="">
    </form>
</div>
<?php include("footer.php") ?>
</body>

<script >
    function pesquisacep(cep) {
        cep = cep.replace(/\D/g, '');

        if (cep != "") {

            var validacep = /^[0-9]{8}$/;


            if (validacep.test(cep)) {
                consultadoCep = true;
                this.mudarEstado("loading");

                fetch(`https://viacep.com.br/ws/${cep}/json/`)
                    .then(response => response.json())
                    .then(data => {
                        let resposta = `${data.logradouro}, ${data.bairro}, ${data.localidade} - ${data.uf}`;
                        document.getElementById('endereco').value = resposta;
                        consultadoCep = false;
                        this.mudarEstado("loading");
                    })
                    .catch(error => {
                        console.error("Erro ao buscar o CEP:", error);
                    });
            } else {
                alert("Formato de CEP inválido.");
            }
        }
    }

    let consultadoCep = false;

    function mudarEstado(el) {
        if (consultadoCep)
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
    }

    document.addEventListener('DOMContentLoaded', function () {
        mudarEstado('loading');
    });

</script>
</html>