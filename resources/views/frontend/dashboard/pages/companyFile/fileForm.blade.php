{{-- @extends('layouts.app')
@section('title', 'Create file')

@section('content')
<div class="bg-primary pb-6"></div>
<div class="container-fluid mt-6">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-4 border-b">
            <div class="flex items-center">
                <div class="flex-1">
                    <h3 class="text-xl font-semibold">{{__('Dashboard.Create New File')}}</h3>
                </div>
                <div class="text-right">
                    <a href="{{route('companies.show', ['company' => $company])}}" class="btn btn-primary text-sm"><i class="fas fa-arrow-left"></i>{{__('Dashboard.Go back')}}</a>
                </div>
            </div>
        </div>
        <div class="p-4">
            <form action="{{route('companyfile.addCompanyFile', ['id' => $company->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-600">{{__('Dashboard.File Name')}}</label>
                    <input name="name" type="text" class="form-input w-full mt-1" id="name" required value="{{ old('name')}}" placeholder="">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="start_date" class="block text-sm font-medium text-gray-600">{{__('Dashboard.Start Date')}}</label>
                    <input name="start_date" class="form-input w-full mt-1" value="{{ old('start_date')}}" required id="start_date" placeholder="">
                    @error('start_date')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="end_date" class="block text-sm font-medium text-gray-600">{{__('Dashboard.End Date')}}</label>
                    <input name="end_date" class="form-input w-full mt-1" value="{{ old('end_date')}}" required id="end_date" placeholder="">
                    @error('end_date')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="file" class="block text-sm font-medium text-gray-600">{{__('Dashboard.File')}}</label>
                    <input name="file" type="file" class="form-input w-full mt-1" value="{{ old('file')}}" required id="file" placeholder="">
                    @error('file')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button class="btn btn-primary">{{__('Dashboard.Save')}}</button>
            </form>
        </div>
    </div>
</div>
<script>
    // Include your JavaScript for datepicker here using Tailwind CSS utilities
</script>
@endsection
 --}}






@extends('layouts.app')
@section('content')
{{ $errors}}
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">{{__('Create New File')}}</h2>
        <form action="{{route('companyfile.addCompanyFile', ['id' => $company->id])}}"  method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="w-full">
                    <label for="brand"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('File Name')}}</label>
                    <input type="text" name="name" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="English Name" required="">
                    @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> {{__('Start Date')}}</label>
                    <input datepicker datepicker-format="dd/mm/yyyy" type="date" id="name" required value="{{ old('name')}}"  name="start_date" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Arabic Name" required="">
                    @error('start_date')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('End Date')}}</label>
                    <input datepicker datepicker-format="dd/mm/yyyy" type="date" name="end_date" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Email" required="">
                    @error('end_date')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('File')}}</label>
                    <input type="file" name="file" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Phone Number" required="">
                </div>
            </div>
            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                {{__('Add File')}}

            </button>
        </form>
    </div>
  </section>
@endsection