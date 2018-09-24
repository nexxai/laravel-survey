@extends('survey::layouts.app')

@section('content')
    <div class="sv-flex sv-flex-wrap md:sv-p-4">
        <div class="sv-w-full md:sv-w-1/2">
            <div class="sv-card">
                <div class="sv-card-header">
                    <p class="sv-card-title">{{$question->title}}</p>
                    <a href="{{ route('survey::categories.questions.edit', [$category, $question]) }}" class="sv-btn sv-btn-primary">Edit</a>
                </div>
            </div>
        </div>
        <div class="sv-w-full md:sv-w-1/2">
            <div class="sv-card">
                @php(dump($question))
            </div>
        </div>
    </div>
@endsection