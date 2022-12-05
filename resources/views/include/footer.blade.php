
    <!-- s-extra
    ================================================== -->
    <section class="s-extra">

        <div class="row top">

            <div class="col-eight md-six tab-full popular">
                <h3>Popular Posts</h3>

                <div class="block-1-2 block-m-full popular__posts">

                    @foreach ($small as $a)
                        
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="{{ asset('frontend/images/' . $a->image) }}" alt="">
                        </a>
                        <h5><a href="{{ route('Articales.single', ['id'=>$a->id]) }}">{{$a->title}}</a></h5>
                        <section class="popular__meta">
                                <span class="popular__author"><span>By</span> <a href="#0"> {{$a->auther}}</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-19">{{$a->date}}</time></span>
                        </section>
                    </article>

                    @endforeach

                </div> <!-- end popular_posts -->
            </div> <!-- end popular -->
            
            <div class="col-four md-six tab-full about">
                <h3>About Philosophy</h3>

                <p>
                Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
                </p>

                <ul class="about__social">
                    <li>
                        <a href="https://www.facebook.com/amar.ebrahim.127"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/Amar_khalifa_11"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/amar.khalifa_11"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://github.com/Amarkhalifa11"><i class="fa fa-github" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/amarkhalifa11"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                </ul> <!-- end header__social -->
            </div> <!-- end about -->

        </div> <!-- end row -->

        <div class="row bottom tags-wrap">
            <div class="col-full tags">
                <h3>category</h3>

                <div class="tagcloud">
                    <a href="{{ route('category', ['category'=>'music']) }}">music</a>
                    <a href="{{ route('category', ['category'=>'health']) }}">health</a>
                    <a href="{{ route('category', ['category'=>'life style']) }}">life style</a>
                    <a href="{{ route('category', ['category'=>'photography']) }}">photography</a>
                    <a href="{{ route('category', ['category'=>'travel']) }}">travel</a>

                </div> <!-- end tagcloud -->
            </div> <!-- end tags -->
        </div> <!-- end tags-wrap -->

        <div class="row bottom tags-wrap">
            <div class="col-full tags">
                <h3>auther</h3>

                <div class="tagcloud">
                    <a href="{{ route('auther', ['auther'=>'amar']) }}">amar</a>
                    <a href="{{ route('auther', ['auther'=>'ali']) }}">ali</a>
                    <a href="{{ route('auther', ['auther'=>'khaled']) }}">khaled</a>
                    <a href="{{ route('auther', ['auther'=>'magdy']) }}">magdy</a>

                </div> <!-- end tagcloud -->
            </div> <!-- end tags -->
        </div> <!-- end tags-wrap -->

    </section> <!-- end s-extra -->


    <!-- s-footer
    ================================================== -->
    <footer class="s-footer">

        <div class="s-footer__main">
            <div class="row">
                
                <div class="col-two md-four mob-full s-footer__sitelinks">
                        
                    <h4>Quick Links</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('Articales') }}">Articales</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>

                </div> <!-- end s-footer__sitelinks -->

                <div class="col-two md-four mob-full s-footer__archives">
                        
                    <h4>Archives</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="#0">January 2018</a></li>
                        <li><a href="#0">December 2017</a></li>
                        <li><a href="#0">November 2017</a></li>
                        <li><a href="#0">October 2017</a></li>
                        <li><a href="#0">September 2017</a></li>
                        <li><a href="#0">August 2017</a></li>
                    </ul>

                </div> <!-- end s-footer__archives -->

                <div class="col-two md-four mob-full s-footer__social">
                        
                    <h4>Social</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="https://www.facebook.com/amar.ebrahim.127">Facebook</a></li>
                        <li><a href="https://www.instagram.com/amar.khalifa_11">Instagram</a></li>
                        <li><a href="https://twitter.com/Amar_khalifa_11">Twitter</a></li>
                        <li><a href="https://github.com/Amarkhalifa11">github</a></li>
                        <li><a href="https://www.linkedin.com/in/amarkhalifa11">LinkedIn</a></li>
                    </ul>

                </div> <!-- end s-footer__social -->

                <div class="col-five md-full end s-footer__subscribe">
                        
                    <h4>your review</h4>

                    <p>Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa consequatur occaecati.</p>


                    <form name="cForm" id="cForm" method="post" action="{{ route('ask') }}">
                        <fieldset>
                            @csrf
    
                            {{-- <div class="form-field">
                                <input name="name" type="text" id="name" class="full-width" placeholder="Your Name" value="">
                            </div> --}}
    
                            <div class="form-field">
                                <input name="email" type="text" id="email" class="full-width" placeholder="Your Email" value="">
                            </div>
    
    
                            <div class="message form-field">
                            <textarea name="ask" id="ask" class="full-width"  placeholder="Your Message" ></textarea>
                            </div>
    
                            <button type="submit" class="submit btn btn--primary full-width">Submit</button>
    
                        </fieldset>
                    </form> <!-- end form -->
                </div> <!-- end s-footer__subscribe -->

            </div>
        </div> <!-- end s-footer__main -->

        <div class="s-footer__bottom">
            <div class="row">
                <div class="col-full">
                    <div class="s-footer__copyright">
                        <span>© Copyright Philosophy 2022</span> 
                        <span>Site Template by eng Amar khalifa </a> Downloaded from <a href="https://themeslab.org/" target="_blank">Themeslab</a></span>
                    </div>

                    <div class="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"></a>
                    </div>
                </div>
            </div>
        </div> <!-- end s-footer__bottom -->

    </footer> <!-- end s-footer -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('frontend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>