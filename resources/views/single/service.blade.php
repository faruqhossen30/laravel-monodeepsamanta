@extends('layouts.app')
@section('title', 'Home Page')
@section('content')

    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12 lg:col-span-8">
            <img class="w-full" src="{{ asset('uploads/service/' . $service->thumbnail) }}" alt="">
        </div>
        <div class="col-span-12 lg:col-span-4 border p-2">
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
                    <h1 class="text-2xl font-bold">$350</h1>
                    <div class="flex items-center space-x-1">
                        <span class="text-md font-bold">Save up to 10% with <span class="text-primary">Subscribe to
                                save</span></span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                        </svg>
                    </div>
                    <p class="py-1">3 Ultra fast sketches! This is just 4 Sketches! Please chechk the standard and premium
                        options for finished original art.</p>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h1 class="text-lg font-bold">4 Days Delivery</h1>
                    </div>
                    <div>
                        <ul class="space-y-3 text-sm">
                            <li class="flex space-x-3">
                              <svg class="flex-shrink-0 h-4 w-4 mt-0.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                              <span class="text-gray-800 dark:text-gray-400">
                                FAQ
                              </span>
                            </li>
                            <li class="flex space-x-3">
                              <svg class="flex-shrink-0 h-4 w-4 mt-0.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                              <span class="text-gray-800 dark:text-gray-400">
                                FAQ
                              </span>
                            </li>
                            <li class="flex space-x-3">
                              <svg class="flex-shrink-0 h-4 w-4 mt-0.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                              <span class="text-gray-800 dark:text-gray-400">
                                FAQ
                              </span>
                            </li>
                            <li class="flex space-x-3">
                              <svg class="flex-shrink-0 h-4 w-4 mt-0.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                              <span class="text-gray-800 dark:text-gray-400">
                                FAQ
                              </span>
                            </li>
                        </ul>
                    </div>
                    <div class="space-y-1">
                        <button type="button" class="w-full py-2 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-black text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                            Button
                          </button>
                        <button type="button" class="w-full py-2 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-black text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                            Button
                          </button>
                    </div>
                </div>
                <div id="equal-width-elements-2" class="hidden" role="tabpanel"
                    aria-labelledby="equal-width-elements-item-2">
                    <h1 class="text-2xl font-bold">$450</h1>
                    <div class="flex items-center space-x-1">
                        <span class="text-md font-bold">Save up to 10% with <span class="text-primary">Subscribe to
                                save</span></span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                        </svg>
                    </div>
                    <p class="py-1">3 Ultra fast sketches! This is just 4 Sketches! Please chechk the standard and premium
                        options for finished original art.</p>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h1 class="text-lg font-bold">4 Days Delivery</h1>
                    </div>
                    <div>
                        <ul class="space-y-3 text-sm">
                            <li class="flex space-x-3">
                              <svg class="flex-shrink-0 h-4 w-4 mt-0.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                              <span class="text-gray-800 dark:text-gray-400">
                                FAQ
                              </span>
                            </li>
                            <li class="flex space-x-3">
                              <svg class="flex-shrink-0 h-4 w-4 mt-0.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                              <span class="text-gray-800 dark:text-gray-400">
                                FAQ
                              </span>
                            </li>
                            <li class="flex space-x-3">
                              <svg class="flex-shrink-0 h-4 w-4 mt-0.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                              <span class="text-gray-800 dark:text-gray-400">
                                FAQ
                              </span>
                            </li>
                            <li class="flex space-x-3">
                              <svg class="flex-shrink-0 h-4 w-4 mt-0.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                              <span class="text-gray-800 dark:text-gray-400">
                                FAQ
                              </span>
                            </li>
                        </ul>
                    </div>
                    <div class="space-y-1">
                        <button type="button" class="w-full py-2 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-black text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                            Button
                          </button>
                        <button type="button" class="w-full py-2 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-black text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                            Button
                          </button>
                    </div>
                </div>
                <div id="equal-width-elements-3" class="hidden" role="tabpanel"
                    aria-labelledby="equal-width-elements-item-3">
                    <h1 class="text-2xl font-bold">$650</h1>
                    <div class="flex items-center space-x-1">
                        <span class="text-md font-bold">Save up to 10% with <span class="text-primary">Subscribe to
                                save</span></span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                        </svg>
                    </div>
                    <p class="py-1">3 Ultra fast sketches! This is just 4 Sketches! Please chechk the standard and premium
                        options for finished original art.</p>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h1 class="text-lg font-bold">4 Days Delivery</h1>
                    </div>
                    <div>
                        <ul class="space-y-3 text-sm">
                            <li class="flex space-x-3">
                              <svg class="flex-shrink-0 h-4 w-4 mt-0.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                              <span class="text-gray-800 dark:text-gray-400">
                                FAQ
                              </span>
                            </li>
                            <li class="flex space-x-3">
                              <svg class="flex-shrink-0 h-4 w-4 mt-0.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                              <span class="text-gray-800 dark:text-gray-400">
                                FAQ
                              </span>
                            </li>
                            <li class="flex space-x-3">
                              <svg class="flex-shrink-0 h-4 w-4 mt-0.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                              <span class="text-gray-800 dark:text-gray-400">
                                FAQ
                              </span>
                            </li>
                            <li class="flex space-x-3">
                              <svg class="flex-shrink-0 h-4 w-4 mt-0.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                              <span class="text-gray-800 dark:text-gray-400">
                                FAQ
                              </span>
                            </li>
                        </ul>
                    </div>
                    <div class="space-y-1">
                        <button type="button" class="w-full py-2 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-black text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                            Button
                          </button>
                        <button type="button" class="w-full py-2 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-black text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                            Button
                          </button>
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
