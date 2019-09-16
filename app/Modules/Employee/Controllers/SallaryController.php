<?php

namespace App\Modules\Employee\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SallaryController extends Controller
{

    public function __construct()
    {
        # code...
    }

    public function index(Request $request)
    {
        return view('Employee::sallary');
    }

    public function json()
    {
        return response()->json([
            'status' => true,
            'code' => 200,
            'message' => 'oke',
            'content' => 'Hello Employee via Route API'
        ]);
    }
}
