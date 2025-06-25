

@extends('index')
   @push('style')
   <title>Welcome page</title>
   @endpush
   @section(section:'main-content')

    <section id="one">
        <div class="one container">
            <div>
                <h1> Hello,My Name Is <span></span></h1>
                <h1>Siam Akter Mim<span></span></h1>
                <h1>Java Developer <span></span></h1>
                <a href="#" type="button" class="cta">Hire Me</a>
            </div>
        </div>
    </section>
    @endsection




