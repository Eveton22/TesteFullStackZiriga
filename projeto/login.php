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
    <link rel="stylesheet" href=".css">
</head>
<body class="col-12 "style="background-image: url('https://www.denea.com.br/stores/784/static/img/back_image.png'); display:flex; justify-content:center;">

    <div class="benner vh-100 "  >
        <div style=" padding-top: 60px; display: flex; justify-content:center; aling-items:center;">
            <div  style="display-flex; justify-content: center; ">
                <img  class="logo pb-3"src="https://www.denea.com.br/stores/784/static/img/logo-black-large.png" alt="">
            </div>
        </div>
        <div class="banner lign-items-center shadow-lg p-3 mb-4 bg-white rounded mt-2" style="width: 1300px; background-image: url('https://www.denea.com.br/stores/784/static/img/wave-pink.png'); height: 410px" >
            <div class="row container banner-content">
                <div class="col-lg-5 col-sm-12 pt-5 m-0" >
                    <div class="title-banner">
                        <h1> BEM VINDO À D.ENE.A</h1>
                        <h3> Cosmetidos Profissionais</h3>
                    </div>
                    <div class="text-banner w-100">
                        <p>Em breve, você terá acesso a uma gama exclusiva de produtos que cuidam da integridade, saúde
                                e regeneração dos seus cabelos.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 pt-0 mt-5">
                    <div class="img-banner ">
                        <img src="https://www.denea.com.br/stores/784/static/img/mockyup%202.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 pt-3 m-0 w-5" style="width: 370px;">
                    <div class="form-banner">
                        <div>
                            <p>Preencha o formulário abaixo com o seu nome e e-mail para receber novidades e aproveitar um
                                <strong> desconto especial na sua primeira compra!</strong>
                            </p>
                        </div>
                        <form action="" method="POST">
                            <div class="mb-3 mt-3 form-row">
                                <label for="" class="form-label fw-bold">
                                    SEU NOME
                                </label>
                                <input type="text" required class="form-control" name="nome" placeholder="Nome">
                            </div>
                            <div class="mb-3 form-row fw-bold">
                                <label for="" class="form-label">
                                    SEU E-MAIL
                                </label>
                                <input type="email" required  class="form-control" name="email" placeholder="E-mail">
                            </div>
                            <input name="enviar" type="submit" value="QUERO ME INSCREVER" class="btn btn-dna bg-dark text-white mt-3" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-0 m-0 w-100">
            <div class="col-12 text-center">
                    <p><strong>Profissional</strong> como você sempre quis,<strong>acessível</strong> como você nunca viu.
                    <p class="" style="position: relative; top:-20px">O melhor está por vir, aguarde!</p>
                </div>
            </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
