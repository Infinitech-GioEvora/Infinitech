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

    $fileData = str_replace('data:application/pdf;base64,', '', $request->input('file'));
    $fileData = base64_decode($fileData);
    
    $pdfPath = storage_path('/uploads/proposal.pdf');

    if (!file_put_contents($pdfPath, $fileData)) {
        return response()->json(['message' => 'Failed to save PDF.'], 500);
    }

    try {
        Mail::to($request->input('email'))->send(new ServiceDetails($pdfPath));
    } catch (\Exception $e) {
        return response()->json(['message' => 'Email sending failed: ' . $e->getMessage()], 500);
    }

    return response()->json(['message' => 'Email sent successfully.']);
}

}
