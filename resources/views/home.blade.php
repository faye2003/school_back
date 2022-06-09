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
      <form method="post" action="{{url('profs')}}">
      @csrf
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom">
        </div>
        <div class="col">
          <input type="text" class="form-control" id="prenom" placeholder="Prenom" name="prenom">
        </div>
      </div><br>
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" id="discipline" placeholder="Discipline" name="discipline">
        </div>
        <div class="col">
          <input type="email" class="form-control" id="email" placeholder="email" name="email">
        </div>
      </div><br>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" id="telephone" placeholder="Telephone" name="telephone">
          </div>
          <div class="col">
          <input type="text" class="form-control" placeholder="Adresse" name="adresse">
          </div>
        </div><br>
        <div class="row">
          <div class="col">
            <select type="text" class="form-control" placeholder="Sexe" name="sexe">
              <option value="default">Sexe</option>
              <option value="homme">Homme</option>
              <option value="femme">Femme</option>
            </select>
          </div>
        </div>
        <button type="submit" class="btn btn-success mt-3">Enregistrer</button>
      </form>
    </div>
  </div>

</div>

<!-- The modal to save evaluations -->
<div id="modalAddEvaluation" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
    <div class="container">
      <form method="post" action="{{url('evaluations')}}">
      @csrf
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" id="designation" placeholder="Designation" name="designation">
        </div>
        <div class="col">
          <input type="text" class="form-control" id="description" placeholder="Description" name="description">
        </div>
      </div><br>
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" id="surveillant" placeholder="Surveillant" name="surveillant">
        </div>
        <div class="col">
          <input type="time" class="form-control" id="duree" placeholder="Duree" name="duree">
        </div>
      </div><br>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" id="salle" placeholder="Salle" name="salle">
          </div>
        </div>
        <button type="submit" class="btn btn-success mt-3">Enregistrer</button>
      </form>
    </div>
  </div>

</div>

<!-- Modal to save cours -->
<div id="modalAddCour" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
    <div class="container">
      <form method="post" action="{{url('cours')}}">
        @csrf
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" id="designation" placeholder="Designation" name="designation">
          </div>
          <div class="col">
            <input type="text" class="form-control" id="description" placeholder="description" name="description">
          </div>
        </div><br>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" id="speciality" placeholder="Speciality" name="speciality">
          </div>
          <div class="col">
            <label for="video">Has Video</label>
            <input type="checkbox" id="video" placeholder="" name="has_video">
          </div>
        </div>
        <button type="submit" class="btn btn-success mt-3">Enregistrer</button>
      </form>
    </div>
  </div>

</div>

<!-- Modal to save discipline -->
<div id="modalAddDiscipline" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
    <div class="container">
      <form method="post" action="{{url('discipline')}}">
        @csrf
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" id="designation" placeholder="Designation" name="designation">
          </div>
          <div class="col">
            <input type="text" class="form-control" id="description" placeholder="description" name="description">
          </div>
        </div><br>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" id="sigle" placeholder="Sigle" name="sigle">
          </div>
          <div class="col">
            <input type="number" class="form-control" id="coef" placeholder="Coefficient" name="coef">
          </div>
        </div>
        <button type="submit" class="btn btn-success mt-3">Enregistrer</button>
      </form>
    </div>
  </div>

</div>

<!-- Modal to save Emploi -->
<div id="modalAddEmploi" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
    <div class="container">
      <form method="post" action="{{url('emploi')}}">
        @csrf
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" id="titre" placeholder="Titre" name="titre">
          </div>
          <div class="col">
            <input type="text" class="form-control" id="designation" placeholder="Designation" name="designation">
          </div>
        </div>
        <button type="submit" class="btn btn-success mt-3">Enregistrer</button>
      </form>
    </div>
  </div>

</div>

<!-- Modal to save Cycles -->
<div id="modalAddCycle" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="container">
      <form method="post" action="{{url('niveau')}}">
        @csrf
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" id="designation" placeholder="Designation" name="designation">
          </div>
          <div class="col">
            <input type="text" class="form-control" id="description" placeholder="Description" name="description">
          </div>
        </div>
        <button type="submit" class="btn btn-success mt-3">Enregistrer</button>
      </form>
    </div>
  </div>

</div>

<!-- Modal to save notes -->
<div id="modalAddNote" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
    <div class="container">
      <form method="post" action="{{url('notes')}}">
        @csrf
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" id="designation" placeholder="Designation" name="designation">
          </div>
          <div class="col">
            <input type="text" class="form-control" id="description" placeholder="Description" name="description">
          </div>
        </div>
        <button type="submit" class="btn btn-success mt-3">Enregistrer</button>
      </form>
    </div>
  </div>

</div>