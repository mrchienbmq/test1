@extends('layouts.master', ['currentPage' => 'bakery-form'])
@section('page-title', 'Create new Bakery')
@section('content')
    <h1>Create New Bakery</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{$action}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$bakery -> id}}">
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{$bakery -> name}}">
            {{--@if($errors->has('name'))--}}
                {{--<label class="text-danger">{{$errors->first('name')}}</label>--}}
            {{--@endif--}}
        </div>
        <div>
            <label>Category</label>
            <select name="categoryId" value="{{$bakery -> categoryId}}">
                <option value="1">Bánh mặn</option>
                <option value="2">Bánh ngọt</option>
                <option value="3">Bánh kem</option>
            </select>
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" value="{{$bakery -> price}}">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" value="{{$bakery -> description}}">
        </div>
        <div>
            <label>Image</label>
            {{--<input type="text" name="images" value="{{$bakery -> images}}">--}}
            <input type="file" name="images">
            <img src="{{$bakery -> images}}" alt="">
        </div>
        <div>
            <label>Detail</label>
            <textarea name="content" cols="30" rows="10">{{$bakery -> content}}</textarea>
        </div>
        <div>
            <label>Note</label>
            <input type="text" name="note" value="{{$bakery -> note}}">
        </div>
        <div>
            <input type="submit" value="Save">
            <input type="reset" value="Reset">
        </div>
    </form>
@endsection