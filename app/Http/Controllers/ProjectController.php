<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('services')->get();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        $services = Service::all(); // Fetch all services
        return view('projects.create', compact('services'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'services' => 'required|array',
            'figma_link' => 'nullable|url|max:255',
        ]);

        try {
            // Store the uploaded image
            $filePath = $request->file('picture')->store('uploads', 'public');
            $fileName = basename($filePath);

            // Create the project
            $project = Project::create([
                'title' => $validated['title'],
                'picture' => $fileName,
                'figma_link' => $validated['figma_link'],// Save the Figma link
            ]);

            // Attach services to the project
            $project->services()->attach($validated['services']);

            // Flash success message
            Session::flash('message', 'Project created successfully!');
            Session::flash('alert-class', 'alert-success');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            Session::flash('message', 'Something went wrong. Please try again later.');
            Session::flash('alert-class', 'alert-danger');
        }

        return redirect()->route('projects.index');
    }
    

    public function edit($id)
    {
        $project = Project::with('services')->findOrFail($id);
        $services = Service::all();
        return view('projects.create', compact('project', 'services'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'services' => 'required|array',
            'figma_link' => 'nullable|url|max:255',
        ]);

        $project = Project::findOrFail($id);

        // Update image if provided
        if ($request->hasFile('picture')) {
            $filePath = $request->file('picture')->store('uploads', 'public');
            $fileName = basename($filePath);
            $project->update(['picture' => $fileName]);
        }

        $project->update([
            'title' => $validated['title'],
            'figma_link' => $validated['figma_link'],
        ]);

        // Sync services
        $project->services()->sync($validated['services']);

        $project->update(['figma_link' => $validated['figma_link']]);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
