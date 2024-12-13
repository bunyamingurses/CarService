<div class="section-about uk-section-large">
    <div class="uk-container">
        <div class="uk-grid uk-grid-small uk-child-width-1-3@l uk-child-width-1-2@s uk-flex-middle uk-flex-center" data-uk-grid>
            @php $about=\App\Models\about::limit(1)->get(); @endphp
            <div class="uk-width-1-2@m">
                <div data-uk-lightbox><img src="{{ asset("imageWebp/setting/")."/".$about[0]["aboutImageWebp"] }}" alt="img-about-1"></div>
            </div>
            <div class="uk-width-1-2@m">
                <div class="section-title"> <span>アトランティスについて</span>
                    <h3 class="uk-h2">アトランティスについて</h3>
                </div>
                <div class="section-content">
                    <p>{{ $about[0]["about"] }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
