<?php

namespace App\Imports;

use App\Models\Familydata;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class FamilydataImport implements ToModel, WithStartRow, WithCustomCsvSettings
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
        return new Familydata([
            'oktazon'=>$row[0],
            'gondviseloazon'=>$row[1],
            'gondviseloneve'=>$row[2],
            'gondviselotelefonszama'=>$row[3],
            'gondviseloemail'=>$row[4],
            'torvenyeskepviselo'=>$row[5],
            'haziorvosneve'=>$row[6],
            'haziorvostelefon'=>$row[7],
            'covidoltas'=>$row[8]
                        
        ]);
    }
}
