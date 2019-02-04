<?php

namespace LaraDex\Http\Controllers;

use Illuminate\Http\Request;
use LaraDex\Trainer;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return 'Hola desde el Controlador Trainer Resource';
        //return view('trainers.index');

        $trainers = Trainer::all();

        //dd($trainers);
        
        return view('trainers.index', compact('trainers'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request);
        //return 'Request enviada!!';
        //return $request->all();
        //return $request->name;
        //return $request->input('name');

        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();

            $file->move(public_path().'/images/', $name);

            //return $name;
        }        

        $trainer = new Trainer();
        $trainer->name = $request->input('name');
        $trainer->avatar = $name;
        $trainer->save();

        //return 'Saved';

        return redirect()->route('trainers.index');
        
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function show($id)
    {
        
        $trainer = Trainer::find($id);
        //dd($trainer);
        //return $trainer;
        //return 'tengo que retornar el recurso con id'. $id;
        return view('trainers.show', compact('trainer'));
        
    } */
    
    /**
     * Display the specified resource.
     * Con Implicit Binding
     * @param  Trainer  $trainer
     * @return \Illuminate\Http\Response
     * 
     */
    public function show(Trainer $trainer)
    {
        
        return view('trainers.show', compact('trainer'));
        
    }
    
    /**
     * Display the specified resource.
     * Con Slug
     * @param  string $slug
     * @return \Illuminate\Http\Response
     * 
     */
    /*public function show($slug)
    {
        
        //return $slug;
        $trainer = Trainer::where('slug','=',$slug)->firstOrFail();
        return view('trainers.show', compact('trainer'));
        
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        
        //return $trainer;
        return view('trainers.edit', compact('trainer'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        //
        //return $trainer;
        //return $request;
        //$trainer->fill($request->all());
        $trainer->fill($request->except('avatar'));
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $trainer->avatar = $name;
            $file->move(public_path().'/images/', $name);

            //return $name;
        }    
        $trainer->save();

        //return 'Updated';

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
