<?php

namespace App\Http\Controllers;

use App\Models\TopicMastery;
use App\Services\ContentService;
use App\Services\ReviewService;
use Illuminate\View\View;

class ReviewController extends Controller
{
    public function index(ContentService $content, ReviewService $review): View
    {
        return view('review.index', [
            'items' => $review->session(),
            'dueTopics' => $review->dueTopics(),
            'nextReview' => TopicMastery::query()->whereNotNull('next_review_at')->orderBy('next_review_at')->first(),
            'content' => $content,
        ]);
    }
}
