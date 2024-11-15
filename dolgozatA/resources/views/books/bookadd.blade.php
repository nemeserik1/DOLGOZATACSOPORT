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
    <label for="topic_id">Válasz ki a műfajt:</label>
        <select name="topic_id" id="topic_id">
            @foreach ($topics as $topic)
                <option value="{{$topic->id}}">{{$topic->topic_book_genre}}</option>
            @endforeach
        </select><br>
        
    </form>
</body>
</html>