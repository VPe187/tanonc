<?php

namespace App\Imports;

use App\Models\Socialstatus;  //modellből keressük ki a megfelelő php-t
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class SocialdataImport implements ToModel, WithStartRow, WithCustomCsvSettings
{
    //headert kihagyja
    public function startRow(): int
    {
        return 2;
    }
    //léptetés
    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }
    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Socialstatus([
            'szocazon'=>$row[0],
            'oktazon'=>$row[1],
            'gyermekvedelmikedvezmeny'=>$row[2],
            'gyermekvedelmikedvezmeny_kezdete'=>$row[3],
            'gyermekvedelmikedvezmeny_vege'=>$row[4],
            'hatranyoshelyzetu'=>$row[5],
            'hhkezdete'=>$row[6],
            'hhvege'=>$row[7],
            'halmozottanhatranyoshelyzetu'=>$row[8],
            'hhh_kezdete'=>$row[9],
            'hhh_vege'=>$row[10]
            
                        
        ]);
    }
}
