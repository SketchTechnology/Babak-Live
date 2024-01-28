{{-- @extends('frontend.dashboard.layouts.master')
@section('title', 'Create file')

@section('content')

<div class="header bg-primary pb-6"></div>
<div class="container-fluid mt--6">
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">{{__('Dashboard.Update File')}}</h3>
                </div>
                <div class="col-4 text-right">
                    <a href="{{route('companies.show', ['company' => $file->company_id])}}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i>{{__('Dashboard.Go back')}} </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('companyfile.update', ['id' => $file->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="">
                    <div class="form-group ">
                        <label for="name">{{__('Dashboard.File Name')}}</label>
                        <input name="name" type="text" class="form-control" id="name" required value="{{$file->name}}" placeholder="">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror <br>
                    </div>
                </div>
                <div class=" ">
                    <div class="form-group ">
                        <label for="start_date">{{__('Dashboard.Start Date')}}</label>
                        <input name="start_date" class="form-control" value="{{$file->start_date}}" required id="start_date" placeholder="">
                        @error('start_date')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror <br>
                    </div>
                </div>
                <div class="">
                    <div class="form-group ">
                        <label for="end_date">{{__('Dashboard.End Date')}}</label>
                        <input name="end_date"  class="form-control" value="{{$file->end_date}}" required id="end_date" placeholder="">
                        @error('end_date')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror <br>
                    </div>
                </div>
                <div class=" ">
                    <div class="form-group ">
                        <label for="file">{{__('Dashboard.File')}}</label>
                        <input name="file" type="file" class="form-control" required value="{{ old('file')}}" id="file" placeholder="">
                        <img src="{{ asset($file->filename) }}">
                        @error('file')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror <br>
                    </div>
                </div>
                <button class="btn btn-primary">{{__('Dashboard.Update')}}</button>
            </form>
        </div>
    </div>
</div>
<script>
    $('#start_date').datepicker({
        uiLibrary: 'bootstrap4',
        format: "yyyy-mm-dd",
    });
    $('#end_date').datepicker({
        uiLibrary: 'bootstrap4',
        format: "yyyy-mm-dd",
    });
</script>
@endsection --}}

















@extends('layouts.app')
@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit Company File</h2>
        <form action="{{route('companyfile.update', ['id' => $file->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="w-full">
                    <label for="brand"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">File Name</label>
                    <input type="text" required value="{{$file->name}}" name="name" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="English Name" required="">
                </div>
                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Date</label>
                    <input datepicker datepicker-format="dd/mm/yyyy" value="{{$file->start_date}}"  type="date" name="start_date" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Arabic Name" required="">
                </div>
                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End Date</label>
                    <input datepicker datepicker-format="dd/mm/yyyy" value="{{$file->end_date}}" type="date" name="end_date" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Email" required="">
                </div>
                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">File</label>
                    <input type="file" name="file" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Phone Number" required="">
                    
                </div>

            </div>
            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                Update File
            </button>
        </form>
    </div>
  </section>
@endsection