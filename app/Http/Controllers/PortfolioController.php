<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Display all portfolios
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $portfolios = Portfolio::latest()->get();

        return view('portfolios.index', compact('portfolios'));
    }


    /*
    |--------------------------------------------------------------------------
    | Show create form
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view('portfolios.create');
    }


    /*
    |--------------------------------------------------------------------------
    | Save portfolio
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'email' => 'required|email|max:255',
            'contact_number' => 'nullable|string|max:50',
            'address' => 'nullable|string|max:255',

            'about_me' => 'nullable|string',
            'education' => 'nullable|string',
            'skills' => 'nullable|string',
            'projects' => 'nullable|string',
            'work_experience' => 'nullable|string',

            'website' => 'nullable|url|max:255',
            'facebook' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'linkedin' => 'nullable|url|max:255',
            'github' => 'nullable|url|max:255',

            'template' => 'nullable|in:simple,modern,creative',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Upload profile picture
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('profile_picture')) {
            $validated['profile_picture'] =
                $request->file('profile_picture')->store('profiles', 'public');
        }

        /*
        |--------------------------------------------------------------------------
        | Default template
        |--------------------------------------------------------------------------
        */

        $validated['template'] = $request->template ?? 'simple';

        /*
        |--------------------------------------------------------------------------
        | Create database record
        |--------------------------------------------------------------------------
        */

        $portfolio = Portfolio::create($validated);

        return redirect()
            ->route('portfolios.templates', $portfolio)
            ->with('success', 'Portfolio saved successfully!');
    }


    /*
    |--------------------------------------------------------------------------
    | Show one portfolio
    |--------------------------------------------------------------------------
    */

    public function show(Portfolio $portfolio)
    {
        return view('portfolios.preview', compact('portfolio'));
    }


    /*
    |--------------------------------------------------------------------------
    | Show edit page
    |--------------------------------------------------------------------------
    */

    public function edit(Portfolio $portfolio)
    {
        return view('portfolios.edit', compact('portfolio'));
    }


    /*
    |--------------------------------------------------------------------------
    | Update portfolio
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, Portfolio $portfolio)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'email' => 'required|email|max:255',
            'contact_number' => 'nullable|string|max:50',
            'address' => 'nullable|string|max:255',

            'about_me' => 'nullable|string',
            'education' => 'nullable|string',
            'skills' => 'nullable|string',
            'projects' => 'nullable|string',
            'work_experience' => 'nullable|string',

            'website' => 'nullable|url|max:255',
            'facebook' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'linkedin' => 'nullable|url|max:255',
            'github' => 'nullable|url|max:255',

            'template' => 'required|in:simple,modern,creative',
        ]);

        if ($request->hasFile('profile_picture')) {

            if ($portfolio->profile_picture) {
                Storage::disk('public')->delete(
                    $portfolio->profile_picture
                );
            }

            $validated['profile_picture'] =
                $request->file('profile_picture')->store(
                    'profiles',
                    'public'
                );
        }

        $portfolio->update($validated);

        return redirect()
            ->route('portfolios.show', $portfolio)
            ->with('success', 'Portfolio updated successfully!');
    }


    /*
    |--------------------------------------------------------------------------
    | Delete portfolio
    |--------------------------------------------------------------------------
    */

    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->profile_picture) {
            Storage::disk('public')->delete(
                $portfolio->profile_picture
            );
        }

        $portfolio->delete();

        return redirect()
            ->route('portfolios.index')
            ->with('success', 'Portfolio deleted successfully!');
    }


    /*
    |--------------------------------------------------------------------------
    | Template selection
    |--------------------------------------------------------------------------
    */

    public function templates(Portfolio $portfolio)
    {
        return view(
            'portfolios.templates',
            compact('portfolio')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Change selected template
    |--------------------------------------------------------------------------
    */

    public function selectTemplate(
        Request $request,
        Portfolio $portfolio
    ) {
        $request->validate([
            'template' => 'required|in:simple,modern,creative',
        ]);

        $portfolio->update([
            'template' => $request->template,
        ]);

        return redirect()
            ->route('portfolios.show', $portfolio)
            ->with('success', 'Template selected successfully!');
    }
}