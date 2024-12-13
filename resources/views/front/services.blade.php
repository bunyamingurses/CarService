@extends("layouts.front.index")
@section("content")
    @include("layouts.front.partial.pageHeader")

    <div class="page-content">
        <div class="uk-section-large uk-container">
            <div class="uk-grid uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m" data-uk-grid>

                @foreach($service as $serviceWrite)
                    <div>
                        <div class="service-item">
                            <div class="service-item__media uk-inline-clip uk-transition-toggle uk-light"><a href="{{ route("serviceDetailHtml",["id"=>$serviceWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($serviceWrite->title)]) }}"><img src="{{ asset("imageWebp/service/")."/".$serviceWrite->imagesWebp }}" alt="">
                                    <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle"><span data-uk-icon="icon: plus; ratio: 2"></span></div>
                                </a></div>
                            <div class="service-item__info">
                                <div>
                                    <a href="{{ route("serviceDetailHtml",["id"=>$serviceWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($serviceWrite->title)]) }}"><div class="service-item__title">{{ $serviceWrite->title }}</div></a>
                                </div>
                                <div><a class="service-item__icon" href="{{ route("serviceDetailHtml",["id"=>$serviceWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($serviceWrite->title)]) }}" data-uk-icon="triangle-right"></a></div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>

@endsection
