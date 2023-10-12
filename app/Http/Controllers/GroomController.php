<?php

namespace App\Http\Controllers;

use App\Models\Groom;
use App\Models\Tenant;
use Illuminate\Http\Request;

class GroomController extends Controller
{
    public function create(Tenant $tenant)
    {
        return view('tenants.grooms.create', [
            'tenant' => $tenant
        ]);
    }

    public function store(Request $request, Tenant $tenant)
    {
        $validatedData = $request->validate([
            'tenant_id' => 'required',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required',
            'bank_account' => 'required',
            'destination_bank' => 'required',
            'address' => 'required',
            'birthdate' => 'required',
            'fathers_name' => 'required',
            'mothers_name' => 'required'
        ]);

        Groom::create($validatedData);
        return redirect(route('tenants.brides.create', ['tenant' => $tenant->id]))->with('success', 'Data have been saved');
    }

    public function edit(Tenant $tenant, Groom $groom)
    {
        return view('tenants.grooms.edit', [
            'groom' => $groom,
            'tenant' => $tenant->load('bride')
        ]);
    }

    public function update(Request $request, Groom $groom, $tenant)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required',
            'bank_account' => 'required',
            'destination_bank' => 'required',
            'address' => 'required',
            'birthdate' => 'required',
            'fathers_name' => 'required',
            'mothers_name' => 'required'
        ]);

        Groom::where('id', $groom->id)
            ->update($validatedData);

        return redirect(route('tenants.brides.edit', ['tenant' => $tenant, 'groom' => $groom->id]))->with('success', 'Groom data have been updated!');
    }
}
