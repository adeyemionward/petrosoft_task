<?php

namespace App\Http\Controllers;
use App\Models\Staff;
use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Staff::all();
        return view('visitors.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'address'=>'required|string',
            'phone'=>'required|string',
            'staffname'=>'required|string',

        ]);

        $now = date('Y-m-d H:i:s');
        $visitor = new Visitor();

        $visitor->firstname = request('firstname');
        $visitor->lastname = request('lastname');
        $visitor->address = request('address');
        $visitor->phone = request('phone');
        $visitor->staffname = request('staffname');

            $visitor->save();
        
         return redirect('visitors/create')
            ->with('mssg', 'Visitor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data1 = Staff::all();

        $data = Visitor::find($id);
        return view('visitors.edit', compact('data', 'data1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $fields = $request->validate([
                'firstname' => 'required|string',
                'lastname' => 'required|string',
                'address'=>'required|string',
                'phone'=>'required|string',
                'staffname'=>'required|string',
            ]);

            $now = gmdate('Y-m-d H:i:s');
            $data = Visitor::find($id);
            $data->firstname = request('firstname');
            $data->lastname  = request('lastname');
            $data->address   = request('address');
            $data->phone     = request('phone');
            $data->staffname = request('staffname');
            $data->timeout = request('timeout');

            if (request('timeout2') !== null && ($data->timeout == '')){
                $data->timeout   = $now;
            }
            

            $data->update();

            return redirect('visitors/create')
            ->with('mssg', 'Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
