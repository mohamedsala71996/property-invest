<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $languages = Language::paginate(10);
        return view('dashboard.languages.index', compact('languages'));
    }

    /**
     * Show the form for creating a new language.
     */
    public function create()
    {
        return view('dashboard.languages.create');
    }

    /**
     * Store a newly created language in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'language_ar' => 'required|string|max:255',
            'language_en' => 'required|string|max:255',
        ]);

        Language::create($request->all());

        return redirect()->route('languages.index')
                         ->with('success', 'Language created successfully.');
    }

    /**
     * Show the form for editing the specified language.
     */
    public function edit(Language $language)
    {
        return view('dashboard.languages.edit', compact('language'));
    }

    /**
     * Update the specified language in storage.
     */
    public function update(Request $request, Language $language)
    {
        $request->validate([
            'language_ar' => 'required|string|max:255',
            'language_en' => 'required|string|max:255',
        ]);

        $language->update($request->all());

        return redirect()->route('languages.index')
                         ->with('success', 'Language updated successfully.');
    }

    /**
     * Remove the specified language from storage.
     */
    public function destroy(Language $language)
    {
        $language->delete();

        return redirect()->route('languages.index')
                         ->with('success', 'Language deleted successfully.');
    }
}
