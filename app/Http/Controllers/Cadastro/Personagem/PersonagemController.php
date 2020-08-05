<?php

namespace App\Http\Controllers\Cadastro\Personagem;

use App\Personagem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ImageRepository;

class PersonagemController extends Controller
{

    protected $model;

    public function __construct(Personagem $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $title = 'Personagem';
        $personagens = $this->model->where('id', '!=', 0)->get();
        return view('Cadastro.Personagem.index', compact('title', 'personagens'));
    }


    public function create()
    {
        $title = 'Personagem';
        return view('Cadastro.Personagem.create', compact('title'));
    }


    public function store(Request $request, ImageRepository $repo)
    {
        $personagem = Personagem::create($request->except('imagem'));

        if ($request->hasFile('imagem')) {
            $personagem->imagem = $repo->saveImage($request->imagem, $personagem->id, 'personagem', 350);
        }

        $personagem->save();

        return redirect()->route('Cadastro.Personagem.index')->with(['message' => 'Personagem criado com sucesso!', 'type' => 'success', 'icon' => 'check']);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $title = 'Personagem';
        $personagem = Personagem::where('id', $id)->first();

        return view('Cadastro.Personagem.edit', compact('title','personagem'));
    }


    public function update(Request $request, ImageRepository $repo, $id)
    {
        $personagem = Personagem::find($id);

        $personagem->update($request->except('imagem'));

        if ($request->hasFile('imagem')) {
            $personagem->imagem = $repo->saveImage($request->imagem, $personagem->id, 'personagem', 300);
        }

        $personagem->save();

        return back()->with(['message' => 'Personagem atualizado com sucesso!', 'type' => 'success', 'icon' => 'check']);
    }


    public function destroy($id)
    {
        $personagem = Personagem::find($id);
        $personagem->delete();

        return back()->with(['message' => 'Personagem deletado com sucesso', 'type' => 'success', 'icon' => 'check']);
    }
}
