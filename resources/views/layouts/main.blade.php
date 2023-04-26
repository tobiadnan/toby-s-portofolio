<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>Toby's Web Portofolio</title>

    @include('utils.style')
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    @include('layouts.navbar')
    @include('layouts.header')
    @include('contents.sections.about')
    @include('contents.sections.service')
    @include('contents.sections.portfolio')
    {{-- @include('contents.sections.pricing') --}}
    

    <!-- section -->
    <section class="section-sm bg-primary">
        <!-- container -->
        <div class="container text-center text-sm-left">
            <!-- row -->
            <div class="row align-items-center">
                <div class="col-sm offset-md-1 mb-4 mb-md-0">
                    <h6 class="title text-light">Want to work with me?</h6>
                    <p class="m-0 text-light">Always feel Free to Contact & Hire me</p>
                </div>
                <div class="col-sm offset-sm-2 offset-md-3">
                    <button class="btn btn-lg my-font btn-light rounded">Hire Me</button>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of section -->

    @include('contents.sections.testimoni')
    @include('contents.sections.blog')
    @include('contents.sections.contact')
    @include('layouts.footer')
    @include('utils.scripts')

</body>
</html>
