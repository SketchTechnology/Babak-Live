@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.3/build/css/intlTelInput.css">

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">{{__('Add Sponsored')}}</h2>
            <form action="{{ route('sponsore.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input name="user_id" value="{{ auth()->user()->id }}" type="hidden" class="form-control"
                    id="exampleFormControlInput1" placeholder="">

                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('English Name')}}</label>
                        <input type="text" name="en_name" value="{{ old('en_name') }}" required id="brand"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="{{__('English Name')}}" required="">
                            @error('en_name')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('Arabic Name')}}</label>
                        <input type="text" name="ar_name" value="{{ old('ar_name') }}" required id="price"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="{{__('Arabic Name')}}" required="">
                            @error('ar_name')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="price"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('Email')}}</label>
                        <input type="email" name="email" value="{{ old('email') }}" required id="price"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="{{__('Email')}}" required="">
                            @error('email')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('Phone Number')}}</label>
                        <input type="text" name="phone" value="{{ old('phone') }}"  id="phone"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="{{__('Phone Number')}}" >
                            <input type="hidden" name="dial_code" id="dial_code" value="">

                        @error('phone')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div>
                        <label for="category"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('Employee')}}</label>
                        <select id="category"
                            name="employer_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            @foreach ($employers as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->en_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="category"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('Gender')}}</label>
                        <select id="category" name="gender" value="{{ old('gender') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="male">{{__('Male')}}</option>
                            <option value="female">{{__('Female')}}</option>

                        </select>
                    </div>
                    <div>
                        <label for="category"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('Nationallity')}}</label>
                        <select id="category" name="nationality_id" value="{{ old('nationality_id') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            @foreach ($nationalities as $nationality)
                                <option value="{{ $nationality->id }}">{{  __($nationality->name)}}</option>
                            @endforeach
                        </select>
                    </div>
                    <!--<div>-->
                    <!--    <label for="category"-->
                    <!--        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('Job')}}</label>-->
                    <!--    <select id="category" name ="job_title_id"-->
                    <!--        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">-->
                    <!--        @foreach ($job_titles as $job)-->
                    <!--            <option value="{{ $job->id }}">{{ $job->name }}</option>-->
                    <!--        @endforeach-->

                    <!--    </select>-->
                    <!--</div>-->
                    <div class="w-full">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('Relative relation')}}</label>
                        <input type="text" required name="relative_relation"  value="{{ old('relative_relation') }}" id="exampleFormControlInput1"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="{{__('Relative relation')}}" required="">
                    </div>
                </div>
                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    {{__('Save')}}
                </button>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.3/build/js/intlTelInput.min.js"></script>
    <script>
  
  document.addEventListener("DOMContentLoaded", function () {
        const input = document.querySelector("#phone");
        const dialCodeInput = document.querySelector("#dial_code");
  
        const iti = window.intlTelInput(input, {
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.3/build/js/utils.js",
        });
  
        // Listen to the input change event and update the hidden input with the dial code
        input.addEventListener("input", function () {
            const selectedCountryData = iti.getSelectedCountryData();
            console.log("Selected Country Data:", selectedCountryData);
  
            if (selectedCountryData) {
                dialCodeInput.value = '+' + selectedCountryData.dialCode;
                console.log("Dial Code:", dialCodeInput.value);
            } else {
                dialCodeInput.value = null;
                console.log("Dial Code is null");
            }
        });
    });
      </script>
  
@endsection
