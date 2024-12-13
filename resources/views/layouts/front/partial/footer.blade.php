</main>

<footer class="page-footer">
    <div class="page-footer-top">
        <div class="uk-container">
            <div class="uk-grid uk-child-width-1-4@l uk-child-width-1-2@s" data-uk-grid>
                <div class="uk-flex-first@l">
                    <div class="logo"><a class="logo__link" href="https://pro-theme.com/"><img class="logo__img" src="{{ asset("imageWebp/setting/")."/".\App\Models\setting::getSetting("logoFooterWebp") }}" alt="logo"></a></div>
                    <p>{{ substr(\App\Models\about::getAbout("about"),0,100) }}...</p><img src="{{ asset("assets/frontAssets/img/decor-line-right-accent.svg") }}" alt="">
                    <div class="block-with-icon"><a class="block-with-icon__link" href="tel:{{ \App\Models\setting::getSetting("phoneNumber") }}">
                            <div class="block-with-icon__icon"><img src="{{ asset("assets/frontAssets/img/ico-comment.svg") }}" alt="ico-comment"></div>
                            <div class="block-with-icon__desc">
                                <div class="block-with-icon__label">Talk With Our Experts</div>
                                <div class="block-with-icon__value">{{ \App\Models\setting::getSetting("phoneNumber") }}</div>
                            </div>
                        </a></div>
                    <ul class="social">
                        <li class="social-item"><a class="social-item__link" href="{{ \App\Models\setting::getSetting("facebook") }}"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-item"><a class="social-item__link" href="{{ \App\Models\setting::getSetting("twitter") }}"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-item"><a class="social-item__link" href="{{ \App\Models\setting::getSetting("instragram") }}"><i class="fab fa-instagram"></i></a></li>
                        <li class="social-item"><a class="social-item__link" href="{{ \App\Models\setting::getSetting("linkedin") }}"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="uk-flex-last@l">
                    <div class="uk-h5">Get in touch</div>
                    <ul class="contacts-list">
                        <li class="contacts-list-item">
                            <div class="contacts-list-item__icon"><img src="{{ asset("assets/frontAssets/img/ico-phone24.svg") }}" data-uk-svg alt="For Repair Support"></div>
                            <div class="contacts-list-item__desc">
                                <div class="contacts-list-item__label">For Repair Support</div>
                                <div class="contacts-list-item__content"><a href="tel:+18107994660/5660">{{ \App\Models\setting::getSetting("phoneNumber") }}</a></div>
                            </div>
                        </li>
                        <li class="contacts-list-item">
                            <div class="contacts-list-item__icon"><img src="{{ asset("assets/frontAssets/img/ico-timer.svg") }}" data-uk-svg alt="The Working Hours"></div>
                            <div class="contacts-list-item__desc">
                                <div class="contacts-list-item__label">The Working Hours</div>
                                <div class="contacts-list-item__content">{{ \App\Models\setting::getSetting("ours") }}</div>
                            </div>
                        </li>
                        <li class="contacts-list-item">
                            <div class="contacts-list-item__icon"><img src="{{ asset("assets/frontAssets/img/ico-mail.svg") }}" data-uk-svg alt="Send Us Email"></div>
                            <div class="contacts-list-item__desc">
                                <div class="contacts-list-item__label">Send Us Email</div>
                                <div class="contacts-list-item__content"><a href="mailto:repair@my-domain.com">{{ \App\Models\setting::getSetting("email") }}</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="uk-h5">Link's</div>
                    <ul class="uk-nav uk-list-disc">
                        <li><a href="{{ route("indexHtml") }}">Home</a></li>
                        <li><a href="{{ route("aboutHtml") }}">About</a></li>
                        <li><a href="{{ route("servicesHtml") }}">Service</a></li>
                        <li><a href="{{ route("galleryHtml") }}">Gallery</a></li>
                        <li><a href="{{ route("galleryBAHtml") }}">GAllery B/A</a></li>
                        <li><a href="{{ route("contactHtml") }}">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <div class="uk-h5">Popular Services</div>
                    <ul class="uk-nav uk-list-disc">
                        @php $popularService=\App\Models\services::limit(6)->get(); @endphp
                        @foreach($popularService as $serviceWrite)
                            <li><a href="{{ route("serviceDetailHtml",["id"=>$serviceWrite->id,"name"=>\App\Http\Controllers\support\functionController::seo($serviceWrite->title)]) }}">{{ $serviceWrite->title }}</a></li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="page-footer-bottom">
        <div class="uk-container"><span>(c) 2024 <b>ATLANTIS</b>無断転載を禁止します</span></div>
    </div><!-- Дополнительные блоки-->
    <div id="offcanvas" data-uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar uk-flex uk-flex-column uk-flex-between">
            <button class="uk-offcanvas-close" type="button" data-uk-close=""></button>
            <div>
                <div class="logo"><a class="logo__link" href="{{ route("indexHtml") }}"><img class="logo__img" src="{{ asset("imageWebp/setting/")."/".\App\Models\setting::getSetting("logoFooterWebp") }}" alt="logo"></a></div>
                <div class="uk-margin">
                    <ul class="uk-nav uk-nav-parent-icon" data-uk-nav>
                        <li><a href="{{ route("indexHtml") }}"><span class="fa fa-arrow-right"></span> Home</a></li>
                        <li><a href="{{ route("aboutHtml") }}"><span class="fa fa-arrow-right"></span> About</a></li>
                        <li><a href="{{ route("servicesHtml") }}"><span class="fa fa-arrow-right"></span> Service</a></li>
                        <li><a href="{{ route("galleryHtml") }}"><span class="fa fa-arrow-right"></span> Gallery</a></li>
                        <li><a href="{{ route("galleryBAHtml") }}"><span class="fa fa-arrow-right"></span> GAllery B/A</a></li>
                        <li><a href="{{ route("contactHtml") }}"><span class="fa fa-arrow-right"></span> Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="uk-margin-top">
                <hr class="uk-margin">
                <ul class="social">
                    <li class="social-item"><a class="social-item__link" href="{{ \App\Models\setting::getSetting("twitter") }}"><i class="fab fa-twitter"></i></a></li>
                    <li class="social-item"><a class="social-item__link" href="{{ \App\Models\setting::getSetting("facebook") }}"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-item"><a class="social-item__link" href="{{ \App\Models\setting::getSetting("instagram") }}"><i class="fab fa-instagram"></i></a></li>
                    <li class="social-item"><a class="social-item__link" href="{{ \App\Models\setting::getSetting("linkedin") }}"><i class="fab fa-linkedin"></i></a></li>
                </ul>
                <hr class="uk-margin">
                <div class="block-with-icon"><a class="block-with-icon__link" href="tel:8109200664">
                        <div class="block-with-icon__icon"><img src="{{ asset("assets/frontAssets/img/ico-callback.svg") }}" alt="ico-callback"></div>
                        <div class="block-with-icon__desc">
                            <div class="block-with-icon__label">Talk With Our Experts</div>
                            <div class="block-with-icon__value">(810) 920-0664</div>
                        </div>
                    </a></div>
            </div>
        </div>
    </div>
</footer>
</div>
<script src="{{ asset("assets/frontAssets/js/jquery.min.js") }}"></script>
<script src="{{ asset("assets/frontAssets/js/uikit.min.js") }}"></script>
<script src="{{ asset("assets/frontAssets/js/uikit-icons.min.js") }}"></script>
<script src="{{ asset("assets/frontAssets/js/main.js") }}"></script>
<script src="{{ asset("assets/frontAssets/js/fontawesome.all.min.js") }}"></script>
@yield("script")
</body>


</html>
