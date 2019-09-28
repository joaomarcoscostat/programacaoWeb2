<?php

namespace App\Http\Controllers\Contato;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class contatoController extends Controller
{
    public function lista(){
        return '<h1> Informacoes para Contato<h1>
        <b>Nome:</b> Luciano Alexandre <br/>
        <b>telefone:</b> (xx)xxxxxx-xxxx<br/>
        <b>e-mail:</b> luciano@cnrn@gmail.com <br/>';

    }
}
