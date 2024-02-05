<?php

    if(isset($_POST['enviar']))
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        try{
            $pdo = new PDO('mysql:dbname=testeziriga;host=localhost',  'root', 'root');
            echo "Conectado com Sucesso Parabens";
        
        } catch(PDOException $erro) {
            echo 'Erro com bancos de Dados: '.$erro->getMessage();
        }

        $resultado = $pdo->prepare("INSERT INTO customers (nome, email) VALUES (:nome, :email)");
        $resultado->bindparam('nome', $nome);
        $resultado->bindparam('email', $email);
        $resultado->execute();

        header("Location: logado.php");
    }

?>

<!DOCTYPE html>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D.ENE.A</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="sass/styles.sass">
</head>
<body class="col-12 "style="background-image: url('https://www.denea.com.br/stores/784/static/img/back_image.png'); display:flex; justify-content:center;">

    <div class="benner vh-100 "  >
        <div style=" padding-top: 60px; display: flex; justify-content:center; aling-items:center;">
            <div  style="display-flex; justify-content: center;">
                <img  class="logo"src="https://www.denea.com.br/stores/784/static/img/logo-black-large.png" alt="">
            </div>
        </div>
        <div class="banner lign-items-center shadow-lg p-3 mb-5 bg-white rounded" >
            <div class="row container banner-content" style="background-image: url('https://www.denea.com.br/stores/784/static/img/wave-pink.png'); height: 420px;" >
                <div class="col-lg-5 col-sm-12 pt-5 m-o">
                    <div class="title-banner">
                        <h1> BEM VINDO À D.ENE.A</h1>
                        <h3> Cosmetidos Profissionais</h3>
                    </div>
                    <div class="text-banner">
                        <p>Em breve, você terá acesso a uma gama exclusiva de produtos que cuidam da integridade, saúde
                                e regeneração dos seus cabelos.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 pt-5 m-0">
                    <div class="img-banner">
                        <img src="https://www.denea.com.br/stores/784/static/img/mockyup%202.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 pt-5 m-0">
                    <div class="form-banner">
                        <p>Preencha o formulário abaixo com o seu nome e e-mail para receber novidades e aproveitar um</p>
                        <span> desconto especial na sua primeira compra!</span>
                        <form action="" method="POST">
                            <div class="mb-3 form-row">
                                <label for="" class="form-label">
                                    SEU NOME
                                </label>
                                <input type="text" required class="form-control" name="nome" placeholder="Nome">
                            </div>
                            <div class="mb-3 form-row">
                                <label for="" class="form-label">
                                    SEU E-MAIL
                                </label>
                                <input type="email" required  class="form-control" name="email" placeholder="E-mail">
                            </div>
                            <input name="enviar" type="submit" value="QUERO ME INSCREVER" class="btn btn-dna bg-dark text-white" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-0 m-0" style="width: 100%">
            <div class="col-12 d-flex justify-content-center ">
                    <strong>Profissional</strong><p>como você sempre quis,</p>
                    <strong>acessível</strong>
                    <p>como você nunca viu.</p>
                </div>
                <div class="d-flex justify-content-center" >
                    <p class="d-none d-md-flex">O melhor está por vir, aguarde!</p>
                </div>
            </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
