<?php

namespace App\Http\Controllers;

use App\Imports\UserImport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $models = User::paginate(10);
        $links = $models->render();

        return view('user/index', compact('models', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function create()
    {
        if (isset($_GET["option"]))
        {
            Excel::import(new UserImport(), storage_path('/app/public/uploads/templatexl.xlsx'));
            return back()->with('success', 'All good');
        }
        $option = true;
        return view('user/create', compact('option'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        Excel::import(new UserImport(), $request->file('file'));
        return redirect('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit($id)
    {
        if (isset($_GET["option"]))
        {
            #obtention des infos de l'invité
            $user = User::find($id);
            if ($user->status == 0)
            {
                $textQrcode = $user->name.';Table '.$user->numtable.'|'.$user->numchaise.';'.$user->key;
                $fileQrcode = $user->name.'_'.$user->telephone;
                $user->qrcode = (new SimpleQRcodeController())->generateQrcode($textQrcode, $fileQrcode);
                $user->status = 1;
                $user->save();
            }else return back();
        }
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function import()
    {

    }
}
