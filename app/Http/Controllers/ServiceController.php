<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service; 
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;


class ServiceController extends Controller
{

    public function index()
    {
        $data = Service::get();
        return view('services.index', compact('data'));
    }

    public function create()
    {
        return view('services.create'); // Return a form for adding a service
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'tagline' => 'required|string',
            'description' => 'required|string',
        ]);
    
        Service::create($validated); // Save the service
        return redirect()->route('services.index')->with('success', 'Service added successfully.'); 
    }

    /**
     * Display the specified resource.
     */
    public function edit($id)
    {
        $data = Service::findOrFail($id); // Find service by ID
        return view('services.create', compact('data')); // Pass service to the edit form
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'title' => 'required|string|max:255',
            'tagline' => 'required|string',
            'description' => 'required|string',

        ]);

        $data = Service::findOrFail($request->id);
        if($data){
            try
            {
                $data->update([
                    'title' => $request->title,
                    'tagline' => $request->tagline,
                    'description' => $request->description
                ]);
                Session::flash('message', 'Service updated successfully!');
                Session::flash('alert-class', 'alert-success');
            } catch(\Exception $e)
            {
                Log::error('Update Failed. '. $e->getMessage());
                Session::flash('message', 'Something went wrong. Please try again later.');
                Session::flash('alert-class', 'alert-danger');
            }
        } else {
            Session::flash('message', 'Invalid Service ID');
            Session::flash('alert-class', 'alert-danger');
        }
        return redirect(route('services.index'));
    }



    public function destroy($id)
    {
        $data = Service::findOrFail($id);
        try
        {
            $data->delete();
            Session::flash('message', 'Service deleted successfully!');
            Session::flash('alert-class', 'alert-success');

        } catch (\Exception $e)
        {
            Log::error('Delete operation failed. '. $e->getMessage());
            Session::flash('message', 'Something went wrong. Please try again later.');
            Session::flash('alert-class', 'alert-danger');
        }
        return redirect(route('services.index'));
    }
}