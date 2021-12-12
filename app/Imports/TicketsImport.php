<?php

namespace App\Imports;

use App\Models\Ticket;
use Maatwebsite\Excel\Concerns\ToModel;

class TicketsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Ticket([
            'key'=>$row[0],
            'name'=>$row[1],
            'telephone'=>$row[2],
            'table'=>$row[3],
            'status'=>$row[4],
        ]);
    }
}
