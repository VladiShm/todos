<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @stack('head')
</head>
<body style="background-image:url('https://img.freepik.com/free-vector/gradient-blur-pink-blue-abstract-background_53876-117324.jpg?w=996&t=st=1709455322~exp=1709455922~hmac=b9d6f275052708f94f61673c0b84948b200f552f94851ac308b549e7cda2cb99');
background-size: cover">
    <div class="bg-dark">
        <div class="container py-3">
            <div class="h1 text-white">Todo List</div>
        </div>
    </div>
    @yield('main-section')
</body>
</html>