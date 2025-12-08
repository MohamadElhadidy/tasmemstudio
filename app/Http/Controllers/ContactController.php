<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{

    public function send(Request $request)
    {
        // ✅ Validate form data (matches your HTML form)
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:50',
            'message' => 'required|string',
        ]);

        // ✅ Move token to .env file (recommended)
        $apiToken = "7690572304:AAG5J8rw4EsJ_OFDVQZGJzIMReQGgZmwXgc";
        $chatId = '-1002597691116';

        // ✅ Build Telegram message
        $text = "📩 *New Message from Website*\n\n";
        $text .= "👤 *Name:* {$validated['name']}\n";
        $text .= "📧 *Email:* {$validated['email']}\n";
        $text .= "📱 *Phone:* " . ($validated['phone'] ?? 'N/A') . "\n";
        $text .= "💬 *Message:*\n{$validated['message']}";

        // ✅ Send to Telegram
        try {
            $response = Http::post("https://api.telegram.org/bot{$apiToken}/sendMessage", [
                'chat_id' => $chatId,
                'text' => $text,
                'parse_mode' => 'Markdown'
            ]);


            if ($response->successful()) {
                return response()->json([
                    'status' => 'success',
                    'message' => '✅ Thank you! Your message has been sent.'
                ], 200);
            }

            return response()->json([
                'status' => 'error',
                'message' => '❌ Failed to send the message.'
            ], 500);

        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => '⚠️ Server error. Please try again later.'
            ], 500);
        }
    }

}
