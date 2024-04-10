<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;   
use App\Models\Feedback;

class FeedbackController extends Controller 
{
    public function index(): View {
        // fetch all Todos
        $feedbacks = Feedback::all();
        return view('feedbacks.all', [ 'feedbacks' => $feedbacks ]); // Check feedbacks.all vs feedback.all = feedbacks

    }

    public function new(): View {
        return view('feedbacks.new'); // = feedbacks
    }

    public function create(Request $request): RedirectResponse {
        Feedback::create([ 'name' => $request->name, 'feedback' => $request->feedback ]);
        return redirect('/feedback');
    }

    public function edit(Request $request): View {
        $feedback = Feedback::find($request -> id);
        return view('feedbacks.edit', ['feedback' => $feedback]); // = feedbacks
    }

    public function update(Request $request): RedirectResponse {
        $feedback = Feedback::find($request -> id);
        $feedback->feedback = $request->feedback;
        $feedback->save();
        return redirect('/feedback');
    }

    public function delete(Request $request): RedirectResponse {
        $feedback = Feedback::find($request -> id);
        $feedback->delete(); 
        return redirect('/feedback'); // = feedbacks
    }
}
