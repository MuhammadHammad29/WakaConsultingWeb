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

    public function service()
    {
        return view('service');
    }

    public function contact()
    {
        return view('contact');
    }

    public function designService()
    {
    return view('design');
    }

    public function developmentService()
    {
    return view('development');
    }

    public function marketingService()
    {
    return view('marketing');
    }

    public function show($id)
    {
        $data = Service::findOrFail($id); // Fetch service by ID
        return view('services.show', compact('data')); // Pass service to the view
        
    }

    public function searchServices(Request $request)
{
    $query = $request->input('query');

    // Search for services based on title or another field
    $services = Service::where('title', 'LIKE', '%' . $query . '%')
        ->orWhere('description', 'LIKE', '%' . $query . '%')
        ->limit(10)
        ->get();

    return response()->json($services);
}



}

