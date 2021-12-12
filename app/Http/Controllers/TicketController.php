<?php

namespace App\Http\Controllers;

use App\Imports\TicketsImport;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\SimpleQRcodeController;
use Maatwebsite\Excel\Facades\Excel;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $models = Ticket::paginate(10);
        $links = $models->render();

        return view('ticket/index', compact('models', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (isset($_GET["option"]))
        {
            $ticket = Ticket::find($id);
            if ($ticket->status == 0)
            {
                $ticket->qrcode = (new SimpleQRcodeController)->generateQrcode($id);
                $ticket->status = 1;
                $ticket->save();
            }else return back();
            return back();
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
        Excel::import(new TicketsImport, asset('uploads/templatexl.xlsx'));
        return back()->with('success', 'All good');
    }
}
