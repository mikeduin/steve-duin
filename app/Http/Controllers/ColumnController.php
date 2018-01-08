<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Column;

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

    public function columnsByYear($year)
    {
      $columns = DB::table('columns')->whereYear('date', $year)->get();
      return view('columns.index', ['columns' => $columns]);
    }


}
