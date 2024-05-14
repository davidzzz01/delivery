<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<header class="bg-light">
  <div class="container text-center">
    <h1>Delivery</h1>
  </div>
</header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Página Inicial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sobre_empresa.php">Sobre Nós</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="produtos.php">Catalogo de produtos</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
</div>-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<nav class="nav">
    <div class="container">
        <div class="logo">
            <a href="index.php">Delivery</a>
        </div>
        <div id="mainListDiv" class="main_list">
            <ul class="navlinks">
            <li><a href="login.php">Login</a></li>
            </ul>
        </div>
        <span class="navTrigger">
            <i></i>
            <i></i>
            <i></i>
        </span>
    </div>
</nav>

<section class="home">
</section>
<div style="height: 1000px">

<!-- Jquery needed -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
<script>
    $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
            $('.nav').addClass('affix');
            console.log("OK");
        } else {
            $('.nav').removeClass('affix');
        }
    });
</script>