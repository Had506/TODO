<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    @vite('resources/css/app.css')


</head>
<body dir="rtl">
<header class="w-full  py-5 px-2  shadow-xl flex  ">
    <a href="" class="ml-5 font-bold">تو دو لیست</a>
    <ul class="flex gap-4 text-xl list-none">
        <li><a href="{{ route('index')}}"  class="text-sm">خانه</a></li>
        <li><a href="{{ route('categori.index')}}" class="text-sm">دسته بندی</a></li>
    </ul>
</header>
@section('main')

@show
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>

