<?php

namespace App\Http\Controllers;
use App\Models\Receipt;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $receipt = Receipt::all();
        return view ('receipt.index')->with('receipt', $receipt);
    }

    public function showList()
    {
        $receipts = Receipt::all();
        return view('receipt.list', compact('receipts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('receipt.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Receipt::create($input);
        return redirect('receipt')->with('flash_message', 'Receipt Record Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $receipt = Receipt::find($id);
        return view('receipt.show')->with('receipt', $receipt);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $receipt = Receipt::find($id);
        return view('receipt.edit')->with('receipt', $receipt);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $receipt = Receipt::find($id);
        $input = $request->all();
        $receipt->update($input);
        return redirect('receipt')->with('flash_message', 'Receipt Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Receipt::destroy($id);
        return redirect('receipt')->with('flash_message', 'Receipt Deleted!'); 
    }
}
