<?php
//Verifica se o cliente selecionou uma foto no formulário ou deixou em branco
if($_FILES['photo']['size'] > 0){

    //obtem o conteúdo binário da imagem
    $conteudo = file_get_contents($_FILES['foto']['tmp_name']);
    
    //obtem o tipo da imagem
    $tipo = pathinfo($_FILES['foto']['tmp_name'], PATHINFO_EXTENSION);
    
    //transforma a imagem em base64
    $foto = 'data:image/' . $tipo . ';base64,' . base64_encode($conteudo);
} else {
    //carrega uma imagem padrão caso não selecione uma imagem
    $foto = "img/avatar-1.png";
}

$dados = array(
    'foto' => $foto,
    'nome' => $_POST['name'],
    'idade' => $_POST['age'],
    'cargo' => $_POST['role'],
    'cep' => $_POST['cep'],
    'cidade' => $_POST['city'],
    'estado' => $_POST['state'],
    'bairro' => $_POST['district'],
    'endereco' => $_POST['address'],
    'numero' => $_POST['number'],
    'telefone' => $_POST['phone'],
    'email' => $_POST['email'],
    'resumo' => $_POST['resume'],
    'formacoes' => isset($_POST['formacao-curso']) ?
                   array(
                        'cursos' => $_POST['formacao-curso'],
                        'instituicoes' => $_POST['formacao-instituicao'],
                        'conclusoes' => $_POST['formacao-conclusao']
                    ) : null, //nulo se não houver formação
    'experiencias' => isset($_POST['experiencia-cargo']) ? 
                      array(
                        'cargos' => $_POST['experiencia-cargo'],
                        'empresas' => $_POST['experiencia-empresa'],
                        'inicios' =>  $_POST['experiencia-inicio'],
                        'fins' =>  $_POST['experiencia-fim'],
                      ) : null //nulo se não houver experiencia
);

require_once('modelo/modelo.php');