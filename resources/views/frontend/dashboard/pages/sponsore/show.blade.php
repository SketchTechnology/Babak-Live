@extends('layouts.app')
@section('content')
<style>
@media only screen and (min-width : 992px) {
    .arabic{
     margin-right:260px;
    }
  }
</style>

<section class="bg-white dark:bg-gray-900">
    @if(app()->getLocale() == 'ar')
    <div class="arabic py-8 px-4 max-w-screen-xl sm:py-16 lg:px-6">
        @else 
            <div class="py-8 px-4 max-w-screen-xl sm:py-16 lg:px-6">
                @endif

        <div class="max-w-screen-md mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">{{__('Sponsored')}} </h2>
        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
            <div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('Sponsored Name')}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $sponsore->en_name }}</p>
            </div>
            <div>

                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('Gender')}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $sponsore->gender }}</p>
            </div>
            <div>

                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('Job')}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $sponsore->jobTitle->name }}</p>
            </div>
            <div>

                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('Email')}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $sponsore->email }}</p>
            </div>
            <div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('Phone Number')}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $sponsore->phone }}</p>
            </div>
            <div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('Nationallity')}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $sponsore->nationality->name  }}</p>
            </div>
    </div>
  </section>
  <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
    <div class="w-full mb-1">
        <div class="mb-4">
        </div>
        <div class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700">
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">All files</h1>
            <a href="{{ route('sponsorefile',$sponsore->id) }}" id="createProductButton" class="text-white bg-blue-700 hover:bg-yellow-500 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800" type="button" data-drawer-target="drawer-create-product-default" data-drawer-show="drawer-create-product-default" aria-controls="drawer-create-product-default" data-drawer-placement="right">
                {{__('Add new file')}}
            </a>
        </div>
    </div>
</div>
<div class="arabic flex flex-col">
    <div class="overflow-x-auto">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden shadow">
                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                          
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                {{__('FILE NAME')}}
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                  {{__('START DATE')}}
                            </th>
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                  {{__('END DATE')}}
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        @foreach ($files as $file)

                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                         
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                <div class="text-base font-semibold text-gray-900 dark:text-white">{{ $file->name }}</div>
                             </td>
                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $file->start_date }}</td>
                            <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">{{ $file->end_date }}</td>


                           


                            <td class="p-4 space-x-2 whitespace-nowrap flex">
                                

                                           
   
 
 
                                <a href="{{ route('sponsorefile.show', $file->id) }}" class="text-white bg-blue-700 hover:bg-yellow-500 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">{{__('Review')}}</a>
                                <a href="{{ route('sponsorefile.renew_request', $file->id) }}" class="text-white bg-blue-700 hover:bg-yellow-500 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">{{__('Renew')}}</a>


                                <a href="{{ route('sponsorefile.edit', $file->id) }}"
                                    class="text-white bg-slate-700 hover:bg-blue-500 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">{{ __('Edit') }}</a>

                                 <form action="{{ route('sponsorefile.destroy',$file->id) }}" method="post">
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


<div class="sticky bottom-0 right-0 items-center w-full p-4 bg-white border-t border-gray-200 sm:flex sm:justify-between dark:bg-gray-800 dark:border-gray-700">
    <div class="flex items-center mb-4 sm:mb-0">
        <a href="#" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
        </a>
        <a href="#" class="inline-flex justify-center p-1 mr-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        </a>
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span class="font-semibold text-gray-900 dark:text-white">1-20</span> of <span class="font-semibold text-gray-900 dark:text-white">2290</span></span>
    </div>
    <div class="flex items-center space-x-3">
        <a href="#" class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
            <svg class="w-5 h-5 mr-1 -ml-1"" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            Previous
        </a>
        <a href="#" class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
            Next
            <svg class="w-5 h-5 ml-1 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
</div>
@endsection
