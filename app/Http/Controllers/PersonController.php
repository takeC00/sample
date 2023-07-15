<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Person::all();
        return view('person.index', ['items' => $items]);
    }

    public function find(Request $request)
    {
        return view('person.find', ['input' => '']);
    }

    public function search(Request $request)
    {
        $min = $request->input * 1;
        $max = $min+10;
        $item = Person::ageGreater($min)->ageLess($max)->first();
        $param = ['input' => $request->input, 'item' => $item];
        return view('person.find', $param);
    }

    public function add(Request $request)
    {
        return view('person.add');
    }

    /**
     * Display the specified resource.
     */
    public function create(Request $request)
    {
        $this->validate($request, Person::$rules);
        $person = new Person;
        $form = $request->all();
        unset($form['__token']);
        $person->fill($form)->save();
        return redirect('/person');
    }

    public function edit(Request $request, string $id)
    {
        $person = Person::where('id',$id)->first();

        return view('person.edit',compact('person'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $person = Person::where('id', $request->id)->first();
        
        $person->name = $request->name;
        $person->mail = $request->mail;
        $person->age = $request->age;
        $person->update();

        return redirect('/person');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
