<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\View\View;

class AdminCategoryController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * @param CategoryStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CategoryStoreRequest $request)
    {
        $data = $request->input();
        $category = Category::create($data);

        return redirect()
            ->route('categories.index')
            ->with('message', 'Категория создана');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|View
     */
    public function edit($id)
    {
        try {
            $category = Category::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            report($e);
            return redirect()->route('categories.index');
        }

        return view('admin.categories.edit', compact('category'));
    }

    /**
     * @param CategoryStoreRequest $request
     * @param Category $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CategoryStoreRequest $request, Category $category)
    {
        $category->update($request->input());

        return redirect()
            ->route('categories.index')
            ->with('message', 'Информация о категории обновлена');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {
            $category = Category::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            report($e);
            return redirect()->route('categories.index');
        }

        try {
            $category->delete();
        } catch (\Exception $e) {
            report($e);
            return redirect()->route('categories.index');
        }

        return redirect()
            ->route('categories.index')
            ->with('message', 'Категория удалена');
    }
}
