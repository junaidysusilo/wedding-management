<?php

namespace App\Http\Controllers;

use App\Models\Bride;
use App\Models\Tenant;
use Illuminate\Http\Request;

class BrideController extends Controller
{
    public function create(Tenant $tenant)
    {
        return view('tenants.brides.create', [
            'tenant' => $tenant
        ]);
    }

    public function store(Request $request)
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

        Bride::create($validatedData);

        return redirect(route('tenants.index'))->with('success', 'All tenant data have been added!');
    }

    public function edit(Tenant $tenant, Bride $bride)
    {
        return view('tenants.brides.edit', [
            'bride' => $bride,
            'tenant' => $tenant
        ]);
    }

    public function update(Tenant $tenant, Request $request, Bride $bride)
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

        Bride::where('id', $bride->id)
            ->update($validatedData);

        return redirect(route('tenants.index'))->with('success', 'All data have been updated!');
    }
}
