<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\EventRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventRegistrationController extends Controller
{
    public function index()
    {
        $registrations = EventRegistration::all();
        return response()->json([
            'code' => 200,
            'message' => 'Success',
            'data' => $registrations
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_partisipasi' => 'required|string|max:255',
            'nama_event' => 'required|string|max:255',
            'tanggal_event' => 'required|date',
            'nomor_registrasi' => 'required|string|unique:registrasi_event,nomor_registrasi|max:10',
            'kategori' => 'required|string|max:50',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'code' => 400,
                'message' => 'Failed',
                'errors' => $validator->errors()
            ], 400);
        }

        EventRegistration::create($request->all());

        return response()->json([
            'code' => 200,
            'message' => 'Success'
        ]);
    }
}
