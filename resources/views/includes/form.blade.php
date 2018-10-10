<div class="container-fluid bg-green-color">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="subscribe scrollme">
                        <div class="col-lg-6 col-lg-offset-5 col-md-6 col-md-offset-5 col-sm-12 col-xs-12">
                            <h4 class="subscribe-title">Join my Emailing list !</h4>
                            <form class="subscribe-form" method="post" action="/subscribe">
                                  @csrf 
                                <input class="email input-standard-grey input-white" name="email" placeholder="Your Email Address..." type="email">
                                <button class="subscr-btn" type="submit">subscribe
                                    <span class="semicircle--right"></span>
                                </button>
                            </form>
                            <div class="sub-title">Sign up for notifications when new articles,reviews and tutorials are released .</div>
    
                        </div>
    
                        <div class="images-block">
                            <img src="{{ asset('app/img/subscr-gear.png') }}" alt="gear" class="gear">
                            <img src="{{ asset('app/img/subscr1.png') }}" alt="mail" class="mail">
                            <img src="{{ asset('app/img/subscr-mailopen.png') }}" alt="mail" class="mail-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>