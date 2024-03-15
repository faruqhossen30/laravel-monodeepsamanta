@php
    $path = option('chat_section_thumbnail');
    $videopath = option('chat_section_video');
@endphp
<x-setting.setting-master title="Chat Section Photo/Video Setting">

    <div class="p-4">
        <form action="{{ route('setting.chatsection.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div
                class="py-3 font-extrabold flex items-center text-lg text-gray-800 before:flex-[1_1_0%] before:border-t before:border-gray-200 before:me-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 after:ms-6 dark:text-white dark:before:border-gray-600 dark:after:border-gray-600">
                Select Thumbnail or video</div>
            <div class="grid grid-cols-2 gap-10">
                <div class="col-span-2 lg:col-span-1">
                    <div class="my-2 md:flex">
                        <div class="w-full">
                            <label for="photoThubnail" class="py-2">Photo Thumbnail</label>
                            <input class="photoThumbnail" type="file" id="photoThubnail" name="thumbnail"
                                data-default-file="{{ asset('uploads/settings/chat/' . $path) }}">
                        </div>
                    </div>
                </div>
                <div class="col-span-2 lg:col-span-1">
                    <div class="my-2 md:flex">
                        <div class="w-full">
                            <label for="videoThumbnail" class="py-2">Video Thumbnail</label>
                            <input class="videoThumbnail" type="file" id="videoThumbnail" name="video"
                                data-default-file="{{ asset('uploads/settings/chat/' . $videopath) }}">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <x-form.submit-button />
            </div>
        </form>
    </div>



    @push('style')
        <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
        <style>
            .dropify-message p {
                font-size: 24px
            }
        </style>
    @endpush

    @push('script')
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="{{ asset('js/dropify.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                photoThubnail();
                videoThubnail();

                function photoThubnail() {
                    $('.photoThumbnail').dropify({
                        messages: {
                            'default': 'Image file drop here or click',
                            'replace': 'Drag and drop or click to replace',
                            'remove': 'Remove',
                            'error': 'Ooops, something wrong happended.'
                        }
                    });
                }

                function videoThubnail() {
                    $('.videoThumbnail').dropify({
                        messages: {
                            'default': 'Video file drop here or click',
                            'replace': 'Drag and drop or click to replace',
                            'remove': 'Remove',
                            'error': 'Ooops, something wrong happended.'
                        }
                    });
                }

            });
        </script>
    @endpush

</x-setting.setting-master>
