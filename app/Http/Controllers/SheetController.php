<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SheetController extends Controller
{
    use FormTrait;
    private $sheet;

    public function index()
    {
        $c =  $this->sheet('ejecutivo!A1:02000', true);

        dd($c);
    }

    public function formAll(Request $request)
    {
        return $this->sheet($request->form . '!A1:02000', true);
    }
}
