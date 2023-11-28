@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">
                        <a href="{{route('addNewUser')}}" class="btn btn-success">新規追加</a>
                    </th>
                    <th scope="col">名前</th>
                    <th scope="col">住所</th>
                    <th scope="col">性別</th>
                    <th scope="col">メッセージ</th>   
                    {{-- ↑元々国籍入力藍 --}}
                    <th scope="col">誕生日</th>
                    <th scope="col">操作</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post )
                    <tr>
                        <th scope="row">{{$post->id}}　　　　　　</th>
                        <td>{{$post->username}}</td>
                        <td>{{$post->address}}</td>
                        <td>{{$post->gender}}</td>
                        <td>{{$post->nationality}}</td>
                        <td>{{$post->dateOfBirth}}</td>
                        <td>
                            <a href="{{route('updateUser',$post->id)}}" class="btn btn-dark btn-sm m-2" style="width: 100%;">更新</a><br>
                            <a href="{{route('newYearCard',$post->id)}}" class="btn btn-dark btn-sm m-2" style="width: 100%;">年賀状ページ</a><br>
                            <a href="{{route('deleteUser',$post->id)}}" class="btn btn-danger btn-sm m-2" style="width: 100%;">削除</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
