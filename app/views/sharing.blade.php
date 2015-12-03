<div class="btn-group btn-group-justified btn-group-lg">
    <a
        class="btn btn-primary"
        target="_blank"
        title="Pataje Keeng Gratis sou Facebook"
        href="http://www.facebook.com/sharer.php?u={{ Config::get('site.url') }}&amp;t={{ Config::get('site.name') }}">
        <strong>
            <span class="fab"><i class="fa fa-lg fa-facebook fb"></i></span>
            <i class="fa fa-2x fa-facebook fb hidden695"></i>
            <span class="fab">Facebook</span>
        </strong>
    </a>

    <a
        class="btn btn-info"
        target="_blank"
        title="Pataje Keeng Gratis sou Twitter"
        href="http://twitter.com/share?url={{ Config::get('site.url') }}&amp;text={{ Config::get('site.name') }} &mdash; {{ Config::get('site.description') }}&amp;via={{ Config::get('site.twitter') }}">
        <strong>
            <span class="fab"><i class="fa fa-lg fa-twitter tw"></i></span>
            <i class="fa fa-2x fa-twitter tw hidden695"></i>
            <span class="fab">Twitter</span>
        </strong>
    </a>

    <a
        class="btn btn-success"
        target="_blank"
        title="Pataje Keeng Gratis sou WhatsApp"
        href="whatsapp://send?text={{ Config::get('site.name') }} &mdash; {{ Config::get('site.description') }} {{ Config::get('site.url') }} via {{ Config::get('site.twitter@') }}">
        <strong>
            <span class="fab"><i class="fa fa-lg fa-whatsapp wa"></i></span>
            <i class="fa fa-2x fa-whatsapp wa hidden695"></i>
            <span class="fab">WhatsApp</span>
        </strong>
    </a>

    <a
        class="btn btn-danger"
        target="_blank"
        title="Pataje Keeng Gratis sou Google Plus"
        href="https://plus.google.com/share?url={{ Config::get('site.url') }}">
        <strong>
            <span class="fab"><i class="fa fa-lg fa-google google"></i></span>
            <i class="fa fa-2x fa-google google hidden695"></i>
            <span class="fab">Google+</span>
        </strong>
    </a>
</div>