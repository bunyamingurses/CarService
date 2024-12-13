@extends("layouts.front.index")
@section("content")
    @include("layouts.front.partial.pageHeader")
    <div class="page-content">
        <div class="uk-section-large uk-container">
            <div class="uk-grid" data-uk-grid>
                <div class="uk-width-4-3@xl">
                    <article class="article-full">
                        <div class="article-full__content">
                            <div class="uk-grid uk-grid-large uk-child-width-1-1 uk-child-width-1-2@m uk-margin-large">


                                @foreach($gallery as $galleryWrite)
                                    <div class="section-first-screen__breadcrumb" style="margin-bottom:30px;">
                                        <div class="uk-position-relative" tabindex="-1" data-uk-slideshow="  ">
                                            <ul class="uk-slideshow-items">
                                                <li>
                                                    <div class="first-screen__item">
                                                        <div class="uk-animation-fade"><img style="width: 100%;" src="{{ asset("imageWebp/service/gallery/")."/".$galleryWrite->imageBeforeWebp }}" style="height: 300.938px;" alt data-uk-slider></div>

                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="first-screen__item">
                                                        <div class="uk-animation-fade "><img style="width: 100%;" src="{{ asset("imageWebp/service/gallery/")."/".$galleryWrite->imageAfterWebp }}" style="min-height: 300.938px;" alt data-uk-slider></div>

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
            </div>
        </div>
    </div>
@endsection
