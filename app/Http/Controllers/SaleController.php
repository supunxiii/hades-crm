<?php

namespace App\Http\Controllers;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sale = Sale::all();
        return view ('sale.index')->with('sale', $sale);
    }

    public function showList()
    {
        $sales = Sale::all();
        return view('sale.list', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sale.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Sale::create($input);
        return redirect('sale')->with('flash_message', 'Sale Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sale = Sale::find($id);
        return view('sale.show')->with('sale', $sale);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sale = Sale::find($id);
        return view('sale.edit')->with('sale', $sale);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sale = Sale::find($id);
        $input = $request->all();
        $sale->update($input);
        return redirect('sale')->with('flash_message', 'Sale Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Sale::destroy($id);
        return redirect('sale')->with('flash_message', 'Sale deleted!'); 
    }
}
