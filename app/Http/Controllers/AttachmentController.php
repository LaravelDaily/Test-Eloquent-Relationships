<?php

namespace App\Http\Controllers;

use App\Models\Attachment;

class AttachmentController extends Controller
{
    public function index()
    {
        $attachments = Attachment::all()
            ->loadMorph('attachable', 'attachments');

        return view('attachments.index', compact('attachments'));
    }
}
