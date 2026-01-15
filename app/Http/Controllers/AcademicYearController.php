<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcademicYear;

class AcademicYearController extends Controller
{
    // Liste des années académiques
    public function index()
    {
        $academicYears = AcademicYear::all();
        return view('academic_years.index', compact('academicYears'));
    }

    // Formulaire création
    public function create()
    {
        return view('academic_years.create');
    }

    // Enregistrement
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required|unique:academic_years,libelle',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
            'is_active' => 'nullable|boolean',
        ]);

        // Si l'utilisateur coche "active", on désactive les autres
        // if ($request->has('is_active') && $request->is_active) {
        //     AcademicYear::where('is_active', true)->update(['is_active' => false]);
        // }

        AcademicYear::create([
            'libelle' => $request->libelle,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('academic-years.index')
            ->with('success', 'Année académique créée avec succès');
    }

    // Formulaire édition
    public function edit(AcademicYear $academicYear)
    {
        return view('academic_years.edit', compact('academicYear'));
    }

    // Mise à jour
    public function update(Request $request, AcademicYear $academicYear)
    {
        $request->validate([
            'libelle' => 'required|unique:academic_years,libelle,' . $academicYear->id,
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->has('is_active') && $request->is_active) {
            AcademicYear::where('is_active', true)
                ->where('id', '!=', $academicYear->id)
                ->update(['is_active' => false]);
        }

        $academicYear->update([
            'libelle' => $request->libelle,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('academic-years.index')
            ->with('success', 'Année académique mise à jour');
    }
}
