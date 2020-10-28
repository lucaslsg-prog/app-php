<?php

namespace App\Http\Controllers\Restrito;

use App\DataTables\SmartphoneDataTable;
use App\Http\Requests\SmartphoneRequest;
use App\Models\Observation;
use App\Models\Tsssample;
use App\Models\Avgsleepmode;
use App\Models\Smartphone;
use App\Services\SmartphoneService;
use Illuminate\Http\Request;
use Throwable;

class SmartphoneController extends Controller
{
    public function index(SmartphoneDataTable $smartphoneDataTable)
    {
        return $smartphoneDataTable->render('smartphones.index'); 
    }
}
