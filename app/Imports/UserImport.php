<?php

namespace App\Imports;

use App\Http\Controllers\SimpleQRcodeController;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UserImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name'=>$row[0],
            'email'=>$row[1],
            'pseudo'=>$row[2],
            'password'=>bcrypt($row[3]),
            'telephone'=>$row[4],
            'key'=>$row[5],
            'qrcode'=> (new SimpleQRcodeController())->generateQrcode($row[0].';Table '.$row[6].'|'.$row[7].';'.$row[5], $row[0].'_'.$row[4]),
            'numtable'=>$row[6],
            'numchaise'=>$row[7],
            'status'=>1,
        ]);
    }
}
