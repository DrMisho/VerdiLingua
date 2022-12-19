<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verdilingua</title>
</head>
<body style="text-align: center;">
    <form action="{{ route('translateResult') }}" method="post">
        @csrf
        <label for="">Question</label>
        <br>
        <h4>{{ $question->question }}: </h4>
        <p>{{ $exercise->word }}</p>
        <input type="number" value="{{ $exercise->id }}" hidden name="exercise_id">
        @foreach ($options as $option)
            <input type="radio" name="answer" value="{{ $option->id }}">{{ $option->translate('fr')->option }}
        @endforeach
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
