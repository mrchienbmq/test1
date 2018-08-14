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
    <h1>Category Detail</h1>
    <ul>
        <li>
            <a href="/admin/category/create">Create New</a>
        </li>
        <li>
            <a href="/admin/category/list">List Category</a>
        </li>
    </ul>
    Show detail category: {{$obj->name}}
</body>
</html>