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
    <h1>Create article</h1>
    <ul>
        <li>
            <a href="/admin/article/create">Create New</a>
        </li>
        <li>
            <a href="/admin/article">List</a>
        </li>
    </ul>
    <form action="/admin/article" method="post">
        {{csrf_field()}}
        <div>
            <label>Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>Author</label>
            <input type="text" name="author">
        </div>
        <div>
            <label>Content</label>
            <input type="text" name="content">
        </div>
        <div>
            <label>Image</label>
            <input type="text" name="images">
        </div>
        <div>
            <input type="submit" value="Save">
            <input type="reset" value="Reset">
        </div>
    </form>
</body>
</html>