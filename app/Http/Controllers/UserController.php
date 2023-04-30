<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class UserController extends Controller
{
    public function getUsers()
    {
        $data = User::latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                // ->addColumn('provider', function($row){
                //     return providerInfo($row->provider_id)->provider_name;
                // })
                // ->rawColumns(['action'])
                // ->addColumn('action', function($row){
                //     $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Ver</a>';
                //     return $actionBtn;
                // })
                // ->rawColumns(['provider'])
                ->make(true);
    }
}
