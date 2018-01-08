<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Column;
// use GuzzleHttp\Client;

class ColumnController extends Controller
{
    public function getIndex()
    {
        $columns = Column::all();
        return view('columns', ['columns' => $columns]);
    }



}
