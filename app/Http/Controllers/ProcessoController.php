<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ProcessoController extends Controller
{
    public function index()
    {
        $client = new Client();
        $response = $client->get('http://localhost:8000/api/processos/');
        $processos = json_decode($response->getBody(), true);

        return view('processos.index', ['processos' => $processos]);
    }
}