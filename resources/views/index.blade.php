<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <div class="indexpag">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6">
                    <div class="card ofc">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-lg-2">
                                    <img src="https://www.aente.com.br/img/logo-small" class="text-white auth-logo mb-3"
                                        height="83" />
                                </div>
                                <div class="col-lg-4">
                                    <div class="col-auto">
                                        <div class="justify-contentent-end">
                                            <h1 class="titulo">
                                                Menu de
                                            </h1>

                                            <h1 class="titulo3 mt-2">Opções</h1>

                                            <span class="credenciais mt-3">Faça sua escolha:</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-between mt-2">
                                <div class="col-lg-2">
                                    <button onclick="location.href='/'" id="but_cadastrar" type="submit"
                                        class="btn-hover color-9">
                                        Cadastrar
                                    </button>
                                </div>
                                <div class="col-lg-2">
                                    <button onclick="location.href='/consult'" id="but_cadastrar" type="submit"
                                        class="btn-hover color-9">
                                        Consultar
                                    </button>
                                </div>

                                <div class="col-auto">
                                    <button onclick="location.href='/consultSingle'" id="but_cadastrar" type="submit"
                                        class="btn-hover color-9">
                                        Consulta Unica
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
