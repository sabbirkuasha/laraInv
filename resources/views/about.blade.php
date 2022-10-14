<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <!-- for tailwind -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <nav class="border m-auto text-center">
        <a class="btn btn-secondary" href={{ route('home.page') }}>Home page</a>
        <a class="btn btn-secondary" href={{ route('about.page') }}>About page</a>
        <a class="btn btn-secondary" href={{ route('contact.page') }}>Contact page</a>
    </nav>


    <h1 class="border bg-red-900 text-3xl font-bold text-red-50">
        This is about blade
    </h1>


</body>

</html>
