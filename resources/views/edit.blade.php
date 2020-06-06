<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/create.css">
    <title>Edit Shoe</title>
</head>
<body>
    <div class="create">
        <h2>Edit Shoe</h2>
        <form action="{{route('shoe.patch',$shoe->id)}}" method="POST">
            @method('patch')
            @csrf
            <label for="name">Name :</label>
            <input type="text" id="name" name="name" placeholder="Shoe's Name" value="{{$shoe->name}}">
            <label for="description">Description :</label>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Shoe's Description">{{$shoe->description}}</textarea>
            <label for="price">Price :</label>
            <input type="text" id="price" name="price" placeholder="Shoe's Price" value="{{$shoe->price}}">
            <button type="submit">Send</button>
        </form>
    </div>
</body>
</html>