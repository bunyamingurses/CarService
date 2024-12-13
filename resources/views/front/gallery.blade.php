@extends("layouts.front.index")

@section("content")
    @include("layouts.front.partial.pageHeader")


    <div class="page-content">
        <div class="uk-section-large uk-container">
            <div class="uk-grid" data-uk-grid>
                <div class="uk-width-4-3@xl">
                    <article class="article-full">
                        <div class="article-full__content">
                            <div class="uk-grid uk-grid-large uk-child-width-1-2 uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-margin-large" data-uk-grid data-uk-lightbox>

                                @foreach($gallery as $galleryWrite)

                                    <div><a href="{{ asset("imageWebp/gallery/")."/".$galleryWrite->imageWebp }}"><img class="uk-width-1-1@l" src="{{ asset("imageWebp/gallery/")."/".$galleryWrite->imageWebp }}" alt="gallery"></a></div>

                                @endforeach

                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

@endsection

