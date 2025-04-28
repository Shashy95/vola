<?php

namespace App\Http\Controllers;

use App\Helpers\UploadHelper;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::latest()->get();
        return view('admin.pages.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.pages.clients.form', ['client' => new Client()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'logo' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $client = new Client();
        $client->name = $request->name;
        $client->description = $request->description;
        $client->link = $request->link;

        if ($request->hasFile('logo')) {
            $client->logo = UploadHelper::uploadPublicFile($request->file('logo'), 'clients');
        }

        $client->save();

        return redirect()->route('clients.index')->with('success', 'Client added successfully.');
    }

    public function edit(Client $client)
    {
        return view('admin.pages.clients.form', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $client->name = $request->name;
        $client->description = $request->description;
        $client->link = $request->link;

        if ($request->hasFile('logo')) {
            if ($client->logo && file_exists(public_path($client->logo))) {
                unlink(public_path($client->logo));
            }
            $client->logo = UploadHelper::uploadPublicFile($request->file('logo'), 'clients');
        }

        $client->save();

        return redirect()->route('clients.index')->with('success', 'Client updated successfully.');
    }

    public function destroy(Client $client)
    {
        if ($client->logo && file_exists(public_path($client->logo))) {
            unlink(public_path($client->logo));
        }
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Client deleted successfully.');
    }
}
