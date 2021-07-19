<?php namespace App\Http\Controllers\Avl\Settings;

use App\Http\Controllers\Avl\AvlController;
use App\Models\{Feedback};


class FeedbackController extends AvlController
{

    public function index()
    {

        $feedbacks = Feedback::all();

        return view('avl.settings.feedback.index', [
            'feedbacks' => $feedbacks
        ]);
    }

}
