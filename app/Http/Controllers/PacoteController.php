<?php

namespace Maeli\Http\Controllers;

use Illuminate\Http\Request;
use Maeli\Pacote;

class PacoteController extends Controller
{
    /**
     * @var Pacote
     */
    private $pacote;

    public function __construct(Pacote $pacote)
    {
        $this->pacote = $pacote;
    }

    function listar()
    {
        return response($this->pacote->all(), 200);
    }
}
