@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{route('saveUser')}}" method="POST">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                <label for="Username">題名</label><br>
                <input type="text" class="form-control" name="username" placeholder=""><br>
                <label for="Nationality">memo</label><br>
                <textarea type="text" class="form-control" name="nationality" placeholder="memo" style="height:600px"></textarea><br>
                <button type="submit" class="btn btn-primary mt-3">新規作成<button>
            </form>
        </div>
    </div>
</div>

@endsection
