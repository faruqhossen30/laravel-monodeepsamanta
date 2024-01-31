@extends('layouts.app')
@section('title', 'Cart Page')
@section('content')
    <div>
        <div>
            <h3 class="text-xl py-4 font-bold text-gray-800 dark:text-white">
                Cart
            </h3>
        </div>
        @if (count($cartitems))
            <div class="grid grid-cols-6 gap-4">
                <div class="col-span-6 lg:col-span-4 overflow-x-auto">
                    <div class="min-w-full inline-block align-middle">
                        <div class="border overflow-hidden dark:border-gray-700">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead>
                                    <tr>
                                        <th scope="col"
                                            class="px-4 py-3 text-start text-lg font-medium text-gray-500 uppercase">Photo
                                        </th>
                                        <th scope="col"
                                            class="px-4 py-3 text-start text-lg font-medium text-gray-500 uppercase">Service
                                        </th>
                                        <th scope="col"
                                            class="px-4 py-3 text-start text-lg font-medium text-gray-500 uppercase">Package
                                        </th>
                                        <th scope="col"
                                            class="px-4 py-3 text-start text-lg font-medium text-gray-500 uppercase">Price
                                        </th>
                                        <th scope="col"
                                            class="px-4 py-3 text-start text-lg font-medium text-gray-500 uppercase">QTY
                                        </th>
                                        <th scope="col"
                                            class="px-4 py-3 text-end text-lg font-medium text-gray-500 uppercase">Aciton
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                    @foreach ($cartitems as $item)
                                        <tr>
                                            <td class="px-4 py-3 text-start text-md font-medium text-gray-500">
                                                <img class="w-10 h-10"
                                                    src="http://127.0.0.1:8000/uploads/service/aed5478d-2489-44e5-ad0f-9f6cbe6b5ed1.jpg"
                                                    alt="">
                                            </td>
                                            <td class="px-4 py-3 text-start text-md font-medium text-gray-500">
                                                {{ $item->name }}
                                            </td>
                                            <td class="px-4 py-3 text-start text-md font-medium text-gray-500">
                                                Begineer
                                            </td>
                                            <td class="px-4 py-3 text-center text-md font-medium text-gray-800">
                                                ${{ $item->price }}
                                            </td>
                                            <td class="px-4 py-3 text-center text-md font-medium text-gray-500">
                                                {{ $item->qty }}
                                            </td>
                                            <td class="px-4 py-3 text-center text-md font-medium text-gray-500 ">
                                                <a href="{{ route('cartremove', $item->rowId) }}"
                                                    class="flex flex-shrink-0 justify-center items-center gap-2 w-6 h-6 text-sm font-semibold rounded-lg border border-red-900 bg-white text-red-900  hover:bg-red-700 hover:text-white disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                    </svg>
                                                    </button>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-span-6 lg:col-span-2 overflow-x-auto">
                    <div
                        class="flex flex-col bg-white border shadow-sm rounded-lg p-4 md:p-5 dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                        <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                            ORDER SUMMERY
                        </h3>
                        <div class="flex justify-between py-2 text-lg text-gray-800 ">
                            <span>Subtotal</span>
                            <span>$100</span>
                        </div>
                        <div class="flex justify-between py-2 text-lg text-gray-800 ">
                            <span>Quantity</span>
                            <span>3</span>
                        </div>
                        <hr>
                        <div class="flex justify-between py-2 text-lg text-gray-800 ">
                            <span>Total</span>
                            <span>$100</span>
                        </div>
                        <div>
                            <a href="#"
                                class="w-full py-2 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-sm border border-black bg-black text-white hover:text-gray-800 hover:bg-white disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                Processed To Checkout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div
                class="my-10 bg-white border border-gray-200 shadow-sm rounded-xl p-4 md:p-5 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                <h3 class="text-lg font-bold text-gray-400 dark:text-white">
                    Cart is empty
                </h3>
            </div>
        @endif

    </div>

@endsection

@push('style')
@endpush

@push('script')
@endpush
