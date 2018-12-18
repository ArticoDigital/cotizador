<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SheetController extends Controller
{
    use FormTrait;
    private $sheet;

    public function index()
    {
        return $this->sheet('ejecutivo!A2:A2000', true);
    }
}
