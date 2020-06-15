<?php

namespace App\Http\Controllers\Api;

use App\Entities\Product;
use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function welcome()
    {
        Mail::to('bun2809@gmail.com')->send(new WelcomeMail);
        return response()->json([
            'message' => 'good evening'
        ],200);
    }
    public function goodbye()
    {
        $product = Product::first();
        return response()->json([
            'message' => 'good bye',
            'errorCode' => 90,
            'product' => $product,
            'data' => [
                'product' => $product
            ]
        ],400);
    }
}
