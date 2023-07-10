<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;
use App\Http\Requests\GenerateImageRequest;

class TextToImageController extends Controller
{
    public function generateImage(GenerateImageRequest $request)
    {
        $response = OpenAI::images()->create([
            'prompt' => $request->input('prompt'),
            'n' => 5,
            "size" => $request->get('size'),
            "response_format" => "url"
        ]);

        return Inertia::render('Tools/TextToImage', [
            'images' => $response['data']
        ]);
    }
}
