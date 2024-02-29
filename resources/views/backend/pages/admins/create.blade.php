@extends('layouts.admin')
@section('content')
<section class="bg-white dark:bg-gray-900">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.3/build/css/intlTelInput.css">

    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">  {{__('Create Admin')}}</h2>
        <form action="{{ route('admins.store')}}" method="POST">
            @csrf

            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="w-full">
                    <label for="brand"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">  {{__('Name')}}</label>
                    <input type="text" name="name"  value="{{ old('name') }}"id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="{{__('Name')}}" required="">
                    @error('name')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
                </div>

                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> {{__('Email')}}</label>
                    <input type="email"  name="email" value="{{ old('email') }}" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="{{__('Email')}}" required="">
                    @error('email')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
                </div>

                <div class="w-full">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> {{__('Password')}}</label>
                    <input type="password" name="password" value="{{ old('password') }}"id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="{{__('Password')}}" required="">
                    @error('password')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
                </div>
                <div class="w-full">
                    <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> {{__('Confirm Password')}}</label>
                    <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" id="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="{{__('Confirm Password')}}" required="">
                    @error('password_confirmation')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror

                </div>

                <div class="w-full">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('Address')}}</label>
                    <input type="text" name="address" value="{{ old('address') }}" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="{{__('Address')}}" required="">
                    @error('address')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
                </div>

                <div class="w-full">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> {{__('Phone Number')}}</label>
                    <input type="number" name="phone" value="{{ old('phone') }}" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="{{__('Phone')}}" required="">
                    <input type="hidden" name="dial_code" id="dial_code" value="">

                    @error('phone')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
                </div>
            </div>

            <div class="w-full mt-4">
                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> {{__('Role')}}</label>
                <select id="category" name="roles[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{__($role->name)}}</option>
                    @endforeach

                </select>
            </div>

            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                 {{__('Add Admin')}}
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
