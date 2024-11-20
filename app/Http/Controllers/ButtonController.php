<?php

namespace App\Http\Controllers;

use App\Models\Button;
use Illuminate\Http\Request;

class ButtonController extends Controller
{
    public function showDashboard()
    {
        $buttons = Button::all();
        return view('dashboard', compact('buttons'));
    }

    public function editButton($id)
    {
        $button = Button::findOrFail($id);
        return view('edit-button', compact('button'));
    }

    public function updateButton(Request $request, $id)
    {
        $button = Button::findOrFail($id);

        $request->validate([
            'color' => 'required|regex:/^#[0-9A-Fa-f]{6}$/',
            'hyperlink' => 'nullable|url',
        ]);

        $button->color = $request->input('color');
        $button->hyperlink = $request->input('hyperlink');
        $button->save();

        session()->flash('success', 'Button "' . $button->id . '" has been updated successfully!');
        session()->flash('color', $button->color);

        return redirect()->route('dashboard');
    }

    public function deleteButton($id)
    {
        $button = Button::findOrFail($id);
        $button->delete();

        return redirect()->route('dashboard');
    }
}
