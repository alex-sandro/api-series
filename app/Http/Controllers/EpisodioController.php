<?php

namespace App\Http\Controllers;

use App\Models\Episodio;

use Illuminate\Http\Request;

class EpisodioController extends BaseController
{
    public function __construct()
    {
        $this->classe = Episodio::class;
    }
}