<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagemController extends Controller
{
    //

    public function mostrarImagem($nomeDaImagem)
{
    // Caminho para a imagem armazenada
    $caminhoImagem = storage_path('../../../resources/img' . $nomeDaImagem);

    // Verifique se o arquivo existe
    if (file_exists($caminhoImagem)) {
        // Determine o tipo MIME da imagem
        $tipoMime = mime_content_type($caminhoImagem);

        // Defina os cabeçalhos de resposta com o tipo MIME correto
        header("Content-Type: $tipoMime");

        // Exiba a imagem
        readfile($caminhoImagem);
    } else {
        // Caso a imagem não exista, retorne uma resposta de erro ou redirecione para uma página de erro 404.
        // Por exemplo:
        abort(404);
    }
}

}
