<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
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

        Tenant::create($validatedData);

        return redirect(route('tenants.index'))->with('success', 'New tenant have been added!');
    }

    public function edit(Tenant $tenant)
    {
        return view('tenants.edit', [
            'tenant' => $tenant,
            'tenants' => Tenant::all()
        ]);
    }

    public function update(Request $request, Tenant $tenant)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        Tenant::where('id', $tenant->id)
            ->update($validatedData);

        return redirect(route('tenants.index'))->with('success', 'Tenant have been updated!');
    }

    public function destroy(Tenant $tenant)
    {
        Tenant::destroy($tenant->id);

        return redirect(route('tenants.index'))->with('success', 'Tenant have been deleted!');
    }
}
