<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ServiceDetails;
use Illuminate\Support\Facades\Log;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'file' => 'required|string'
    ]);

    try {
        $fileData = base64_decode($request->input('file'));
        $pdfPath = storage_path('/uploads/proposal.pdf');

        if (!file_put_contents($pdfPath, $fileData)) {
            return response()->json(['message' => 'Failed to save PDF.'], 500);
        }

        Mail::to($request->input('email'))->send(new ServiceDetails($pdfPath));

        return response()->json(['message' => 'Email sent successfully.']);
    } catch (\Exception $e) {
        Log::error('Email sending failed: ' . $e->getMessage());
        return response()->json(['message' => 'Email sending failed: ' . $e->getMessage()], 500);
    }
}

    
}
