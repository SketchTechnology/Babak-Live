 


@extends('layouts.app')
@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">{{__('Renew File')}}</h2>
        {{-- <a href="{{ route('sponsore.show', $sponsore->id) }}" class="btn btn-sm btn-primary mr-8 ml-4"><i class="fas fa-arrow-left"></i>{{__('Go back')}} </a> --}}
        @csrf
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('Add your notes')}}</label>
        <textarea name=note id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your notes here..."></textarea>

            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                {{__('Send')}}

            </button>
        </form>
    </div>
  </section>
@endsection