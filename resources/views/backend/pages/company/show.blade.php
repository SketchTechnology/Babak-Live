@extends('layouts.admin')
@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 max-w-screen-xl sm:py-16 lg:px-6">
        <div class="max-w-screen-md mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">{{__('Company Info')}}</h2>
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
 

 
@endsection
