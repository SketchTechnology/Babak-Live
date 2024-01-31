{{-- @extends('frontend.dashboard.layouts.master')
@section('title', 'file')

@section('content')
<div class="container-fluid">
    <div class=" my-5 rounded shadow-lg bg-white py-5">
        <div class="row">
            <div class="col-md-6">
            <h1 class="ml-8 mr-4">
                {{__('Dashboard.File Information')}}
            </h1>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{route('companies.show', ['company' => $company])}}" class="btn btn-sm btn-primary mr-8 ml-4"><i class="fas fa-arrow-left"></i>{{__('Dashboard.Go back')}} </a>
            </div>
        </div>
        <div class="row mt-5 m-3 text-center">
            <div class="col-md-4">
                <span>{{__('Dashboard.File Name')}}</span>
                <h3>{{$file->name}}</h3>
            </div>
            <div class="col-md-4">
                <span>{{__('Dashboard.Start Date')}}</span>
                <h3>{{$file->start_date}}</h3>
            </div>
            <div class="col-md-4">
                <span>{{__('Dashboard.End Date')}}</span>
                <h3>{{$file->end_date}}</h3>
            </div>
        </div>
        <h1 class="m-3 mt-8 text-center">
            {{__('Dashboard.Read File')}}
        </h1>
        <div class="text-center">
            <img src={{asset($file->filename)}}>
        </div>
    </div>
</div>
@endsection --}}













@extends('layouts.app')
@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 max-w-screen-xl sm:py-16 lg:px-6">
        <div class="max-w-screen-md mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">{{__('File Info')}}</h2>
        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">

            <div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('File Name')}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{$file->name}}</p>
                <hr>
                <br>
                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('Start Date')}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{$file->start_date}}</p>
                <hr>
                <br>
                <h3 class="mb-2 text-xl font-bold dark:text-white">{{__('End Date')}}</h3>
                <p class="text-gray-500 dark:text-gray-400">{{$file->end_date}}</p>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex"> 
               <a href="{{asset($file->filename)}}" download="{{$file->filename}}" class="text-white bg-blue-700 hover:bg-yellow-500 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800" type="button" data-drawer-target="drawer-create-product-default" data-drawer-show="drawer-create-product-default" aria-controls="drawer-create-product-default" data-drawer-placement="right">{{__('Download Now')}}</a>
            </div>
        </div>
    </div>
  </section>

@endsection