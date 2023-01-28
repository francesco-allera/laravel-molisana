<header>
    <div class="container">
        <div class="row top">
            <a href="">
                <img id="logo" src="https://www.lamolisana.it/wp-content/uploads/2021/04/bollino-la-molisana.svg" alt="">
            </a>
        </div>

        <div class="row btm">
            <div class="house">
                <i class="fa-solid fa-house-chimney"></i>
            </div>

            <div class="text">
                prodotti
            </div>

            @if (URL::current() !== 'http://127.0.0.1:8000')
                <div class="text">
            @else
                <div class="text selected">
            @endif
                    classiche
                </div>
        </div>
    </div>
</header>