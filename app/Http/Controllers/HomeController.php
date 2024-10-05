<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function contact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:225',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric|min:10',
            'address' => 'nullable|string|max:255',
            'notes' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $Product = new Kontak(); // Ensure your model is named correctly
        $Product->name = $request->name;
        $Product->email = $request->email;
        $Product->phone = $request->phone;
        $Product->address = $request->address;
        $Product->notes = $request->notes;
        $Product->save();

        return redirect()->back()->with('success', 'Contact saved successfully!'); // Redirect with a success message
    }

    public function show()
    {
        $Product = Kontak::paginate(4);
        return view("table", compact("Product"));
    }

    public function edit($id)
    {
        $Product = Kontak::findOrFail($id);
        return view("editKontak", compact("Product"));
    }

    public function update(Request $request, $id)
    {
        $Product = Kontak::findOrFail($id);

        $Product->name = $request->name;
        $Product->email = $request->email;
        $Product->phone = $request->phone;
        $Product->address = $request->address;
        $Product->notes = $request->notes;
        $Product->save();

        return redirect("/show");
    }

    public function destroy($id)
    {
        $Product = Kontak::findOrFail($id);
        $Product->delete();
        return redirect("/show");
    }

    public function input()
    {
        return view("inputKontak");
    }
}
