@if ($service->sliders->count())
    <div class="w-full" id="productGallery">

        <div class="swiffy-slider slider-item-ratio slider-item-ratio-1x1 slider-nav-round slider-nav-nodelay"
            id="pgallery">
            <ul class="slider-container">
                @foreach ($service->sliders as $key => $slider)
                    <li><img src="{{ asset('uploads/service/slider/' . $slider->thumbnail) }}" loading="lazy" alt="..."
                            data-bs-toggle="modal" data-bs-target="#productGalleryModal"
                            onclick="imageClick({{ $key }})"></li>
                    onclick="imageClick(5)"></li>
                @endforeach
            </ul>

            <button type="button" class="slider-nav" aria-label="Go previous"></button>
            <button type="button" class="slider-nav slider-nav-next" aria-label="Go next"></button>
        </div>

        <div
            class="swiffy-slider slider-nav-dark slider-nav-sm slider-nav-chevron slider-item-show4 slider-item-snapstart slider-item-ratio slider-item-ratio-1x1 slider-nav-visible slider-nav-page slider-nav-outside-expand pt-3 d-none d-lg-block">
            <ul class="slider-container" id="pgallerythumbs" style="cursor:pointer">
                @foreach ($service->sliders as $key => $slider)
                    <li>
                        <img src="{{ asset('uploads/service/slider/' . $slider->thumbnail) }}" loading="lazy"
                            alt="..." onmouseover="thumbHover({{ $key }})">
                    </li>
                @endforeach

            </ul>

            <button type="button" class="slider-nav" aria-label="Go previous"></button>
            <button type="button" class="slider-nav slider-nav-next" aria-label="Go next"></button>
        </div>

    </div>
@endif
