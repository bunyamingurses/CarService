@extends("layouts.front.index")
@section("content")
    @include("layouts.front.partial.pageHeader")

    <div class="page-content">
        <div class="uk-section-large uk-container">
            <div class="contacts-block">
                <div class="uk-grid uk-grid-collapse" data-uk-grid>
                    <div class="uk-width-1-3@m">
                        <div class="sidebar">
                            @include("layouts.front.partial.contactDetails")
                        </div>
                    </div>
                    <div class="uk-width-2-3@m">
                        <div class="block-form">
                            <div class="section-title">
                                @if(session("status"))
                                    <div class="uk-alert uk-alert-warning"> {{ session("status") }}</div>
                                @endif
                                <div class="uk-h2">Send a Message</div>
                            </div>
                            <div class="section-content">
                                <p>Your email address will not be published. Required fields are marked with *</p>
                                <form action="{{ route("contactCreate") }}" method="post">
                                    @csrf
                                    <div class="uk-grid uk-grid-small uk-child-width-1-2@s" data-uk-grid>
                                        <div><input class="uk-input uk-form-large" type="text" name="name" placeholder="name *"></div>
                                        <div><input class="uk-input uk-form-large" type="text" name="email" placeholder="email *"></div>
                                        <div class="uk-width-1-1"><input class="uk-input uk-form-large" name="subject" type="text" placeholder="subject"></div>
                                        <div class="uk-width-1-1"><textarea class="uk-textarea uk-form-large" name="message" placeholder="Your Message"></textarea></div>
                                        <div><button class="uk-button uk-button-danger uk-button-large" type="submit">Send message</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
