<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('topic.store')}}" method="POST">
        @csrf
        <label for="topic_book_genre">Adj meg egy műfajt:</label>
         <input type="text" name="topic_book_genre" id="topic_book_genre">
         <button type="submit">SAVE</button>
    </form>
</body>
</html>