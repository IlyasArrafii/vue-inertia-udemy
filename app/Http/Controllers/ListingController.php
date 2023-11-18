<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListingsRequest;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listingData = Listing::all();
        return inertia('Listing/Index', ['listings' => $listingData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Listing/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ListingsRequest $request)
    {
        Listing::create([
            'beds' => $request->beds,
            'baths' => $request->baths,
            'area' => $request->area,
            'city' => $request->city,
            'code' => $request->code,
            'street' => $request->street,
            'street_nr' => $request->street_nr,
            'price' => $request->price,
        ]);

        return redirect()->route('listing.index')->with('success', 'Listing Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
        return inertia('Listing/Show', ['listing' => $listing]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing)
    {
        return inertia('Listing/Edit', ['listing' => $listing]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ListingsRequest $request, Listing $listing)
    {
        $listing->update(
            [
                'beds' => $request->beds,
                'baths' => $request->baths,
                'area' => $request->area,
                'city' => $request->city,
                'code' => $request->code,
                'street' => $request->street,
                'street_nr' => $request->street_nr,
                'price' => $request->price,
            ]
        );

        return redirect()->route('listing.index')
            ->with('success', 'Listing was changed!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing)
    {
        $listing->delete();

        return redirect()->back()->with('success', 'Listing was changed!');
    }
}
