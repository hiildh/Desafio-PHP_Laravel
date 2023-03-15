@foreach ($vagas as $vaga)
    <div>{{ $vaga->titulo }}</div>
    <h2>{{ $vaga->titulo }}</h2>
    <ul>
        @foreach ($vaga->candidatos as $candidato)
            @if (count(array_intersect($candidato->habilidades, $vaga->habilidades)) >= 3)
        <li>{{ $candidato->nome }}</li>
        @endforeach
    </ul>
@endforeach