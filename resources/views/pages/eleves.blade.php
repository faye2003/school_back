<h1 style="margin-top: 1rem">Liste Eleves</h1>

<div class="cards-view">
  <div class="card-single-view">
      <div class="filter-icon"><i class="fa fa-filter"></i> Filtre</div>
      <div class="fa-dropdown"><button ng-click="myFunctionFilter()" class="dropdownbtn"><i class="fa fa-angle-down"></i></button></div>
  </div>

  <div class="add-plus">
    <button id="myBtn"><i class="fa fa-plus"></i></button>
  </div>
</div>

<div class="dropdown-filter" id="dropdown-filter" ng-show="showFilter">
  <form method="post">
    @csrf
    <div class="row">
        <div class="col-sm-3">
          <input ng-model="query" type="text" class="form-control" id="email" placeholder="Nom" name="nom">
        </div>
        <div class="col-sm-3">
          <input ng-model="query" type="text" class="form-control" placeholder="Prenom" name="prenom">
        </div>
        <div class="col-sm-3">
          <input ng-model="query" type="text" class="form-control" id="telephone" placeholder="Telephone" name="telephone">
        </div>
        <div class="col-sm-3">
          <input ng-model="query" type="text" class="form-control" placeholder="Classe" name="classe">
        </div>
      </div><br>
      <div class="row">
        <div class="col-sm-4">
          <input type="number" class="form-control" id="age" placeholder="Age" name="age">
        </div>
        <div class="col-sm-4">
          <select type="text" class="form-control" placeholder="Sexe" name="sexe">
            <option value="default">Sexe</option>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
          </select>
        </div>
        <div class="col-sm-4">
          <input type="number" class="form-control" id="moyenne" placeholder="Moyenne" name="moyenne">
        </div>
      </div>
      <button type="submit" class="btn btn-success mt-3">Filtrer</button>
    </form>
</div>

<!-- <div class="cards-up">
  <div class="filter">
    <span class="fa fa-filter filter-icon">filter-icon</span>
    <span class="fa fa-dropdown-up dropdown">dropdown</span>
  </div>
  <div class="add-plus">
    <span class="fa fa-plus">fa-plus</span>
  </div>
</div> -->

<table id="customers">
  <tr>
    <th>#</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Telephone</th>
    <th>Classe</th>
    <th>Age</th>
    <th>Sexe</th>
    <th>Moyenne</th>
    <th>Actions</th>
  </tr>
  <tr ng-repeat="item in eleves | filter: query | orderBy: ''">
    <th>@{{item.id}}</th>
    <td>@{{item.nom}}</td>
    <td>@{{item.prenom}}</td>
    <td>@{{item.telephone}}</td>
    <td>@{{item.classe}}</td>
    <td>@{{item.age}}</td>
    <td>@{{item.sexe}}</td>
    <td>@{{item.moyenne}}</td>
    <td>
      <div class="actions">
        <div class="action-update">
          <button data-bs-toggle="modal" data-bs-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
            stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
          </svg></button>
        </div>
        <div class="action-delete">
          <button ng-click="removeEleve(item)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" 
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline>
            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
            <line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line>
          </svg></button>
        </div>
      </div>
    </td>
  </tr>
</table>

<script>
  console.log('iiyo');
  var modal = document.getElementById("modalAddEleve");

  var btn = document.getElementById("myBtn");
  var span = document.getElementsByClassName("close")[0];

  btn.onclick = function() {
      console.log('iciiii');
  modal.style.display = "block";
  }

  span.onclick = function() {
  modal.style.display = "none";
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    } 
  }

</script>

