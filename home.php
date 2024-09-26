<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <? require("components/header_links.php") ?>
    <title>Document</title>
</head>

<body id="home" class="bg-black">
    <section class="container chat">
        <div class="row bg-dgray text-light">
            <aside class="col-md-2 col-sm-4 border-right border-neongreen p-0 m-0">
                <nav class="navbar navbar-expand-sm navbar-dark bg-dgray w-100">
                    <!--Menu Hamburguer-->
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navegacao">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!--Navegação-->
                    <div class="collapse navbar-collapse h-100" id="navegacao">
                        <ul class="navbar-nav mx-auto flex-column w-100 h-100">
                            <li class="nav-item mx-2 border-bottom border-neongreen w-100 py-1"><a href="#" class='nav-link text-neongreen w-100 d-inline'>Home</a></li>
                            <li class="nav-item mx-2 border-bottom border-neongreen w-100 py-1"><a href="#" class='nav-link text-neongreen w-100 d-inline'>Quartos</a></li>
                            <li class="nav-item mx-2 border-bottom border-neongreen w-100 py-1"><a href="#" class='nav-link text-neongreen w-100 d-inline'>Sobre</a></li>
                            <li class="nav-item mx-2 border-bottom border-neongreen w-100 py-1 mb-0"><a href="#" class='nav-link text-neongreen w-100 d-inline'>Sobre</a></li>
                            
                        </ul>
                    </div>
                    
                </nav>
            </aside>
            <div class="col-md-10 col-sm-8">
                <div class="row">
                    <div class="col-12 border-bottom border-neongreen">
                        <marquee behavior="infinite" direction="right" class="text-neongreen">"Sonhos se Realizam"</marquee>
                    </div>
                    <div class="col-12 h-100 chat">
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>