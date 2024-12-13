@extends("layouts.front.index")
@section("content")
    @include("layouts.front.partial.pageHeader")

    <div class="page-content">
        <div class="uk-section-large uk-container">
            <div class="uk-grid" data-uk-grid>
                <div class="uk-width-2-3@m uk-position-relative">
                    <article class="article-full">
                        <div class="article-full__image" data-uk-lightbox><a href="{{ asset("imageWebp/service/")."/".$service[0]["imagesWebp"] }}"><img src="{{ asset("imageWebp/service/")."/".$service[0]["imagesWebp"] }}" alt=""></a></div>
                        <h1 class="article-full__title">{{ $service[0]["title"] }}</h1>
                        <div class="article-full__content">
                            <p>{!!  html_entity_decode($service[0]["text"]) !!}</p>


                            <div class="uk-grid-large uk-child-width-1-1 uk-child-width-1-1@m">
                                @foreach($gallery as $galleryWrite)
                                    <div class="section-first-screen__breadcrumb"  style="margin-top:10px;">
                                        <div class="uk-position-relative" tabindex="-1" data-uk-slideshow="  ">
                                            <ul class="uk-slideshow-items">
                                                <li>
                                                    <div class="first-screen__item ">
                                                        <div class="uk-animation-fade"><img class="sliderOzel" style="width:100%;" src="{{ asset("imageWebp/service/gallery/")."/".$galleryWrite->imageBeforeWebp }}" alt data-uk-slider></div>

                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="first-screen__item">
                                                        <div class="uk-animation-fade "><img class="sliderOzel" style="width:100%;" src="{{ asset("imageWebp/service/gallery/")."/".$galleryWrite->imageAfterWebp }}" alt data-uk-slider></div>

                                                    </div>
                                                </li>
                                            </ul>
                                            <div><a class="uk-position-center-left uk-hidden-hover" style="color:#FD8C4F;" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a><a class="uk-position-center-right uk-position-small uk-hidden-hover" style="color:#FD8C4F;" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a></div>

                                        </div>
                                    </div>
                                @endforeach

                            </div>


                        </div>
                    </article>
                </div>
                <div class="uk-width-1-3@m">
                    <aside>
                        @include("layouts.front.partial.contactDetails")
                    </aside>
                </div>
            </div>
        </div>
    </div>

@endsection
