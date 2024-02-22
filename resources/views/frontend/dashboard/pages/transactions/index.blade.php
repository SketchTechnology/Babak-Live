@extends('layouts.app')
@section('content')
    <div
        class=" p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">

        <div class="w-full mb-1">
            <div class="mb-4">
                <nav class="flex mb-5" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="#"
                                class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                                <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                    </path>
                                </svg>
                                {{ __('Dashboard') }}
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <a href="#"
                                    class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white"> {{ __('Employees') }}</a>
                            </div>
                        </li>

                    </ol>
                </nav>
            </div>

        </div>
    </div>




    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        {{ __('Transaction') }}
                    </th>
                    <th scope="col" class="px-6 py-3">

                        {{ __('Amount') }}
                    </th>
                    <th scope="col" class="px-6 py-3">

                        {{ __('Status') }}
                    </th>
                    <th scope="col" class="px-6 py-3">

                        {{ __('Date') }}
                    </th>


                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $transaction->transaction }}


                        </th>
                        <td class="px-6 py-4">
                            {{ ' - $' . $transaction->amount }}

                        </td>
                        <td class="px-6 py-4">

                            @if ($transaction->formSubmission->status === 'pending')
                                <span
                                    class="rounded-full bg-yellow-200 px-2 py-0.5 text-xs font-medium text-yellow-700">{{ $transaction->formSubmission->status }}</span>
                            @else
                                <span
                                    class="rounded-full bg-green-200 px-2 py-0.5 text-xs font-medium text-green-600">{{ $transaction->formSubmission->status }}</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">

                            {{ $transaction->transaction_date }}

                        </td>


                    </tr>
                @endforeach



            </tbody>
        </table>
    </div>
@endsection
