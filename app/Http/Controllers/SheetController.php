<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SheetController extends Controller
{
    use FormTrait;
    private $sheet;

    public function index()
    {
        $c =  $this->sheet('estandar', true);
    }

    public function formAll(Request $request)
    {
        return $this->sheet($request->input('formName'), true);
    }
}
