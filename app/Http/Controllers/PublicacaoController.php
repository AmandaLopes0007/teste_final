<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacao;
use App\Models\Like;
use App\Models\Deslike;

class PublicacaoController extends Controller
{

    public function index()
    {
        $publicacoes = Publicacao::withCount(['like', 'deslike'])->get();
        return view('index', compact('publicacoes'));
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
        } else {
            if ($publicacao->like()->where('user_id', $user->id)->exists()) {
                $publicacao->like()->where('user_id', $user->id)->delete();
            }
            $publicacao->deslike()->create(['user_id' => $user->id]);
        }

        return back();
    }
}
