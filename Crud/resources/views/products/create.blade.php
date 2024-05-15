<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <H1>check if it works</H1>

    <form method="POST" action="{{ route('product.store') }}">
        @csrf
        @method('post')
        <div>
            <label >name</label>
            <input type="text" name="name" placeholder="name" id="">
        </div>
        <div>
            <label >qty</label>
            <input type="text" name="qty" placeholder="qty" id="">
        </div>
        <div>
            <label >price</label>
            <input type="text" name="price" placeholder="price" id="">
        </div>
        <div>
            <label >description</label>
            <input type="text" name="description" placeholder="description" id="">
        </div>
<br>
        <div>
            <input type="submit" value="Save a new order">
        </div>
    </form>
</body>
</html>