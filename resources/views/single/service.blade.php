@extends('layouts.app')
@section('title', 'Home Page')
@section('content')

    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12 lg:col-span-8">
            <div>
                <img class="w-full" src="{{ asset('uploads/service/' . $service->thumbnail) }}" alt="">
            </div>
            <div>
                {!! $service->description !!}
            </div>

            <div>
                <div>
                    <h3 class="py-2 font-bold text-lg">What’s Included</h3>
                </div>
                <div>
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                            <div class="p-1.5 min-w-full inline-block align-middle">
                                <div class="border overflow-hidden dark:border-gray-700">
                                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                        <thead>
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                    Feature</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">
                                                    Starter</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">
                                                    Standard</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">
                                                    Advanced</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                            @foreach ($service->features as $feature)
                                                <tr class="text-center">
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200 text-start">
                                                        {{ $feature->feature }}</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                        {{ $feature->starter }}</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                        {{ $feature->standard }}</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                        {{ $feature->advanced }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hs-accordion-group">
                    @foreach ($service->faqs as $faq)
                        <div class="hs-accordion" id="hs-basic-with-arrow-heading-two">
                            <button
                                class="hs-accordion-toggle hs-accordion-active:text-blue-600 py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                                aria-controls="hs-basic-with-arrow-collapse-two">
                                <svg class="hs-accordion-active:hidden block w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                                <svg class="hs-accordion-active:block hidden w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m18 15-6-6-6 6" />
                                </svg>
                                {{ $faq->question }}
                            </button>
                            <div id="hs-basic-with-arrow-collapse-two"
                                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                aria-labelledby="hs-basic-with-arrow-heading-two">
                                <p class="text-gray-800 dark:text-gray-200">
                                    {{ $faq->answer }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-4">
            <div class="border p-2 sticky top-36">
                <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
                    <button type="button"
                        class="hs-tab-active:bg-black hs-tab-active:text-white hs-tab-active:hover:text-white hs-tab-active:dark:text-white py-2 px-4 basis-0 grow inline-flex justify-center items-center gap-x-2 bg-transparent text-sm font-medium text-center text-gray-500 hover:text-blue-600 rounded-sm disabled:opacity-50 disabled:pointer-events-none dark:text-gray-400 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 active"
                        id="equal-width-elements-item-1" data-hs-tab="#equal-width-elements-1"
                        aria-controls="equal-width-elements-1" role="tab">
                        Starter
                    </button>
                    <button type="button"
                        class="hs-tab-active:bg-black hs-tab-active:text-white hs-tab-active:hover:text-white hs-tab-active:dark:text-white py-2 px-4 basis-0 grow inline-flex justify-center items-center gap-x-2 bg-transparent text-sm font-medium text-center text-gray-500 hover:text-blue-600 rounded-sm disabled:opacity-50 disabled:pointer-events-none dark:text-gray-400 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                        id="equal-width-elements-item-2" data-hs-tab="#equal-width-elements-2"
                        aria-controls="equal-width-elements-2" role="tab">
                        Standard
                    </button>
                    <button type="button"
                        class="hs-tab-active:bg-black hs-tab-active:text-white hs-tab-active:hover:text-white hs-tab-active:dark:text-white py-2 px-4 basis-0 grow inline-flex justify-center items-center gap-x-2 bg-transparent text-sm font-medium text-center text-gray-500 hover:text-blue-600 rounded-sm disabled:opacity-50 disabled:pointer-events-none dark:text-gray-400 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                        id="equal-width-elements-item-3" data-hs-tab="#equal-width-elements-3"
                        aria-controls="equal-width-elements-3" role="tab">
                        Advance
                    </button>
                </nav>

                <div class="mt-3">
                    <div id="equal-width-elements-1" role="tabpanel" aria-labelledby="equal-width-elements-item-1">
                        <h1 class="text-2xl font-bold">${{ $service->package->starter_price }}</h1>
                        <div class="flex items-center space-x-1">
                            <span class="text-md font-bold">Save up to 10% with <span class="text-primary">Subscribe to
                                    save</span></span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                            </svg>
                        </div>
                        <p class="py-1">{{ $service->package->starter_short_description }}</p>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h1 class="text-lg font-bold">{{ $service->package->starter_deliver_time }} Days Delivery</h1>
                        </div>
                        <div class="py-2">
                            {!! $service->package->starter_full_description !!}
                        </div>
                        <div class="space-y-1">
                            <button type="button"
                                class="w-full py-2 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-black text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                Continue ( ${{ $service->package->starter_price }})
                            </button>
                            <button type="button"
                                class="w-full py-2 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-black text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                Book a Meeting
                            </button>
                        </div>
                    </div>
                    <div id="equal-width-elements-2" class="hidden" role="tabpanel"
                        aria-labelledby="equal-width-elements-item-2">
                        <h1 class="text-2xl font-bold">${{ $service->package->standard_price }}</h1>
                        <div class="flex items-center space-x-1">
                            <span class="text-md font-bold">Save up to 10% with <span class="text-primary">Subscribe to
                                    save</span></span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                            </svg>
                        </div>
                        <p class="py-1">
                            {{ $service->package->standard_short_description }}
                        </p>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h1 class="text-lg font-bold">{{ $service->package->standard_deliver_time }} Days Delivery
                            </h1>
                        </div>
                        <div class="py-2">
                            {!! $service->package->standard_short_description !!}
                        </div>
                        <div class="space-y-1">
                            <button type="button"
                                class="w-full py-2 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-black text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                Continue ( ${{ $service->package->standard_price }})
                            </button>
                            <button type="button"
                                class="w-full py-2 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-black text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                Book a Meeting
                            </button>
                        </div>
                    </div>
                    <div id="equal-width-elements-3" class="hidden" role="tabpanel"
                        aria-labelledby="equal-width-elements-item-3">
                        <h1 class="text-2xl font-bold">${{ $service->package->advance_price }}</h1>
                        <div class="flex items-center space-x-1">
                            <span class="text-md font-bold">Save up to 10% with <span class="text-primary">Subscribe to
                                    save</span></span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                            </svg>
                        </div>
                        <p class="py-1">
                            {{ $service->package->advance_short_description }}
                        </p>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h1 class="text-lg font-bold">{{ $service->package->advance_deliver_time }} Days Delivery</h1>
                        </div>
                        <div class="py-3">
                            {!! $service->package->advance_full_description !!}
                        </div>
                        <div class="space-y-1">
                            <button type="button"
                                class="w-full py-2 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-black text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                Continue ( ${{ $service->package->advance_price }})
                            </button>
                            <button type="button"
                                class="w-full py-2 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-black text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                Book a Meeting
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('style')
@endpush

@push('script')
@endpush
