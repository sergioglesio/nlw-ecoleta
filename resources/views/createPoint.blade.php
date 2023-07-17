@extends('layouts.app')

@section('content')
<div id="page-create-point">
    <header>
      <img src="{{ asset('assets/img/logo.svg') }}" alt="Logomarca Ecoleta">
      <a href="{{ route('ViewHome')}}"> <span></span> Voltar para a home </a>
    </header>

    <form>
      <h1>Cadastro do ponto de coleta</h1>
        <fieldset>
          <legend> <h2>Dados da entidade</h2> </legend>

          <div class="field">
            <label for="name">Nome da entidade</label> <!-- O for="name" referencia o name do input -->
            <input type="text" name="name" required>
          </div>

          <div class="field">
            <label for="adress">Endereço</label>
            <input type="text" name="adress" required>
          </div>

          <div class="field-group">
            <div name="number" class="field" id="number">
              <label for="number">Número</label>
              <input type="number" name="number" required>
            </div>

            <div class="field">
              <label for="complement">Complemento</label>
              <input type="text" name="complement">
            </div>
          </div>

          <div class="field-group">
            <div class="field">
              <label for="uf">Estado</label>
              <select name="uf" required>
                <option value="">Selecione o Estado</option>
              </select>
              <input type="hidden" name="state">
            </div>

            <div class="field">
              <label for="city">Cidade</label>
              <select name="city" disabled required>
                <option value="">Selecione a Cidade</option>
              </select>
            </div>
          </div>
        </fieldset>

      <fieldset>
        <legend>
          <h2>Itens de coleta</h2>
        </legend>

        <div class="items-grid">
          <li data-id="1">
            <img src="{{ asset('assets/img/lampadas.svg') }}" alt="Lâmpadas">
            <span>Lâmpadas</span>
          </li>

          <li data-id="2">
            <img src="{{ asset('assets/img/baterias.svg') }}" alt="Pilhas e Baterias">
            <span>Pilhas e Baterias</span>
          </li>

          <li data-id="3">
            <img src="{{ asset('assets/img/papeis-papelao.svg') }}" alt="Papéis e Papelão">
            <span>Papéis e Papelão</span>
          </li>

          <li data-id="4">
            <img src="{{ asset('assets/img/eletronicos.svg') }}" alt="Resíduos Eletrônicos">
            <span>Resíduos Eletrônicos</span>
          </li>

          <li data-id="5">
            <img src="{{ asset('assets/img/organicos.svg') }}" alt="Resíduos Orgânicos">
            <span>Resíduos Orgânicos</span>
          </li>

          <li data-id="6">
            <img src="{{ asset('assets/img/oleo.svg') }}" alt="Óleo de Cozinha">
            <span>Óleo de Cozinha</span>
          </li>

        </div>

        <input type="hidden" name="items">
    </fieldset>

      <button type="submit">Cadastrar ponto de coleta</button>

    </form>

  </div>
@endsection