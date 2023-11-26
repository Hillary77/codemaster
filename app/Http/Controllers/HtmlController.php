<?php

namespace App\Http\Controllers;

use App\Models\Html;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HtmlController extends Controller
{

    public function subfases_html()
    {
       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nivel = request()->input('nivel');

        $pergunta = HTML::where('subfase', $nivel)->get();
        return view('html.create', compact('pergunta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contador_acertos = 0;
        $respostas_corretas = $request->resposta_correta;
        $select = $request->selected_option;
    
        // Verifica se a opção selecionada está entre as respostas corretas
        if (in_array($select, $respostas_corretas)) {
            $contador_acertos++;
        }
    
        // Obtém o total de respostas corretas
        $dados = count($respostas_corretas);
    
        return view('html.index', compact('contador_acertos', 'dados'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Html  $html
     * @return \Illuminate\Http\Response
     */
    public function show(Html $html)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Html  $html
     * @return \Illuminate\Http\Response
     */
    public function edit(Html $html)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Html  $html
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Html $html)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Html  $html
     * @return \Illuminate\Http\Response
     */
    public function destroy(Html $html)
    {
        //
    }
}
