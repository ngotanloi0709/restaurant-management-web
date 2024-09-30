<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\UserService;

class UserApiController extends Controller
{
    public function __construct(private readonly UserService $userService)
    {

    }

    public function postRegister(Request $request)
    {
        return response()->json([
            'message' => 'User registered successfully'
        ], 201);
    }
}
