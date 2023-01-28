@php
$footer = [
    'la nostra pasta' => [
        'Pasta Classica', 'Pasta Integrale', 'Pasta Biologica', 'Pasta Senza Glutine', 'Pasta Lunga', 'Pasta Corta', 'Pastina', 'Gnocchi', 'Spaghetti', 'Penne', 'Fusilli', 'Ziti', 'Ditali'
    ],
    'le nostre ricette' => [
        'Tutte le ricette', 'Ricette con Gnocchi', 'Ricette di pasta semplici e veloci', 'Ricette di pasta fredda', 'Ricette con Orecchiette', 'Ricette con Lasagne', 'Ricette con Tagliatelle', 'Ricette con Cannelloni', 'Ricette con Paccheri', 'Ricette con Spaghetti', 'Ricette di pasta estive'
    ],
    'il nostro blog' => [
        'Tutti gli articoli', 'Blog Cucina', 'Blog Nutrizione', 'Blog Info e notizie'
    ],
    'servizi' => [
        'E-commerce', 'B2B', 'Contatti', 'Lavora con noi', 'Certificazioni', 'Dati aziendali'
    ]
];
@endphp

<footer>
    <div class="container">
        <div class="row divider">
            <img src="https://www.lamolisana.it/wp-content/uploads/2021/04/bollino-la-molisana.svg" alt="">
        </div>

        <div class="row info">

            @foreach ($footer as $k1 => $v1)
                <div class="col">
                    <h4>{{ $k1 }}</h4>

                    <ul>
                        @foreach ($v1 as $v2)
                            <li>
                                <a href="">
                                    {{ $v2 }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach

        </div>
    </div>
</footer>