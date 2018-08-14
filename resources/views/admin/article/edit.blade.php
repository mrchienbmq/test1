<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Category article</h1>
    <ul>
        <li>
            <a href="/admin/article/create">Create New</a>
        </li>
        <li>
            <a href="/admin/article">List</a>
        </li>
    </ul>
    <form action="/admin/article/{{$obj -> id}}" method="post">
        @method('PUT')
        {{csrf_field()}}
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{$obj -> name}}">
        </div>
        <div>
            <label>Author</label>
            <input type="text" name="author" value="{{$obj -> author}}">
        </div>
        <div>
            <label>Content</label>
            <input type="text" name="content" value="{{$obj -> content}}">
        </div>
        <div>
            <label>Image</label>
            <input type="text" name="images" value="{{$obj -> images}}">
        </div>
        <div>
            <input type="submit" value="Save">
            <input type="reset" value="Reset">
        </div>
    </form>
</body>
</html>