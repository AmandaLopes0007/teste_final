<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacao;
use App\Models\Like;
use App\Models\Deslike;

class PublicacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publicacoes = Publicacao::withCount(['like', 'deslike'])->get();
        return view('index', compact('publicacoes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function like(Publicacao $publicacao)
    {
        $user = auth()->user();
        if ($publicacao->like()->where('user_id', $user->id)->exists()) {
            $publicacao->like()->where('user_id', $user->id)->delete();
        }   else {
              if ($publicacao->deslike()->where('user_id', $user->id)->exists()) {
                  $publicacao->deslike()->where('user_id', $user->id)->delete();
              }
            $publicacao->like()->create(['user_id' => $user->id]);
        }

        return back();
    }

    public function deslike(Publicacao $publicacao)
    {
        $user = auth()->user();
        if ($publicacao->deslike()->where('user_id', $user->id)->exists()) {
            $publicacao->deslike()->where('user_id', $user->id)->delete();
        }   else {
              if ($publicacao->like()->where('user_id', $user->id)->exists()) {
                  $publicacao->like()->where('user_id', $user->id)->delete();
              }
            $publicacao->deslike()->create(['user_id' => $user->id]);
        }

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
