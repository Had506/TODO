@extends('template.template')
@section('main')
<div class="container-fluid border-t-2 mx-auto">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div for="default-input" class="flex justify-between px-6 block rounded-md box-border  bg-slate-200 p-3 text-sm font-medium text-gray-900 dark:text-white">
            <span>کارها:</span>

            <div class="flex"> 
            
                <form action="{{ route('categori.show',1) }}" method="GET" class="max-w-sm mx-auto inline" id="categoryForm">
                    @csrf
                    <select id="categories" name="categori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" onchange="this.form.submit()">
                        <option selected disabled>دسته بندی</option>
                        @foreach ($categori as $item)
                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                        @endforeach
                    </select>
                </form>
                
  
             <div class="my-auto mr-4"><a href="{{ route('todo.create') }}" class="inline rounded-lg bg-green-400 text-white px-5 py-1">ایجاد</a></div> 
            </div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        عکس
                    </th>
                    <th scope="col" class="px-6 py-3">
                       عنوان
                    </th>
                    <th scope="col" class="px-6 py-3">
                        دسته بندی
                    </th>
                    <th scope="col" class="px-6 py-3">
                       نمایش
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">وضعیت</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todos as $item )
           
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img src="{{ asset('img/'. $item->images) }}" class="rounded-xl" width="100" height="100" alt="">
                    </th>
                    <td class="px-6 py-4">
                       {{$item->name}}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->categori ? $item->categori->title : 'بدون دسته‌بندی' }}                    
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{route('todo.create')}}" class="rounded-lg bg-green-400 text-white p-1">نمایش</a>
                        <a href="{{route('todo.edit',$item->id)}}" class="rounded-lg bg-blue-400 text-white py-1 px-3">Edit</a>
                    </td>
                 
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection
