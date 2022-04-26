@include('layouts.app')

@section('content')

    @include('layouts.partials.navbar')
    @include('layouts.partials.menubar')

    <main ng-view>

    </main>

<!-- The Modal to save students-->
<div id="modalAddEleve" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
    <div class="container">
      <form method="post" action="{{url('eleves')}}">
      @csrf
      <div class="row">
          <div class="col">
            <input type="text" class="form-control" id="email" placeholder="Nom" name="nom">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Prenom" name="prenom">
          </div>
        </div><br>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" id="telephone" placeholder="Telephone" name="telephone">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Classe" name="classe">
          </div>
        </div><br>
        <div class="row">
          <div class="col">
            <input type="number" class="form-control" id="age" placeholder="Age" name="age">
          </div>
          <div class="col">
            <select type="text" class="form-control" placeholder="Sexe" name="sexe">
              <option value="default">Sexe</option>
              <option value="homme">Homme</option>
              <option value="femme">Femme</option>
            </select>
          </div>
        </div><br>
        <div class="row">
          <div class="col">
            <input type="number" class="form-control" id="moyenne" placeholder="Moyenne" name="moyenne">
          </div>
        </div>
        <button type="submit" class="btn btn-success mt-3">Enregistrer</button>
      </form>
    </div>
  </div>

</div>

<!-- The Modal to save professeurs-->
<div id="modalAddProfs" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
    <div class="container">
      <form method="post" action="{{url('professeurs')}}">
      @csrf
      <div class="row">
          <div class="col">
            <input type="text" class="form-control" id="email" placeholder="Nom" name="nom">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Prenom" name="prenom">
          </div>
        </div><br>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" id="telephone" placeholder="Telephone" name="telephone">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Classe" name="classe">
          </div>
        </div><br>
        <div class="row">
          <div class="col">
            <input type="number" class="form-control" id="age" placeholder="Age" name="age">
          </div>
          <div class="col">
            <select type="text" class="form-control" placeholder="Sexe" name="sexe">
              <option value="default">Sexe</option>
              <option value="homme">Homme</option>
              <option value="femme">Femme</option>
            </select>
          </div>
        </div><br>
        <div class="row">
          <div class="col">
            <input type="number" class="form-control" id="moyenne" placeholder="Moyenne" name="moyenne">
          </div>
        </div>
        <button type="submit" class="btn btn-success mt-3">Enregistrer</button>
      </form>
    </div>
  </div>

</div>