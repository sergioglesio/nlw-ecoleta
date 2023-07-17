@extends('layouts.app')

@section('content')
  <div id="page-home">

    <div class="content">

      <header>

        <img src="{{ asset('assets/img/logo.svg') }}" alt="Logomarca Ecoleta">

        <a href="{{ route('ViewCreatePoint')}}">
          <span></span>
          Cadastre um ponto de coleta
        </a>

      </header>

      <main>

        <h1>Seu marketplace de coleta de resíduos</h1>

        <p>Ajudamos pessoas a encontrarem pontos de coleta de forma eficiente</p>

        <a href="#">
          <span></span>
          <strong>Pesquisar pontos de coleta</strong>
        </a>

      </main>

    </div>

  </div>

  <div id="modal" class="hide">
    <div class="content">
      <div class="header">
        <h1>Pontos de Coleta</h1>
        <a href="#">Fechar</a>
      </div>
      <form action="./search-results.html">
        <label for="search">Cidade</label>
        <div class="search field">
          <input type="text" name="search" placeholder="Busque a cidade">
          <button>
            <img src="{{ asset('assets/img/search.svg') }}" alt="Buscar">
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection