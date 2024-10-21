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
                return redirect('/get-proposal')->with('error', 'Failed to save PDF.');
            }

            Mail::to($request->input('email'))->send(new ServiceDetails($pdfPath));

            return redirect('/get-proposal')->with('success', 'Email successfully sent!');
            
        } catch (\Exception $e) {
            Log::error('Email sending failed: ' . $e->getMessage());
            return redirect('/get-proposal')->with('error', 'Email sending failed: ' . $e->getMessage());
        }
    }
}
