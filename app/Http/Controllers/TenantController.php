<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use App\Models\Groom;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function index()
    {
        return view('tenants.index', [
            'tenants' => Tenant::get()
        ]);
    }

    public function create()
    {
        return view('tenants.create', [
            'tenants' => Tenant::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $tenant = Tenant::create($validatedData);

        return redirect()->route('tenants.grooms.create', ['tenant' => $tenant->id])->with('success', 'Data have been saved!');
    }

    public function edit(Tenant $tenant)
    {
        return view('tenants.edit', [
            'tenant' => $tenant->load(['groom']),
        ]);
    }

    public function update(Request $request, Tenant $tenant, Groom $groom)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        Tenant::where('id', $tenant->id)
            ->update($validatedData);

        return redirect()->route('tenants.grooms.edit', ['groom' => $groom->id, 'tenant' => $tenant->id])->with('success', 'Tenant data have been updated!');
    }

    public function destroy(Tenant $tenant)
    {
        $tenant->load(['groom', 'bride']);
        $tenant->groom->delete();
        $tenant->bride->delete();
        $tenant->delete();

        return redirect(route('tenants.index'))->with('success', 'Tenant have been deleted!');
    }
}
