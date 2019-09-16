<?php
namespace App\Modules\User\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller {

    public function __construct() {
        # code...
    }

    public function index(Request $request)
    {
        return view('User::user');
    }

    public function json()
    {
        return response()->json([
            'status' => true,
            'code' => 200,
            'message' => 'oke',
            'content' => 'Hello User via Route API'
        ]);
    }
}

