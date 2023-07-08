<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\Chat;
use Illuminate\Http\Request;
use App\Http\Requests\ChatRequest;
use OpenAI\Laravel\Facades\OpenAI;

class ChatController extends Controller
{
    public function index(string $id = null): Response
    {
        return Inertia::render('Tools/Chat/index', [
            'chat' => fn () => $id ? Chat::findOrFail($id) : null,
            'messages' => Chat::latest()->where('user_id', auth()->user()->id)->get()
        ]);
    }
    public function chat(ChatRequest $request, string $id = null)
    {
        $messages = [];
        if ($id) {
            $chat = Chat::findOrFail($id);
            $messages = $chat->context;
        }
        $messages[] = ['role' => 'user', 'content' => $request->input('prompt')];
        $response = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => $messages
        ]);
        $messages[] = ['role' => 'assistant', 'content' => $response->choices[0]->message->content];


        $chat = Chat::updateOrCreate(
            [
                'id' => $id,
                'user_id' => auth()->user()->id
            ],
            [
                'context' => $messages
            ]
        );

        return redirect()->route('chat.show', [$chat->id]);
    }

    public function destroy(Chat $chat)
    {
        $chat->delete();
        return to_route('chat.show');
    }
}
