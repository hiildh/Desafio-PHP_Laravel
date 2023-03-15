<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Seja bem vindo!</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        <style>
            .error {color: #a057db;}
            body {
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                font-size: 16px;
                align-content: center;
                height: 100vh;
                background: linear-gradient(0, #120c56, #000000);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
            }
        </style>
    </head>
    <body class="teste">
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            .teste{background-color: #6146da}
            h1{
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                text-align: center;
                color: azure;
            }
            ul{
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                text-align: center;
                text-decoration-color: #6af8f8;
                align-content: center;
                <div>
                    width: 350px;
                    heigth: 350px;
                    text-align: center;
                    
                </div>
                color: azure;
            }
            main {
                max-width: 580px;
                width: 90%;
                margin: 32px auto;

                display: flex;
                flex-direction: column;
                gap: 24px;

            }
            section{
                color: white;
                background-image: linear-gradient(90deg, #7f5de7 0%, #404adb 50.52%, #9c5893 100%);
                padding-top: 4px;
                border-radius: 10px;
            }
            section div{
                background-color: #1c1a20;
                padding: 32px;
                padding-top: 24px;
                border-radius: 8px;
            }
            section ul{
                flex-wrap: wrap;
                gap: 16px;
                margin-top: 24px;
            }
        </style>
        <main>
            <section>
                <div>
                    <h1>Vagas Disponíveis:</h1>
                    <ul>
                        @foreach($vagas as $vaga)
                        <ol>{{ $vaga->nome_vaga }} - {{ $vaga->requisitos }}</ol>
                        @endforeach
                    </ul>
                    {{-- <table>
                        <thead>
                            <tr>
                                <th>Título da vaga</th>
                                <th>Habilidades técnicas</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vagas as $vaga)
                                <tr>
                                    <td>{{$vaga->nome_vaga}}</td>
                                    <td>{{$vaga->requisitos}}</td>
                                    <td>
                                        <a href="{{ route('vagas.show', $vaga->id) }}">Ver detalhes</a>
                                        <form action="{{ route('vagas.destroy', $vaga->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody> --}}
                </div>
            </section>
            <section>
                <div>
                    <h1>Candidatos:</h1>
                    <ul>
                        @foreach($candidatos as $candidato)
                        <ol>{{ $candidato->nome }} - {{ $candidato->habilidades }}</ol>
                        @endforeach
                    </ul>
                </div>
            </section>
            <ul class="button">
                <button><a href="{{ route('candidatos.index') }}">Candidatos</a></button>
                <button><a href="{{ route('vagas.index') }}">Vagas</a></button>
                <style>
                    a {text-decoration: none;
                        color: #cbf0f0;}
                    button {
                    appearance: button;
                    background-color: #1899D6;
                    border: solid transparent;
                    border-radius: 16px;
                    border-width: 0 0 4px;
                    box-sizing: border-box;
                    color: #FFFFFF;
                    cursor: pointer;
                    display: inline-block;
                    font-size: 15px;
                    font-weight: 700;
                    letter-spacing: .8px;
                    line-height: 20px;
                    margin: 0;
                    outline: none;
                    overflow: visible;
                    padding: 13px 19px;
                    text-align: center;
                    text-transform: uppercase;
                    touch-action: manipulation;
                    transform: translateZ(0);
                    transition: filter .2s;
                    user-select: none;
                    -webkit-user-select: none;
                    vertical-align: middle;
                    white-space: nowrap;
                    }

                    button:after {
                    background-clip: padding-box;
                    background-color: #1CB0F6;
                    border: solid transparent;
                    border-radius: 16px;
                    border-width: 0 0 4px;
                    bottom: -4px;
                    content: "";
                    left: 0;
                    position: absolute;
                    right: 0;
                    top: 0;
                    z-index: -1;
                    }

                    button:main, button:focus {
                    user-select: auto;
                    }

                    button:hover:not(:disabled) {
                    filter: brightness(1.1);
                    }

                    button:disabled {
                    cursor: auto;
                    }

                    button:active:after {
                    border-width: 0 0 0px;
                    }

                    button:active {
                    padding-bottom: 10px;
                    }
                </style>
            </ul>
        </main>
        
    </body>
</html>
