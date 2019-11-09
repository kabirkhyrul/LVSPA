<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        return $books;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room = new Room([
            'name' => $request->input('name'),
            'booking_date' => $request->input('booking_date'),
            'checkout_date' => $request->input('checkout_date'),
            'nid' => $request->input('nid'),
            'mobile' => $request->input('mobile'),
            'status' => $request->input('status'),
        ]);
        $room->save();

        return response()->json('The room successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $room = [
            'name' => $request->input('name'),
            'booking_date' => $request->input('booking_date'),
            'checkout_date' => $request->input('checkout_date'),
            'nid' => $request->input('nid'),
            'mobile' => $request->input('mobile'),
            'status' => $request->input('status'),
        ];
        $room->save();

        return response()->json('The room successfully added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();

        return response()->json('The room successfully deleted');
    }
}
