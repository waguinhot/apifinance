<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Investimento;
use Illuminate\Http\Request;

class InvestimentoController extends Controller
{
    public function index(Request $request )
    {   
        $investimentos = [];

        if($request->query('search'))
        {   
            $search = $request->query('search');
            $investimentos = Investimento::where('name' , 'like' , '%'.$search.'%')->paginate(4);
        }
        else{
            $investimentos = Investimento::paginate(4);
        }

      

        return response(json_encode($investimentos), 200);
    }

    public function getInvestimento( int $id)
    {   
        
        $investimento = Investimento::find($id);
        return response(json_encode($investimento), 200);
    }


    public function store(Request $request)
    {

        $data = Investimento::create(
            $request->validate([
                'name' => ['required'],
                'valor' => ['required'],
            ])
        );

        return response(json_encode($data), 201);
    }
}
