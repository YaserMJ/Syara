<footer id="footer"><!--Footer-->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="companyinfo">
                        {{-- Syara info --}}
                        <h2><span style="font-size : 50px">Syara</span></h2>
                        <h2>Cars enjoyment made easy.</h2>
                    </div>
                </div>
                {{-- Picture design --}}
                <div class="col-sm-4">
                    <div class="address">
                        <img src="{{asset('frontEnd/images/home/car2.png')}}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Three static pages section (About,Contatc,Policies) --}}
    <div class="footer-widget">
        <div class="container">
            <div class="row" >
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2><a href="" style="color : white">About Us</a></h2> 
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2><a href="" style="color : white">Contact Us</a></h2>
                        
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2><a href="" style="color : white">Policies</a></h2>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget"></div>
                </div>
                {{-- newsfeed section --}}
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="single-widget">
                        <h2>Subscribe to Syara's newsfeed</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Your email address" style="color : black" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- rights reserved section --}}
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p style="color:white" class="pull-left"> Syara © 2020 . All rights reserved - Yaser Saleh</p>
            </div>
        </div>
    </div>
</footer>