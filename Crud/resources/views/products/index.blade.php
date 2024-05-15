<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body bgcolor="orange" >
  <h1>Your Data has been Saved</h1>
  {{-- making session --}}
  <div>
  @if (@session()->has('success'))
  <div>
    {{ session('success') }}
  </div>
      
  
      
  @endif
</div>
  {{-- making loop to print database file in index --}}
  <div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>


        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name  }}</td>
                <td>{{ $product->qty  }}</td>
                <td>{{ $product->price  }}</td>
                <td>{{ $product->description  }}</td>
                <td> 
                {{-- edit --}}
                    <a href="{{ route('product.edit' , ['product' => $product]) }}">  Edit </a>
                     </td>
                    
                     <td> 
                        <form method="POST"  action="{{ route('product.delete' , ['product' => $product]) }}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="delete">
                        </form> 
                    </td>
            </tr>

        @endforeach

    </table>
  </div>
</body>
</html>