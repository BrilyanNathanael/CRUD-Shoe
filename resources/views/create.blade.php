<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/create.css">
    <title>Create Shoe</title>
</head>
<body>
    <div class="create">
        <h2>Create Shoe</h2>
        <form action="/create" method="POST">
            @csrf
            <label for="name">Name :</label>
            <input type="text" id="name" name="name" placeholder="Shoe's Name">
            <label for="description">Description :</label>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Shoe's Description"></textarea>
            <label for="price">Price :</label>
            <input type="text" id="price" name="price" placeholder="Shoe's Price">
            <button type="submit">Send</button>
        </form>
    </div>
</body>
</html>