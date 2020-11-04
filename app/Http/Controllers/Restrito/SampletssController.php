<?php

namespace App\Http\Controllers\Restrito;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TssSample;

class SampletssController extends Controller
{
    public function show($id)
    {
        return TssSample::find($id);
    }

    public function listaTssSample(Request $request)
    {
       $termoPesquisa = trim($request->searchTerm);

       if (empty($termoPesquisa)){
           return TssSample::select('id', 'model as text')->get();
       }

       return TssSample::select('id','model as text')
                   ->where('model','like', '%' . $termoPesquisa . '%')
                   ->get();
    }

}
