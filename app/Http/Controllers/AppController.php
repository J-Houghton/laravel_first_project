<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ap;
use App\Models\ap as ModelsAp;

class AppController extends Controller
{
    private static function getData() {
        return [
             ['customerID' => 1, 'firstName' => 'Marley ', 'lastName' => 'Chaney', 'points' => 0],
        //     ['customerID' => 2, 'firstName' => 'Joel', 'lastName' => 'Finley', 'points' => 0],
        //     ['customerID' => 3, 'firstName' => 'Annabelle', 'lastName' => 'Fountain', 'points' => 0],
        //     ['customerID' => 4, 'firstName' => 'Mitchel', 'lastName' => 'Mcbride', 'points' => 0]
         ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.index', [
            'app' => ModelsAp::all(),
            'userInput' => '<script>alert("Hello")</script>'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first-name' => 'required',
            'customer-id' => ['required', 'interger'],
            'last-name' => 'required',
            'points' => ['required', 'interger']
        ]);

        $ap = new ModelsAp();

        $ap ->firstName = $request->input('first-name');
        $ap ->lastName = $request->input('last-name');
        $ap ->customerID = $request->input('customer-id');
        $ap ->points = $request->input('points');
        //if (($ap ->firstName && $ap ->lastName))
        $ap -> save();

        return redirect()->route('app.index');
    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($app)
    {
        // $app = self::getData();

        // $index = array_search($app, array_column($app, 'customerID'));

        // if ($index===false) {
        //     abort(404); 
        // }

        // return view('app.show', [
        //     'ap' => $app[$index]
        // ]);
        return view('app.show', [
            'ap' => ModelsAp::findOrFail($app)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
