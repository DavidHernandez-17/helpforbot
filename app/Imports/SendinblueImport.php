<?php

namespace App\Imports;

use App\Models\Sendinblue;
use Maatwebsite\Excel\Concerns\ToModel;

class SendinblueImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Sendinblue([
            'st_text' => $row[0],
            'ts'      => $row[1],
            'sub'     => $row[2],
            'frm'     => $row[3],
            'email'   => $row[4],
            'tag'     => $row[5],
            'mid'     => $row[6]
        ]);
    }
}
