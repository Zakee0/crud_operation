<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <H1>Edit a product</H1>

    <form method="POST" action="{{ route('product.update', ['product' => $product]) }}">
        @csrf
        @method('put')
        <div>
            <label >name</label>
            <input type="text" name="name" placeholder="name" value="{{ $product->name }}">
        </div>
        <div>
            <label >qty</label>
            <input type="text" name="qty" placeholder="qty"  value="{{ $product->qty }}" id="">
        </div>
        <div>
            <label >price</label>
            <input type="text" name="price" placeholder="price"   value="{{ $product->price }}" id="">
        </div>
        <div>
            <label >description</label>
            <input type="text" name="description" placeholder="description" value="{{ $product->description }}" id="">
        </div>
<br>
        <div>
            <input type="submit" value="edit">
        </div>
    </form>
</body>
</html>