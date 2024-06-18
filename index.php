<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator</title>  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
<i class="bi bi-house-fill"></i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
</svg>



<div class="p-3 text-center bg-white">
        <h2 class="mb-3">Gerador de Currículo</h2>
    </div>

    <main class="container">
        <form action="gerarCurriculo.php" method="post" target="_blank" enctype="multipart/form-data">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Informações gerais</h4>
                    <div class="row">
                        <div class="col-12 col-md-10">
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" class="form-control" placeholder="Pedro de Lara" name="name" id="name">
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="form-group">
                                <label for="age">Idade</label>
                                <input type="number" class="form-control" placeholder="26" name="age" id="age">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="form-group">
                                <label for="role">Cargo pretendido</label>
                                <input type="text" class="form-control" placeholder="Advogado" name="role" id="role">
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="form-group">
                                <label for="photo">Foto</label>
                                <input type="file" class="form-control" name="photo" id="photo">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-2">
                            <div class="form-group" id="tooltip">
                                <span id="tooltipText">Puxa os endereços automaticamente</span>
                                <label for="cep"><u>CEP</u></label>
                                <input type="text" class="form-control" placeholder="85.802-130" name="cep" id="cep"
                                    maxlength="10" onblur="pesquisacep(this.value);">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="city">Cidade</label>
                                <input type="text" class="form-control" placeholder="Cascavel" name="city" id="city">
                            </div>
                        </div>
                        <div class="col-12 col-md-1">
                            <div class="form-group">
                                <label for="state">Estado</label>
                                <input type="text" class="form-control" placeholder="PR" name="state" id="state">
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="form-group">
                                <label for="district">Bairro</label>
                                <input type="text" class="form-control" placeholder="Neva" name="district" id="district">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-10">
                            <div class="form-group"><label for="address">Endereço</label>
                                <input type="text" class="form-control" placeholder="Avenida Brasil" name="address"
                                    id="address">
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="form-group">
                                <label for="number">Número</label>
                                <input type="number" class="form-control" placeholder="1000" name="number" id="number">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="phone">Telefone</label>
                                <input type="text" class="form-control" placeholder="(45) 9 9988-7766" name="phone"
                                    id="phone">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" placeholder="pedrolara@gmail.com" name="email"
                                    id="email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="resume">Resumo</label>
                        <textarea class="form-control" placeholder="Boa comunicação interpessoal, com boa lógica em..."
                            name="resume" id="resume"></textarea>
                    </div>
                </div>
                <div class="card-body" id="div-formacoes">
                    <h4 class="card-title">Formação</h4>
                    <button class="btn btn-sm right" id="btn-adicionar-formacao" title="Adicionar formação"><i class="fa-solid fa-plus"></i> Adicionar formação</button>
                </div>

                <div class="card-body" id="div-experiencias">
                    <h4 class="card-title">Experiência</h4>
                    <button class="btn btn-sm right" id="btn-adicionar-experiencia" title="Adicionar experiência"><i class="fa-solid fa-plus"></i> Adicionar experiência</button>
                </div>

                <div class="card-body" id="div-experiencias">
                    <h4 class="card-title">Modelo de currículo</h4>
                    <div class="row">
                        <div class="col">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="modelo" id="modelo1" value="modelo1" checked> Moderno preto
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa-regular fa-floppy-disk"></i> Gerar currículo</button>
                    <button class="btn btn-default" type="reset"><i class="fa-solid fa-trash-can"></i> Limpar campos</button>
                </div>
            </div>
        </form>
    </main>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>