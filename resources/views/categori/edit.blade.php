@extends('template.template')
@section('main')
<div class="container mx-auto mt-16">

 
    <div class="mb-6 shadow-md  rounded-md">
            <form action="{{ route('categori.update', $categori->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="default-input"
                    class="block rounded-md box-border mb-2 bg-slate-200 p-3 text-sm font-medium text-gray-900 dark:text-white pr-6">دسته بندی</label>
                <div class="px-5">
                    <input type="text" name="title" id="default-input"
                        class="mx-auto bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $categori->title }}">
                </div>
                <input type="submit" class="my-4 mx-5 rounded-lg px-4 py-1 bg-green-500 text-white" value="ارسال">
            </form>
     
    </div>



</div>
@endsection