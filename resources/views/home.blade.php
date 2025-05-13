@extends('layouts.main')

@section('content')

<section id="home" class="d-flex">
    @if (session('error'))
        <div class="error-message">{{ session('error') }}</div>
    @endif

    {{-- Carrossel de imagens --}}
    @include('partials.carousel', ['imagens' => $imagens])
</section>

<div class="line"></div>

<section class="promocao-header">
    <span class="promocao-header--title">PROMOÇÕES</span>
    <span>Produtos</span>
</section>

<div class="container-principal">
    @if(count($result) > 0)
        @foreach($result as $row)
            <div class='produto-container-principal'>
                <div class='produto-principal'>
                    <a href="{{ url('paginapd', $row->id) }}" aria-label="Ver detalhes do produto {{ $row->nome }}">
                        <img src="{{ asset('Produtos/uploads/' . $row->imagem) }}" alt="{{ $row->nome }}" class="img-fluid" onerror="this.onerror=null; this.src='/path/to/default/image.jpg';" />
                    </a>
                    <span>{{ $row->nome }}</span>
                    <span>R$ <span class='price'>{{ number_format($row->preco, 2, ',', '.') }}</span><br>
                    <span class='unit'>{{ $row->categoria }}</span>
                </div>
            </div>
        @endforeach
    @else
        <div class='produto-container-principal'><p>Nenhum produto encontrado.</p></div>
    @endif
</div>

@endsection
