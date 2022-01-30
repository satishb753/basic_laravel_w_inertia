@forelse ($products as $product)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <!-- <td><img src="image/{{ $product->image }}" width="100px"></td> -->
            <td><img src="{{URL('image/'.$product->image) }}" width="100px"></td>

            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>
                <form action="{{route('products.destroy' , $product->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{route('products.edit' , $product->id)}}" class="mt-1 btn btn-primary">Update</a>
                    <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger"> Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <td colspan="5" style="text-align: center;">No Products</td>
@endforelse 