<?php
namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublishersController extends Controller
{
    // Exibe uma lista de categorias
    public function index()
    {
        $Publishers = Publisher::all();
        return view('Publishers.index', compact('publishers'));
    }

    // Mostra o formulário para criar uma nova categoria
    public function create()
    {
        return view('publishers.create');
    }

    // Armazena uma nova categoria no banco de dados
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:categories|max:255',
        ]);

        Publisher::create($request->all());

        return redirect()->route('Publishers.index')->with('success', 'Categoria criada com sucesso.');
    }

    // Exibe uma categoria específica
    public function show(Publisher $publisher)
    {
        return view('publishers.show', compact('publisher'));
    }

    // Mostra o formulário para editar uma categoria existente
    public function edit(Publisher $publisher)
    {
        return view('publishers.edit', compact('publisher'));
    }

    // Atualiza uma categoria no banco de dados
    public function update(Request $request, Publisher $publisher)
    {
        $request->validate([
            'name' => 'required|string|unique:categories,name,' . $publisher->id . '|max:255',
        ]);

        $publisher->update($request->all());

        return redirect()->route('publishers.index')->with('success', 'Categoria atualizada com sucesso.');
    }

    // Remove uma categoria do banco de dados
    public function destroy(Publisher $publisher)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Categoria excluída com sucesso.');
    }
}

