<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Investimento;
use Illuminate\Http\Request;

class HistoricoController extends Controller
{
    public function index(int $id){
        $investimento = Investimento::find($id);
        $data = $investimento->Historico()->get();

        return response(json_encode($data) , 200);

    }
    public function store(Request $request , $id)
    {
        $investimento = Investimento::find($id);

        $investimento->Historico()->create(
            $request->validate([
                'value' => ['required']
            ])
        );

        $investimento->adicional = $request->value;
        $investimento->save();
        return response(json_encode($investimento) , 201);
    }
}
