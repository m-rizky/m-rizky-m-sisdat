<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.dashboard', ['menu' => Menu::latest()->get()]);
        // return view('pages.dashboard', [
        //     'menu' => Menu::all()
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(($request));
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|file',
            'harga' => 'required|integer',
        ]);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('image-saver', 'public');
        }
        Menu::create($validatedData);
        return redirect('/')->with('success', 'Menu berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        return view('pages.view', [
            'menu' => $menu
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        return view('pages.edit', [
            'menu' => $menu
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $rules = [
            'name' => 'string|max:255',
            'deskripsi' => 'string',
            'harga' => 'required|integer|min:0',
            'gambar' => 'nullable|file|image|max:10000',
        ];
        $validatedData = $request->validate($rules);

        if ($request->hasFile('gambar')) {
            // Delete old image
            if ($menu->gambar && Storage::disk('public')->exists($menu->gambar)) {
                Storage::disk('public')->delete($menu->gambar);
            }
            // Store new image
            $validatedData['gambar'] = $request->file('gambar')->store('image-saver', 'public');
        }

        $menu->update($validatedData);
        return redirect('/')->with('success', 'Menu berhasil diupdate!');
        // $menu->update($request->validated());
        // return redirect('/')->with('success','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        if ($menu->gambar && Storage::disk('public')->exists($menu->gambar)) {
            Storage::disk('public')->delete($menu->gambar);
        }
        $menu->delete();
        return redirect('/')->with('success', 'Menu berhasil dihapus!');
    }
}
