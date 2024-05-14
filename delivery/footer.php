<style>
.rodape{
    background-color: #eeb230;
    color: white;
    height: auto;
    width: 100%;
    font-size: 14px;
    font-family: helvetica;
}
.rodape a{
    text-decoration: none;
    color: white;
}
.rodape p{
    margin-bottom: 5px;
}
.rodape-div{
    display: flex;
    flex-wrap: wrap;
    width:100%;
    margin: auto;
    align-items: stretch;
    padding: 60px 10px 40px 10px;
}
.rodape-div-1, .rodape-div-2, .rodape-div-3, .rodape-div-4{
    display: flex;
    width: calc(100% / 4 - 20px);
    padding: 10px;
}
.rodape span{
    font-size: 20px;
    color: white;
}
.rodape-direitos{
    width: 100%;
    background-color: black;
    padding: 10px;
    margin: 0px;
    text-align: center;
}
/*mobile*/
@media (max-width: 768px) {
    .rodape-div-1, .rodape-div-2, .rodape-div-3, .rodape-div-4{
        width: calc(50% - 20px);
        padding: 10px;
    }
    .rodape-div{
        padding: 60px 0px 40px 0px;
    }
}
</style>
<footer class="rodape" id="contato">
    <div class="rodape-div">

        <div class="rodape-div-1">
            <div class="rodape-div-1-coluna">
                <!-- elemento -->
                <span><b>LOGO</b></span>
                <p>SIA Trecho 5 lote 000 bloco z sala 900 - Guará, Brasília - DF, 70000-010</p>
            </div>
        </div>

        <div class="rodape-div-2">
            <div class="rodape-div-2-coluna">
                <!-- elemento -->
                <span><b>Contatos</b></span>
                <p>contato@na.na</p>
                <p>+55 63 99200-0000</p>
            </div>
        </div>

        <div class="rodape-div-3">
            <div class="rodape-div-3-coluna">
                <!-- elemento -->
                <span><b>Links</b></span>
                <p><a href="produtos.php">Produtos</a></p>
                <p><a href="index.php">Incial</a></p>
                <p><a href="sobre_empresa.php">Sobre</a></p>
            </div>
        </div>

        <div class="rodape-div-4">
            <div class="rodape-div-4-coluna">
                <!-- elemento -->
                <span><b>Outros</b></span>
                <p>Políticas de Privacidade</p>
            </div>
        </div>

    </div>
    <p class="rodape-direitos"  style="backgroun-color:#ffc107">Copyright © 2023 – Todos os Direitos Reservados.</p>
</footer>