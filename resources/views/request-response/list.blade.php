<div class="d-flex justify-content-between">
    <h3>Item List</h3>
    <a href="{{ route('form.create') }}" class="btn btn-primary feather-plus-circle mb-0"></a>
</div>
<table class="table table-hover mb-0">
    <thead>
        <tr>
            <th>#</th>
            <th>Item Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Control</th>
            <th>Day and Time</th>
        </tr>
    </thead>
    <tbody>
        @foreach (\App\Item::all() as $i)
            <tr>
                <td>{{ $i->id }}</td>
                <td>{{ $i->name }}</td>
                <td>{{ $i->price }}</td>
                <td>{{ $i->stock }}</td>
                <td>
                    <a href="{{ route('form.destory', $i->id) }}" class="btn btn-sm btn-danger feather-trash"></a>
                    <a href="{{ route('form.edit', $i->id) }}" class="btn btn-sm btn-warning feather-edit-3"></a>
                </td>
                <td>{{ $i->created_at->diffForHumans() }}</td>
            </tr>
        @endforeach

    </tbody>
</table>
