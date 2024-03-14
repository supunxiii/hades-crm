<?php

namespace App\Http\Controllers;
use App\Models\Salesperson;
use Illuminate\Http\Request;

class SalespersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salesperson = Salesperson::all();
        return view ('salesperson.index')->with('salesperson', $salesperson);
    }

    public function showList()
    {
        $salespersons = Salesperson::all();
        return view('salesperson.list', compact('salespersons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('salesperson.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Salesperson::create($input);
        return redirect('salesperson')->with('flash_message', 'Salesperson Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $salesperson = Salesperson::find($id);
        return view ('salesperson.show')->with('salesperson', $salesperson);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $salesperson = Salesperson::find($id);
        return view('salesperson.edit')->with('salesperson', $salesperson);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $salesperson =Salesperson::find($id);
        $input = $request->all();
        $salesperson->update($input);
        return redirect('salesperson')->with('flash_message', 'Salesperson Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Salesperson::destroy($id);
        return redirect('salesperson')->with('flash_message', 'Salesperson deleted!'); 
    }
}
