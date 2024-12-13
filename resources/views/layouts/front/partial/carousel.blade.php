<div class="section-first-screen">
    <div class="section-first-screen__shape">
        <div class="uk-position-relative" tabindex="-1" data-uk-slideshow="min-height: 470; max-height: 780; autoplay: true">
            <ul class="uk-slideshow-items">
                @php $carousel=\App\Models\carousel::get(); @endphp
                @foreach($carousel as $carouselWrite)
                    <li>
                        <div class="first-screen__item">
                            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left"><img src="{{ asset("imageWebp/carousel/")."/".$carouselWrite->imageWebp }}" alt data-uk-cover></div>
                        </div>
                    </li>
                @endforeach

            </ul>
            <div class="uk-visible@s"><a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a><a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a></div>
            <div class="uk-hidden@s">
                <div class="uk-position-bottom-center uk-position-small uk-light">
                    <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin-bottom"></ul>
                </div>
            </div>
        </div>
    </div>
</div>
