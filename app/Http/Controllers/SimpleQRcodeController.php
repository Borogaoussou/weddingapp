<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

# 1. La facade QrCode
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class SimpleQRcodeController extends Controller
{
    // L'action "generate" de la route "simple-qrcode" (GET)
    public function generate () {

        # 2. On génère un QR code de taille 200 x 200 px
        $qrcode = QrCode::size(200)->generate("Mexan Gontran KABA; Table 56, Chaise 5");

        # 3. On envoie le QR code généré à la vue "simple-qrcode"
        return view("simple-qrcode", compact('qrcode'));
    }
}