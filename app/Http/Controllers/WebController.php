<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service; 

class WebController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }
    public function search(Request $request)
    {
    $query = $request->input('query');
    $services = Service::where('name', 'like', '%' . $query . '%')->get();

    return view('services.index', compact('services'))->with('query', $query);
    }
    
    public function storeContact(Request $request)
    {
    // Validate form input
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    //contact form submission logic 

    // Redirect or provide feedback
    return redirect()->back()->with('success', 'Message sent successfully!');
    }

    public function storeService(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'tagline' => 'nullable|string|max:255',
        'description' => 'required|string',
        'benefits' => 'nullable|json',
        'images' => 'nullable|json',
        'testimonials' => 'nullable|json',
    ]);

    Service::create($validatedData);
    return redirect()->route('services')->with('success', 'Service added successfully.');
}


    public function show($id)
{
    $service = Service::findOrFail($id);
    return view('services.show', compact('service'));
}

}

