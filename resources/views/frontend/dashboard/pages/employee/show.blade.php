@extends('layouts.app')
@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4  max-w-screen-xl sm:py-16 lg:px-6">
        <div class="max-w-screen-md mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Employee Info</h2>
        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
            <div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('Employee Name')}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $employer->en_name }}</p>
            </div>
            <div>

                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('Gender')}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $employer->gender }}</p>
            </div>
            <div>

                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('Job')}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $employer->jobTitle->name }}</p>
            </div>
            <div>

                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('Email')}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $employer->email }}</p>
            </div>
            <div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('Phone Number')}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $employer->phone }}</p>
            </div>
            <div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('Nationallity')}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $employer->nationality->name  }}</p>
            </div>
    </div>
  </section>
  <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
    <div class="w-full mb-1">
        <div class="mb-4">
        </div>
        <div class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700">
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">All files</h1>
            <a href="{{ route('employerfile',$employer->id) }}" id="createProductButton" class="text-white bg-blue-700 hover:bg-yellow-500 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800" type="button" data-drawer-target="drawer-create-product-default" data-drawer-show="drawer-create-product-default" aria-controls="drawer-create-product-default" data-drawer-placement="right">
                Add new file
            </a>
        </div>
    </div>
</div>
<div class="flex flex-col">
    <div class="overflow-x-auto">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden shadow">
                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-all" class="sr-only">checkbox</label>
                                </div>
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                FILE NAME
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                START DATE
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                END DATE
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        @foreach ($files as $file)

                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="id" aria-describedby="checkbox-1" type="checkbox"
                                        class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                <div class="text-base font-semibold text-gray-900 dark:text-white">{{ $file->name }}</div>
                             </td>
                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $file->start_date }}</td>
                            <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">{{ $file->end_date }}</td>


                           


                            <td class="p-4 space-x-2 whitespace-nowrap flex">
                                

                                           
   
 
 
                                <a href="{{ route('employerfile.show', $file->id) }}" class="text-white bg-emerald-700 hover:bg-yellow-500 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">{{__('Review')}}</a>
                                <a href="{{ route('employerfile.renew_request', $file->id) }}" class="text-white bg-blue-700 hover:bg-yellow-500 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">{{__('Renew')}}</a>


                                <a href="{{ route('employerfile.edit', $file->id) }}"
                                    class="text-white bg-slate-700 hover:bg-yellow-500 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">{{ __('Edit') }}</a>

                                 <form action="{{ route('employerfile.destroy',$file->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="text-white bg-red-700 hover:bg-yellow-500 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">{{__('Delete')}}</button>
                                </form>
                                 
                        </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

 

 
@endsection
