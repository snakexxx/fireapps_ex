<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Handle</th>
        <th>Image</th>
    </tr>
    @foreach($products->products as $product)
        <tr>
            <td>
                {{ $product->id }}
            </td>
            <td>
                {{ $product->title }}
            </td>
            <td>
                {{ $product->handle }}
            </td>
            <td>
                <img src="{{ isset($product->image->src) ? $product->image->src : '' }}" width="150px" height="150px;" />
            </td>
        </tr>
    @endforeach
</table>