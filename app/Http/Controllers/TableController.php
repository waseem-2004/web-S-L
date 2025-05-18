<?php



 namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $data['Table'] =  \App\Models\Table ::all(); 
         return $data;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //post
        $data['Table'] = new \App\Models\Table(); 
        $data['route'] = 'dataTable.store'; 
        $data['method'] = 'post';
        //$data['titleForm'] = Form Input Event'; 
        //$data['submitButton'] = Submit;
        //return view('event/form_event', $data); 

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
        'Table_naumber' => 'required',
        'status' => 'required',
        'Size' => 'required', 
        'resturant_id' => 'required', 
        'admin_id' => 'required',
         
    ]);

    $inputEvent = new \App\Models\Table(); 
    $inputEvent->status = $request->status;
    $inputEvent->Size = $request->Size;  
    $inputEvent->resturant_id = $request->resturant_id; 
    $inputEvent->admin_id = $request->admin_id;
     $inputEvent->Table_naumber = $request->Table_naumber;
    $inputEvent->save();
    return redirect('dataTable'); 

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
