<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;
use App\Models\Contact;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        // Guardar en la base de datos
        Contact::create($data);

        // Enviar correo
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMessage($data));

        return back()->with('success', 'Mensaje enviado correctamente.');
    }
}
