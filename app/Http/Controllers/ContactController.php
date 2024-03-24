<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();

        return view('layout.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact_page.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $messagePT = [
            'required' => "O campo é obrigatorio"
        ];
        $request->validate([
            'name' =>'required|min:6',
            'contact' =>'required|numeric|digits:9|unique:contacts,contact',
            'email' =>'required|email|unique:contacts,email',
        ],$messagePT);

        Contact::create([
            'name' => $request->name,
            'contact' => $request->contact,
            'email' => $request->email,
        ]);

        
        $notification = [
            "message" => "Contacto registado com sucesso",
            'alert-type' => "success"
        ];

        // return back()->with($notification);
        return redirect()->route('index')->with($notification);

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
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contact_page.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $messagePT = [
            'required' => "O campo é obrigatorio"
        ];
        $request->validate([
            'name' =>'required|min:6',
            'contact' =>'required|numeric|digits:9',
            'email' =>'required|email',
        ],$messagePT);

        Contact::whereId($id)->update([
           "name" => $request->name,
           "contact" => $request->contact,
           "email" => $request->email,
        ]);

        $notification = [
            "message" => "Dados do contacto actualizados com sucesso",
            'alert-type' => "success"
        ];

        // return back()->with($notification);

        return redirect()->route('index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::find($id);
        
        $contact->delete();

        $notification = [
            "message" => "Contacto removido com sucesso",
            'alert-type' => "success"
        ];

        return back()->with($notification);
    }
}
