<?php

namespace App\Http\Controllers\Conteudo\Landing_Page;

use App\Landingpage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ImageRepository;

class Landing_PageController extends Controller
{

    protected $model;

    public function __construct(Landingpage $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $title = 'Landing Page';
        $landingpages = $this->model->where('id', '!=', 0)->get();
        return view('Conteudo.Landing_Page.index', compact('title', 'landingpages'));
    }


    public function create()
    {
        $title = 'Landing Page';
        return view('Conteudo.Landing_Page.create', compact('title'));
    }


    public function store(Request $request, ImageRepository $repo)
    {
        $landingpage = Landingpage::create($request->except('imagebackground_superior'));

        if ($request->hasFile('imagebackground_superior')) {
            $landingpage->imagebackground_superior = $repo->saveImage($request->imagebackground_superior, $landingpage->id, 'landingpage', 350);
        }

        $landingpage->save();

        return redirect()->route('Conteudo.Landing_Page.index')->with(['message' => 'Landing Page criado com sucesso!', 'type' => 'success', 'icon' => 'check']);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $title = 'Landing Page';
        $landingpage = Landingpage::where('id', $id)->first();

        return view('Conteudo.Landing_Page.edit', compact('title','landingpage'));
    }


    public function update(Request $request, ImageRepository $repo, $id)
    {
        $landingpage = Landingpage::find($id);

        $landingpage->update($request->except('imagebackground_superior'));

        if ($request->hasFile('imagebackground_superior')) {
            $landingpage->imagebackground_superior = $repo->saveImage($request->imagebackground_superior, $landingpage->id, 'landingpage', 300);
        }

        $landingpage->save();

        return back()->with(['message' => 'Landing Page atualizado com sucesso!', 'type' => 'success', 'icon' => 'check']);
    }


    public function destroy($id)
    {
        $landingpage = Landingpage::find($id);
        $landingpage->delete();

        return back()->with(['message' => 'Landing Page deletado com sucesso', 'type' => 'success', 'icon' => 'check']);
    }
}
