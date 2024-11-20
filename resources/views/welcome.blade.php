<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="dashboard">
        @foreach ($buttons as $button)
            <div class="cell">
                <!-- If the button has a hyperlink set, use it; otherwise, redirect to the edit form -->
                <button class="button" 
                        style="background-color: {{ $button->color }};" 
                        onclick="window.location.href='{{ $button->hyperlink ?: route('editButton', $button->id) }}'">
                    @if (!$button->hyperlink)
                        <span>Set Hyperlink</span>
                    @else
                        <span>Go to Link</span>
                    @endif
                </button>
            </div>
        @endforeach
    </div>
</body>
</html>
