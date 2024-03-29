@extends('layouts.app')
@section('content')
<style >
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
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white"> {{__('Company Info')}}</h2>
        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
            <div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('Company Name')}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $company->name }}</p>
            </div>
            <div>

                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('Company Location')}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $company->country->name }}</p>
            </div>
            <div>

                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('Company Capital')}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $data['capital'] ?? '' }} </p>
            </div>
            <div>

                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('Company Email')}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $company->user->email }}</p>
            </div>
            <div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('Company Phone')}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $company->mobile }}</p>
            </div>
            <div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('Company Activity')}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $data['activity'] ?? '' }}</p>
            </div>
            <div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('Is The Company Regesterd in other country?')}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $data['regesterd'] ?? '' }}</p>
            </div>
            <div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('Notes')}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $data['note'] ??'' }}</p>
            </div>
            <div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('Partners')}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{ $data['partners'] ?? '' }}</p>
            </div>
            <div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('Partners')}}</h3>
                @isset($data['Patner_name'])
                @forelse($data['Patner_name'] as $name)
                <h3 class="mt-3">{{$name}}</h3>
                @empty
                <h6>No parteners</h6>
            @endforelse
                @endisset


            </div>
            <div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('Partners Countries')}}</h3>
                @isset($data['Patner_country'])
                @foreach($data['Patner_country'] as $country)
                <h3 class="mt-3">{{$country}}</h3>
            @endforeach
            @endisset

                    </div>
        </div>
    </div>
  </section>
  <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
    <div class="w-full mb-1">
        <div class="mb-4">
        </div>
        <div class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700">
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">All files</h1>
            <a href="{{ route('companyfile',$company->id) }}" id="createProductButton" class="text-white bg-blue-700 hover:bg-yellow-500 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800" type="button" data-drawer-target="drawer-create-product-default" data-drawer-show="drawer-create-product-default" aria-controls="drawer-create-product-default" data-drawer-placement="right">
                {{__(('Add new file'))}}
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
                                

                                           
   
 
 
                                <a href="{{ route('companyfile.show', $file->id) }}" class="text-white bg-blue-700 hover:bg-yellow-500 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">{{__('Review')}}</a>
                                <a href="{{ route('companyfile.renew_request', $file->id) }}" class="text-white bg-blue-700 hover:bg-yellow-500 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">{{__('Renew')}}</a>


                                <a href="{{ route('companyfile.edit', $file->id) }}"
                                    class="text-white bg-blue-700 hover:bg-yellow-500 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">{{ __('Edit') }}</a>

                                 <form action="{{ route('companyfile.destroy',$file->id) }}" method="post">
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
