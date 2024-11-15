<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($errors->any())
       <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
       </ul>
    @endif
    <form action="{{route('books.store')}}" method="POST">
    @csrf
    <label for="book_genre">Válasz ki a műfajt:</label>
        <select name="book_genre" id="book_genre">
            @foreach ($topics as $topic)
                <option value="{{$topic->topic_book_genre}}">{{$topic->topic_book_genre}}</option>
            @endforeach
        </select><br>
        <label for="book_title">Könyv címe:</label>
        <input type="text" name="book_title" id="book_title">
        <br>
        <label for="book_year">Kiadási év:</label>
        <input type="date" name="book_year" id="book_year">
    <br>
        <button type="submit">Új könyv</button>
    </form>
</body>
</html>