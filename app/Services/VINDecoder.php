<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class VINDecoder
{

    public static function decode(string $vin, ?string $year = null){

        if($year){
            $results = DB::select('exec [dbo].[spVinDecode] @v = ?, @year = ?',[$vin, $year]);

        }

        else{
            $results = DB::select('exec [dbo].[spVinDecode] @v = ?',[$vin]);
        }

        return $results;

    }

}
