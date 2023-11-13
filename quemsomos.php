<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>HOME</title>
    <!-- Links do BootStrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Link do css -->
    <?php
    include 'estilo.php';
    ?>
    <script src="js/validate.js"></script>
    <script src="js/inputMask.js"></script>
    <script src="js/mascaraTelefone.js"></script>
</head>
<body>
   <div class="topo">
    <!-- Código de JavaScript do Bootstrap -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Login -->
    <?php
       include 'loginhome.php';
    ?>
    <!-- Fim do Login -->
    <!--- Logo -->
    <?php
       include 'logo.php';
    ?>
    <!-- Fim da Logo -->

    </div>
    <div id="container">
    <!--Menu-->
    <?php
    include 'menu.php';
    ?>
    <!-- Final do menu -->
    
    <div class="container mt-5 mb-5" id="container-pedidos">
    <h2 class="quemsomos text-center">Quem Somos</h2>
    <hr class="linha cor-botao">
    <style>
            .vl {
                
                border-left: 3px solid lightgray;
                height: 100%;
            }
        </style>
            <div class="row">
                <div class="col-md-6">
                    <form class="container text-center">
                        <img src="img/social/luis.png" alt="">
                        <p>Luís Salomão Veríssimo é o dono e fundador da empresa Veríssimos Personalizações</p>
                    </form>
                </div>     
                           
                
             <div class="col-md-6 vl">
             
                <p class="text-justify">
                Somos uma empresa de personalização de produtos, nossa preocupação é oferecer um produto de qualidade, para momentos especiais, procuraramos sempre oferecer produtos que possam proporcionar a satisfação e momentos inesquecíveis em ocasiões especiais e marcantes da nossa vida, presentear alguém é demonstração de carinho, atenção, respeito e admiração, é assim que tratamos nossos clientes. 
                </p>
                <p class="text-center">
                Missão: Sempre buscar satisfação do cliente, proporcionando-os uma excelente experiência em relação a compra de nossos produtos, uma magnifica qualidade e um preço acoplável a sua renda.
                </p>
               <p class="text-center">
                Visão: Buscamos sempre a melhoria para uma maior qualidade ao consumidor. Temos como meta uma maior amplitude produtiva e uma excelente qualidade para a máxima comodidade do consumidor.
               </p>
             </div>
            </div>
            </div>
            </div>
    <!-- rodapé -->
    <footer class="cor-botao p-4" >
    <div class="text-center text-white">
        <p>Banco de Areia, Mesquita - RJ, 26564-000</p>
        <p>Copyright © 2018 - Todos os direitos reservados.</p> 
    </div>   
    <div class="botao btn btn bg-white p-0">
        <a href="https://www.facebook.com/juanapersonalizacoes/?ref=settings"><img src="img/social/facebook.png" alt="" ></a>
    </div>
    <div class="btn btn bg-white p-0">
        <a href="https://web.telegram.org/#/im?p=u777000_4041729175755639182"><img src="img/social/telegram.png" alt=""></a>
    </div>
    </footer>
</body>
</html>