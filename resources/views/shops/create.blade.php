 @extends('layouts.app');

 @section('content')
    <h2>Submit your shop</h2>

    <form action="{{route('shops.store')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Name of shop</label>
            <input type="text" name="name" class="form-control" id="">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>

        <button type="submit" class="btn-primary">Submit</button>
    </form>
 @endsection
