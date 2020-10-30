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

    public static function SmartphoneList($request)
    {
        if (isset($request['searchTerm'])) {
            return Smartphone::select('id', 'name as text')
                        ->where('name', 'like', '%' . $request['searchTerm'] . '%')
                        ->limit(10)
                        ->get();
        }

        return Smartphone::select('id', 'observations as text')
                    ->limit(10)
                    ->get();
    }
}