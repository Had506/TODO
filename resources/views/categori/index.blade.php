@extends('template.template')
@section('main')
<div class="container-fluid border-t-2 mx-auto">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div for="default-input" class="flex justify-between px-6 block rounded-md box-border  bg-slate-200 p-3 text-sm font-medium text-gray-900 dark:text-white">
            <span>دسته بندی</span>
            <a href="{{ route('categori.create') }}" class="rounded-lg bg-green-400 text-white px-5 py-1">ایجاد</a>  
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        عنوان
                    </th>

                    <th scope="col" class="px-6 py-3">
                        وضعیت
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $categori as $item )
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{ $item->title }}
                        </td>
                        <td class="px-6 py-4">

                            <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class=" text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-1 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button">
                                حذف 
                            </button>

                            <div id="popup-modal" tabindex="-1"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button type="button"
                                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="popup-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="p-4 md:p-5 text-center">
                                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>
                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">ایا مطمئن هستین؟</h3>
                                            <form class="inline" action="{{ route('categori.destroy',$item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                               <button type="submit" class="rounded-lg bg-red-700 text-white py-2.5 px-5">حذف</button>
                                            </form>
                                            <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                                کنسل
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('categori.edit',$item->id) }}" class="rounded-lg bg-green-400 text-white px-5 py-1">ادیت</a>  
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection
