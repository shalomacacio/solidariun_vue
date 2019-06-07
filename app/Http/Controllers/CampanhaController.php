<?php

namespace Solidariun\Http\Controllers;

use Illuminate\Http\Request;
use \Solidariun\Model\Campanha;
use DB;

class CampanhaController extends Controller
{

    public function __construct(Campanha $camapanha){
        $this->campanha = $camapanha;
    }

    public function list()
    {
        $camapanhas = DB::table('campanhas')->limit(6)->get();
        return response()->json($camapanhas);
    }

     public function store(Request $request)
    {
        $input = $request->all();
        $this->campanha->create($input);
        return response()->json(['status'=> 'success', 'msg'=> 'criado com sucesso']);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
