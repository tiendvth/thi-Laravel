<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div style="height: 150px" class="text-center mt-4"><h2>Books</h2></div>
    <div>
        <form action="">
            <div class="row">
                <div class="form-group col-10">
                    <input type="text" class="form-control" placeholder="Enter keyword" name="search">
                </div>
                <div class="form-group col-2">
                    <button class="form-control btn btn-primary">Search</button>
                </div>
            </div>
        </form>
    </div>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">Title</th>
            <th scope="col">ISBN</th>
            <th scope="col">Public year</th>
            <th scope="col">Available</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->title}}</td>
                <td>{{$item->ISBN}}</td>
                <td>{{$item->pub_year}}</td>
                <td>{{$item->available == 1 ? 'Có trong thư viện' : 'Đã hết'}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
    <div style="height: 70px;width: 100%;">
        {{$books->links()}}
    </div>
</div>
</body>
</html>
