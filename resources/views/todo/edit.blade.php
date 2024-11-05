@extends('template.template')
@section('main')


<div class="container mx-auto mt-16">

 
 
    <div class="mb-6 shadow-md  rounded-md">
        <div for="default-input" class="block rounded-md box-border  bg-slate-200 p-3 text-sm font-medium text-gray-900 dark:text-white pr-6">دسته بندی</div>
        <form action="{{route('todo.update',$todo->id)}}" method="POST" enctype="multipart/form-data">
           @csrf
           @method('PUT')
           {{  csrf_field()  }}
           <div class="mx-5 my-4">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">اپلود فایل</label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file"  name="fileimg" value="{{$todo->images}}">
                @error('fileimg')
                    <p>{{$message}}</p>
                @enderror
            </div>

           <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white my-3 pr-6">عنوان</label>
           <div class="px-5"><input type="text" name="title" id="default-input" value="{{$todo->name}}" class="mx-auto bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" ></div>
           @error('title')
           <p>{{$message}}</p>
           @enderror

           <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white my-3 pr-6">توضیح کوتاه</label>
           <div class="px-5"><input type="text" name="description" value="{{$todo->description}}" id="default-input" class="mx-auto bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" ></div>
           @error('description')
           <p>{{$message}}</p>
           @enderror

            <div class="mx-5 my-3">
                <label for="underline_select" class="sr-only">انتخاب دسته بندی</label>
                <select id="underline_select" value="{{$cat}}"  name="categori_id" class="block  py-2.5 px-5 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                    <option selected>انتخاب دسته بندی</option>
                    @foreach ($categoris as $item)
                    <option value="{{$item->id}}">{{$item->title}}</option>
                   @endforeach
                </select>
            </div>
            @error('categori_id')
            <p>{{$message}}</p>
            @enderror
 
            
 
  
           <input type="submit" name="ارسال" class="my-4 mx-5 rounded-lg px-4 py-1 bg-green-500 text-white" placeholder="ارسال">
        </form>
    </div>


</div>
@endsection