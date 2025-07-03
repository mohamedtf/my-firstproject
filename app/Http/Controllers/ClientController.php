<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    // List all students
    public function index()
    {
        $etudiants = Etudiant::paginate(5);
        return view('list', compact('etudiants'));
    }

    // Show form to create new student
    public function create()
    {
        $classPrices = [
            'level1' => 30000,
            'level2' => 35000,
            'level3' => 40000,
        ];

        return view('create', compact('classPrices'));
    }

    // Store new student data
    public function store(Request $request)
    {
        $request->validate([
            'clientname' => 'required',
            'clientnumber' => 'required',
            'studentname' => 'required',
            'studentlevel' => 'required',
            'amount' => 'required|numeric',
            'payment_method' => 'required',
            'payment_date' => 'required|date',
            'payment_proof' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $data = $request->only([
            'clientname',
            'clientnumber',
            'studentname',
            'studentlevel',
            'amount',
            'payment_method',
            'payment_date',
        ]);

        if ($request->hasFile('payment_proof')) {
            $data['payment_proof'] = $request->file('payment_proof')->store('payment_proofs', 'public');
        }

        Etudiant::create($data);

        return redirect()->route('store.index')->with('success', 'تم التسجيل بنجاح!');
    }

    // Show form to edit student
    public function edit(Etudiant $etudiant)
    {
        $classPrices = [
            'level1' => 30000,
            'level2' => 35000,
            'level3' => 40000,
        ];

        return view('edit', compact('etudiant', 'classPrices'));
    }

    // Update student data
    public function update(Request $request, Etudiant $etudiant)
    {
        $request->validate([
            'clientname' => 'required',
            'clientnumber' => 'required',
            'studentname' => 'required',
            'studentlevel' => 'required',
            'amount' => 'required|numeric',
            'payment_method' => 'required',
            'payment_date' => 'required|date',
            'payment_proof' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $etudiant->clientname = $request->clientname;
        $etudiant->clientnumber = $request->clientnumber;
        $etudiant->studentname = $request->studentname;
        $etudiant->studentlevel = $request->studentlevel;
        $etudiant->amount = $request->amount;
        $etudiant->payment_method = $request->payment_method;
        $etudiant->payment_date = $request->payment_date;

        if ($request->hasFile('payment_proof')) {
            // Delete old file if exists
            if ($etudiant->payment_proof) {
                Storage::disk('public')->delete($etudiant->payment_proof);
            }
            $etudiant->payment_proof = $request->file('payment_proof')->store('payment_proofs', 'public');
        }

        $etudiant->save();

        return redirect()->route('store.index')->with('success', 'تم تحديث البيانات بنجاح!');
    }

    // Delete student
    public function destroy(Etudiant $etudiant)
    {
        if ($etudiant->payment_proof) {
            Storage::disk('public')->delete($etudiant->payment_proof);
        }

        $etudiant->delete();

        return redirect()->route('store.index')->with('success', 'تم حذف الطالب بنجاح!');
    }
}
