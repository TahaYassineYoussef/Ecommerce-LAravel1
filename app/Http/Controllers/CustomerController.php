<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Method to show the admin list
    public function showAdminList()
    {
        // Retrieve customers from the database
        $customers = Customer::all();

        // Return the view with the customers data
        return view('liste-admin', ['data' => $customers]);
    }

    // Method to update a customer
    public function update(Request $request, $id)
    {
        // Find the customer by ID
        $customer = Customer::find($id);

        // Check if customer exists
        if (!$customer) {
            return redirect()->route('liste-admin')->with('error', 'Customer not found.');
        }

        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'nullable|string',
            'created_at' => 'required|date',
            'status' => 'required|in:Active,Blocked',
        ]);

        // Update the customer
        $customer->update([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'created_at' => $request->created_at,
            'status' => $request->status,
        ]);

        return redirect()->route('liste-admin')->with('success', 'Customer updated successfully.');
    }

    // Method to destroy a customer
    public function destroy($id)
    {
        $customer = Customer::find($id);

        if ($customer) {
            $customer->delete();
            return redirect()->route('liste-admin')->with('success', 'Customer deleted successfully.');
        }

        return redirect()->route('liste-admin')->with('error', 'Customer not found.');
    }
}
