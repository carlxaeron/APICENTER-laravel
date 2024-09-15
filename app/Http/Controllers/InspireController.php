<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Inspiring;
use Illuminate\Http\Request;

class InspireController extends Controller
{
    public function inspire()
    {
        return response()->json([
            'quote' => Inspiring::quote()
        ]);
    }
}