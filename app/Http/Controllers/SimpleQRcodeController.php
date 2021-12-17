<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

# 1. La facade QrCode
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;
use App\Models\Ticket;


class SimpleQRcodeController extends Controller
{

    /**
     * Generation d'un qrcode.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function qrcode()
    {
        # Je defini le chemin du dossier ou sera enregistré le fichier
        $path = public_path('qrcode');

        # Je verifi que le dossier existe sinon je le crée
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }

        # Je crée le nom du fichier
        do {
            $fileName = Str::random(10) . '.png';
        } while(file_exists($path. '/' . $fileName));

        # Je genère le qrcode au format png et je l'enregistre
        $qrcode = QrCode::format('png')
                            ->size(200)
                            ->generate("Mexan Gontran KABA; Table 56, Chaise 5", $path.'/'.$fileName);

        # Je crée l'url pour pouvoir acceder au fichier dans la vue
        $url = 'qrcode/'.$fileName;


        return view('qrcode', compact('url'));
    }

    public function generateQrcode($textQrcode, $fileQrcode)
    {
        # Je defini le chemin du dossier ou sera enregistré le fichier
        $path = public_path('qrcode');

        # Je verifi que le dossier existe sinon je le crée
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }

        # Je crée le nom du fichier
        do {
            $fileName = $fileQrcode.Str::random(10).'.png';
        } while(file_exists($path. '/' . $fileName));

        # Je genère le qrcode au format png et je l'enregistre
        $qrcode = QrCode::format('png')
            ->size(200)
            ->generate($textQrcode, $path.'/'.$fileName);

        # Je crée l'url pour pouvoir acceder au fichier dans la vue
        $url = 'qrcode/'.$fileName;

        return $url;
    }

}
