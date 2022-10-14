<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <!-- for tailwind -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Page</title>
</head>

<body>
    <nav class="border m-auto text-center">
        <a class="btn btn-secondary" href={{ route('home.page') }}>Home page</a>
        <a class="btn btn-secondary" href={{ route('about.page') }}>About page</a>
        <a class="btn btn-secondary" href={{ route('contact.page') }}>Contact page</a>
    </nav>

    <h1 class="border bg-red-900 text-3xl font-bold text-red-50">
        This is Contact blade
    </h1>

    <?php
    $world = 'Hello Trina';
    ?>

    <h2 class="text-2xl mt-5 text-center">
        Is it working <span class="uppercase">{{ $world }}</span>
    </h2>

    @if (!$world)
        <h1>Yes it is available</h1>
    @endif

    <h1 class="bg-blue-400 text-black">
        No refresh needed
    </h1>


    <div class="card w-96 bg-slate-900 shadow-xl">
        <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" /></figure>
        <div class="card-body">
            <h2 class="card-title">Shoes!</h2>
            <p>If a dog chews shoes whose shoes does he choose?</p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary">Buy Now</button>
            </div>
        </div>
    </div>
</body>

</html>
