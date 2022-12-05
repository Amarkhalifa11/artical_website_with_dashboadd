@extends('frontend.admin')
@section('desc')


    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow">

        <div class="row">

            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    Feel Free To Contact Us.
                </h1>
            </div> <!-- end s-content__header -->


            <div class="col-full s-content__main">

                <p class="lead">Lorem ipsum Deserunt est dolore Ut Excepteur nulla occaecat magna occaecat Excepteur nisi esse veniam dolor consectetur minim qui nisi esse deserunt commodo ea enim ullamco non voluptate consectetur minim aliquip Ut incididunt amet ut cupidatat.</p>
                
                <p>Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.
                </p>

                <div class="row">
                    <div class="col-six tab-full">
                        <h3>Where to Find Us</h3>

                        <p>
                        1600 Amphitheatre Parkway<br>
                        Mountain View, CA<br>
                        94043 US
                        </p>

                    </div>

                    <div class="col-six tab-full">
                        <h3>Contact Info</h3>

                        <p>contact@philosophywebsite.com<br>
                        info@philosophywebsite.com <br>
                        Phone: (+1) 123 456
                        </p>

                    </div>
                </div> <!-- end row -->

                <h3>Say Hello.</h3>

                <form name="cForm" id="cForm" method="post" action="{{ route('ask') }}">
                    <fieldset>
                        @csrf

                        <div class="form-field">
                            <input name="name" type="text" id="name" class="full-width" placeholder="Your Name" value="">
                        </div>

                        <div class="form-field">
                            <input name="email" type="text" id="email" class="full-width" placeholder="Your Email" value="">
                        </div>


                        <div class="message form-field">
                        <textarea name="ask" id="ask" class="full-width" placeholder="Your Message" ></textarea>
                        </div>

                        <button type="submit" class="submit btn btn--primary full-width">Submit</button>

                    </fieldset>
                </form> <!-- end form -->


            </div> <!-- end s-content__main -->

        </div> <!-- end row -->

    </section> <!-- s-content -->


@endsection