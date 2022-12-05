@include('include.header')

<div class="pageheader-content row">
    <div class="col-full">
        
        @yield('silde')
        
    </div> <!-- end col-full -->
</div> <!-- end pageheader-content row -->

</section> <!-- end s-pageheader -->


{{-- _______________________________________________________ --}}

@yield('desc')

<section class="s-content">

    <div class="row masonry-wrap">
        <div class="masonry">

            @yield('content')

        </div> <!-- end masonry -->
    </div> <!-- end masonry-wrap -->


</section> <!-- s-content -->


@include('include.footer')
