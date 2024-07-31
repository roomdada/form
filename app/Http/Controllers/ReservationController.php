<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController
{
    public function create($eventId)
    {
        return view('reservations.create', compact('eventId'));
    }

    public function store(Request $request)
    {
        $request->validate([
             'first_name' => ['required', 'string', 'max:255'],
             'last_name' => ['required', 'string', 'max:255'],
             'phone' => ['required', 'string', 'max:255'],
        ]);

        Reservation::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'event_id' => $request->eventId
        ]);

        session()->flash('success', 'La reservation a été enregistrée avec succès');
        return redirect()->back();
    }
}