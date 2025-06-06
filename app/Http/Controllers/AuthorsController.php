<?php
namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    // Exibe uma lista de categorias
    public function index()
    {
        $categories = Author::all();
        return view('Authors.index', compact('authors'));
    }

    // Mostra o formulário para criar uma nova categoria
    public function create()
    {
        return view('authors.create');
    }

    // Armazena uma nova categoria no banco de dados
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:authors|max:255',
        ]);

        Author::create($request->all());

        return redirect()->route('authors.index')->with('success', 'Categoria criada com sucesso.');
    }

    // Exibe uma categoria específica
    public function show(Category $category)
    {
        return view('authors.show', compact('category'));
    }

    // Mostra o formulário para editar uma categoria existente
    public function edit(Category $category)
    {
        return view('authors.edit', compact('category'));
    }

    // Atualiza uma categoria no banco de dados
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|unique:categories,name,' . $author->id . '|max:255',
        ]);

        $author->update($request->all());

        return redirect()->route('authors.index')->with('success', 'Categoria atualizada com sucesso.');
    }

    // Remove uma categoria do banco de dados
    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()->route('authors.index')->with('success', 'Categoria excluída com sucesso.');
    }
}


