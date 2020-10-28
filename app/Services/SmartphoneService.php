<?php

namespace App\Services;

use App\Models\Smartphone;
use Illuminate\Support\Facades\Log;
use Throwable;

class SmartphoneService
{
    public static function store($request)
    {
        try {
            return Smartphone::create($request);
        } catch (Throwable $th) {
            Log::error($th->getMessage());
            return null;
        }
    }

    public static function update($request, $smartphone)
    {
        try {
            return $smartphone->update($request);
        } catch (Throwable $th) {
            Log::error($th->getMessage());
            return null;
        }
    }

    public static function listaProdutos($request)
    {
        if (isset($request['searchTerm'])) {
            return Smartphone::select('id', 'descricao as text')
                        ->where('descricao', 'like', '%' . $request['searchTerm'] . '%')
                        ->limit(10)
                        ->get();
        }

        return Smartphone::select('id', 'descricao as text')
                    ->limit(10)
                    ->get();
    }
}