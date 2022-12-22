<!-- Footer-->
<footer id="site-footer" class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-4 mb-xl-0">
                <div class="widget-footer">
                    <img src="{{ asset("assets/frontend/images/logo.png") }}" class="footer-logo" alt="">
                  <p>
                    {{ Str::limit(
    setting('What_is_special','As an Emirati woman, Ghusna today is a role-model in her field. The deep understanding of the UAE environment and culture enables her to speak her own unique language of design. A clear vision of the society needs and lifestyle is what stimulated her to accomplish luxurious designs which leads to the growth of her group everyday. <br> Today, Aghsan group expanded to include','textarea','about_us'),
     100) }}
                  </p>
                    <div class="footer-social list-social">
                        <ul>
                            <li><a href="{{ setting('whatsapp','https://facebook.com','string','contact') }}" target="_self"><i class="fab fa-whatsapp"></i></a></li>
{{--                            <li><a href="{{ setting('twitter','https://twitter.com','string','contact') }}" target="_self"><i class="fab fa-twitter"></i></a></li>--}}
                            <li><a href="{{ setting('snapchat','https://linkedin.com','string','contact') }}" target="_self"><i class="fab fa-snapchat"></i></a></li>
                            <li><a href="{{ setting('instagram','https://instagram.com','string','contact') }}" target="_self"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-4 mb-xl-0">
                <div class="widget-footer">
                    <h6>{{ __('main.Contacts') }}</h6>
                    <ul class="footer-list">
                        <li class="footer-list-item">
                            <span class="list-item-icon"><i class="ot-flaticon-place"></i></span>
                            <span class="list-item-text">{{ setting('address','Egypt Cairo, Naser City','contact') }}</span>
                        </li>
                        <li class="footer-list-item">
                            <span class="list-item-icon"><i class="ot-flaticon-mail"></i></span>
                            <span class="list-item-text">{{ setting('email','agsan@info.com','string','contact') }}</span>
                        </li>
                        <li class="footer-list-item">
                            <span class="list-item-icon"><i class="ot-flaticon-phone-call"></i></span>
                            <span class="list-item-text">{{ setting('phone','+1 800 453 782 120','string','contact') }}</span>
                        </li>
                        <li class="footer-list-item">
                            <span class="list-item-icon"><i class="ot-flaticon-phone-call"></i></span>
                            <span class="list-item-text">{{ setting('phone_2','+1 800 453 782 120','string','contact') }}</span>
                        </li>
                        <li class="footer-list-item">
                            <span class="list-item-icon"><i class="ot-flaticon-phone-call"></i></span>
                            <span class="list-item-text">{{ setting('phone_3','0507433255','string','contact') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-4 mb-md-0">
                <div class="widget-footer widget-contact">
                    <h6>{{ __('main.Location') }}</h6>
{{--                    <ul>--}}
{{--                      @foreach($blogs as $blog)--}}
{{--                        <li><a href="{{ route('blog', $blog->id)}}">{{$blog->getLang('title')}}</a></li>--}}
{{--                      @endforeach--}}
{{--                    </ul>--}}
                  <div class="">
                    <div class="">
                      <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.183299657653!2d55.65980671498987!3d24.20035908436953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xea02161d500cb9bc!2zMjTCsDEyJzAxLjMiTiA1NcKwMzknNDMuMiJF!5e0!3m2!1sen!2seg!4v1658072305927!5m2!1sen!2seg"
                        height="150" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #site-footer -->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                <p>{{ __('main.Copyright') }} © {{ date('Y') }} {{ __('main.Aghsan Group by') }} <a class="text-light" href="https://rwabett.com">{{ __('main.rwabett') }}</a>. {{ __('main.All Rights Reserved') }}.</p>
            </div>
        </div>
    </div>
</div>
