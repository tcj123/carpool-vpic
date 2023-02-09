<?php

namespace App\Http\Controllers;

use App\Http\Resources\DecodedVINResourceCollection;
use App\Services\VINDecoder;


class VehicleDecodeController extends Controller
{

    public function decodeVIN(string $vin): DecodedVINResourceCollection
    {
        return DecodedVINResourceCollection::make(VINDecoder::decode($vin, $request->modelyear ?? null));
    }

}
