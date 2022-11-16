<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/feather-icons-web/feather.css') }}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card my-5">
                    <div class="card-body">
                        <h3>Update item info</h3>
                        <hr>
                        @if (session('status'))
                            <p class="alert alert-success">
                                {{ session('status') }}
                            </p>
                        @endif


                        <form action="{{ route('form.update', $currentItem->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" placeholder="item name" name="name"
                                    value="{{ $currentItem->name }}"
                                    class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                    <small class="text-danger font-weight-bold">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="number" placeholder="item price (MMK)" name="price"
                                            value="{{ $currentItem->price }}"
                                            class="form-control @error('price') is-invalid @enderror">
                                        @error('price')
                                            <small class="text-danger font-weight-bold">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="number" placeholder="Stock(piece)" name="stock"
                                            value="{{ $currentItem->stock }}"
                                            class="form-control @error('stock') is-invalid @enderror">
                                        @error('stock')
                                            <small class="text-danger font-weight-bold">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <button class="btn btn-primary">Update Item</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('delete-status'))
                            <p class="alert alert-danger">
                                {{ session('delete-status') }}
                            </p>
                        @endif
                        @include('request-response.list')

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
