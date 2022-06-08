<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,700&family=Open+Sans:wght@300&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario</title>
</head>

<body>
    <div class="container">
        <form method="POST" action="/register">
          @csrf
            <div class="row justify-content-center m-3">
                <div class="card col-lg-6 col-md-10 col-12 card login">
                    <div class="card-body">
                        <div class="d-flex flex-wrap primeiraparte">
                            <div class="col col-6">
                                <img src="https://www.aente.com.br/img/logo-small" class="text-white auth-logo mb-3"
                                    height="83" />
                            </div>
                        </div>
                        <div class="m-3">
                            <div class="form-group primeiro">
                                <h1 class="titulo">
                                    Criando
                                    <h1 class="titulo2">seu cadastro</h1>
                                </h1>

                                <span class="credenciais mt-3">Registre-se aqui e você pode ter sua conta para <br>
                                    gerenciar
                                    todos os seus compromissos.
                                </span>
                            </div>
                        </div>
                        <div class="card m-3">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nome">Seu nome</label>
                                    <input type="text" name="name" id="nome" class="form-control" required />
                                </div>
                            </div>
                        </div>
                        <div class="card m-3">
                            <div class="card-body">
                                <div class="form-group mt-2">
                                    <label for="e-mail">E-mail</label>
                                    <input type="email" name="email" id="email " class="form-control" required />
                                </div>
                            </div>
                        </div>

                        <div class="card m-3">
                            <div class="card-body">
                                <div class="form-group mt-2">
                                    <label for="senha">senha:</label>
                                    <input type="password" name="password" id="senha" class="form-control" />
                                </div>
                            </div>
                        </div>

                        <div class="card m-3">
                            <div class="card-body">
                                <div class="form-group mt-2">
                                    <label for="cpf"> CPF</label>
                                    <input type="text" name="cpf" id="cpf" class="form-control" />
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">

                            <div class="col-auto form-group m-3">
                                <button type="button" class="btn btn-secondary color-8">Retornar</button>
                            </div>

                            <div class="col-auto form-group m-3">
                                <a href="/index">VOLTAR</a>
                            </div>

                           


                            <div class="col-auto form-group m-3 ">
                                <button type="submit" class="btn-hover color-9 ">
                                    Cadatrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </form>
        
    </div>
    
</body>

</html>
