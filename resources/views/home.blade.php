<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/home.css">
    <title>Shoe Shop</title>
</head>
<body>
    <div class="container">
        <div class="create">
            <a href="/create">+ Create New Shoe</a>
        </div>
        <div class="table">
            <table class="table table-borderless table-dark">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($shoes as $s)
                    <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$s->name}}</td>
                    <td>{{$s->price}}</td>
                    <td>
                        <div class="actions">
                            <div class="edit">
                                <a href="{{route('shoe.edit',$s->id)}}">Edit</a>
                            </div>
                            <div class="delete">
                                <form class="form" id="delete-form" action="{{ route('shoe.delete', $s->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @method('delete')
                                    @csrf
                                    <button class="delete" type="submit">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>