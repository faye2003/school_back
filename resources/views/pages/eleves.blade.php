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
          <input type="text" class="form-control" id="email" placeholder="Nom" name="nom">
        </div>
        <div class="col-sm-3">
          <input type="text" class="form-control" placeholder="Prenom" name="prenom">
        </div>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="telephone" placeholder="Telephone" name="telephone">
        </div>
        <div class="col-sm-3">
          <input type="text" class="form-control" placeholder="Classe" name="classe">
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
  </tr>
  <tr ng-repeat="item in eleves">
    <th>@{{item.id}}</th>
    <td>@{{item.nom}}</td>
    <td>@{{item.prenom}}</td>
    <td>@{{item.telephone}}</td>
    <td>@{{item.classe}}</td>
    <td>@{{item.age}}</td>
    <td>@{{item.sexe}}</td>
    <td>@{{item.moyenne}}</td>
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

