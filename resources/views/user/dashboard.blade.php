@extends('layouts.app')
@section('content')



<!-- margin right for RTL STYLE -->
@if(app()->getLocale() == 'ar')
<style >
@media only screen and (min-width : 992px) {
    .arabic{
     margin-right:260px;
    }
  }
</style>

<div class="m-10 grid gap-5 sm:grid-cols-3 max-w-screen-lg arabic" >
@else
<div class="m-10 grid gap-5 sm:grid-cols-3 max-w-screen-lg arabic" >
@endif

    <div class="px-4 py-6 shadow-lg shadow-blue-100">
     <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 rounded-xl bg-blue-50 p-4 text-blue-300" viewBox="0 0 20 20" fill="currentColor">
        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
     </svg>
     <p class="mt-4 font-medium">{{__('Total Money In Your Wallet')}}
     </p>
     <p class="mt-2 text-xl font-medium">
         @php

             echo Auth::user()->wallet . " $";
         @endphp
        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
         <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
     </p>
     <span class="text-xs text-gray-400">+4.9%</span>
    </div>
    <div class="px-4 py-6 shadow-lg shadow-blue-100">
     <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 rounded-xl bg-rose-50 p-4 text-rose-300" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
     </svg>

     <p class="mt-4 font-medium">     <a href="{{ url('/dashboard/employee') }}">{{__('Employees')}} </a> 
     </p>
     <p class="mt-2 text-xl font-medium">
        @php
use App\Models\Dashboard\Employer;

            echo Employer::where('user_id',Auth::id())->count() ;
        @endphp
        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
         <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
     </p>
     <span class="text-xs text-gray-400">+4.9%</span>
    </div>
    <div class="px-4 py-6 shadow-lg shadow-blue-100">
     <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 rounded-xl bg-green-50 p-4 text-green-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
     </svg>
     
     <p class="mt-4 font-medium"><a href="{{ url('/dashboard/sponsore') }}">{{__('Sponsored')}} </a> </p>
     <p class="mt-2 text-xl font-medium">
        @php
        use App\Models\Dashboard\Sponsore;

                    echo Sponsore::where('user_id',Auth::id())->count() ;
                @endphp
        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
         <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
     </p>
     <span class="text-xs text-gray-400">+4.9%</span>
    </div>
</div>
<!-- margin right for RTL STYLE -->
<div class="m-10 grid gap-5 sm:grid-cols-3    max-w-screen-lg arabic">
    <div class="px-4 py-6 shadow-lg shadow-blue-100">
     <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 rounded-xl bg-blue-400 p-4 text-white" viewBox="0 0 20 20" fill="currentColor">
        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
     </svg>
     @php
    $user_id = auth()->id();
    $count = \Illuminate\Support\Facades\DB::table('form_submissions')->where('user_id', $user_id)->count();
@endphp

     <p class="mt-4 font-medium"><a href="{{ url('/dashboard/requests') }}">{{__('Applied Requests')}} </a> </p>
     <p class="mt-2 text-xl font-medium">
        {{ $count }}
        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
         <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
     </p>
     <span class="text-xs text-gray-400">+4.9%</span>
    </div>
    <div class="px-4 py-6 shadow-lg shadow-blue-100">
     <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 rounded-xl bg-rose-400 p-4 text-white" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
     </svg>
     <p class="mt-4 font-medium"><a href="{{ url('/dashboard/companies') }}">{{__('Companies')}} </a></p>
     <p class="mt-2 text-xl font-medium">
        @php
use App\Models\Company;

            echo Company::where('user_id',Auth::id())->count() ;
        @endphp
        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
         <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
     </p>
     <span class="text-xs text-gray-400">+4.9%</span>
    </div>
    <div class="px-4 py-6 shadow-lg shadow-blue-100">
     <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 rounded-xl bg-green-400 p-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
     </svg>
     <p class="mt-4 font-medium"> {{__('Total Paid')}}</p>
     <p class="mt-2 text-xl font-medium">
        {{Auth::user()->wallet ;}}$
        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
         <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
     </p>
     <span class="text-xs text-gray-400">+4.9%</span>
    </div>
</div>



    <!-- 2 columns -->


@endsection