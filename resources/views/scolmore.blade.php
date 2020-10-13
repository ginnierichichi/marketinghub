@section('header')
    <nav id="scolnav" class="bg-header section py-4 shadow-lg bg-scolmore-100">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <a class="navbar-brand" href="https://www.scolmore.com/" target="_blank"><img src="{{ asset('/images/scolmorelogo.png') }}" width="200px" ></a>

            <!----------------- Right Side Of Navbar ------------------>
                <!--
    Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
    Read the documentation to get started: https://tailwindui.com/documentation
    -->
                @include('layouts.dropdown')
            </div>
        </div>
    </nav>
@endsection
