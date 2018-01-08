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
      return view('columns.index', ['columns' => $columns]);
    }

    public function getColumn($id)
    {
      $column = Column::find($id);
      return view('columns.id', ['column' => $column]);
    }


}
