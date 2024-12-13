<div class="widjet widjet-contacts">
    <h4 class="widjet__title">連絡先アドレス</h4>
    <ul class="contacts-list">
        <li class="contacts-list-item">
            <div class="contacts-list-item__icon"><img src="{{ asset("assets/frontAssets/img/ico-contact-1.svg") }}" data-uk-svg alt="HeadOffice Address"></div>
            <div class="contacts-list-item__desc">
                <div class="contacts-list-item__label">住所</div>
                <div class="contacts-list-item__content">{{ \App\Models\setting::getSetting("address") }}</div>
            </div>
        </li>
        <li class="contacts-list-item">
            <div class="contacts-list-item__icon"><img src="{{ asset("assets/frontAssets/img/ico-contact-2.svg") }}" data-uk-svg alt="For Rental Support"></div>
            <div class="contacts-list-item__desc">
                <div class="contacts-list-item__label">労働時間</div>
                <div class="contacts-list-item__content"><a href="tel:{{ \App\Models\setting::getSetting("phoneNumber") }}">{{ \App\Models\setting::getSetting("phoneNumber") }}</a></div>
            </div>
        </li>
        <li class="contacts-list-item">
            <div class="contacts-list-item__icon"><img src="{{ asset("assets/frontAssets/img/ico-contact-3.svg") }}" data-uk-svg alt="The Office Hours"></div>
            <div class="contacts-list-item__desc">
                <div class="contacts-list-item__label">労働時間</div>
                <div class="contacts-list-item__content">{{ \App\Models\setting::getSetting("ours") }}</div>
            </div>
        </li>
        <li class="contacts-list-item">
            <div class="contacts-list-item__icon"><img src="{{ asset("assets/frontAssets/img/ico-contact-4.svg") }}" data-uk-svg alt="Send Us Email"></div>
            <div class="contacts-list-item__desc">
                <div class="contacts-list-item__label">Send Us Email</div>
                <div class="contacts-list-item__content"> <a href="mailto:{{ \App\Models\setting::getSetting("email") }}">{{ \App\Models\setting::getSetting("email") }}</a></div>
            </div>
        </li>
    </ul>
</div>
