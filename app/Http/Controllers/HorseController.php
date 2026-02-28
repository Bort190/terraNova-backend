<?php

namespace App\Http\Controllers;

use App\Http\Resources\HorseResource;
use App\Models\Horse;
use Illuminate\Support\Collection;

class HorseController extends Controller
{
    public function index()
    {
        return HorseResource::collection(Horse::all());
    }

    public function show(Horse $horse)
    {
        return new HorseResource($horse);
    }
}
