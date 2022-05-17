<div ng-controller="MyController">
<h1 style="margin-top: 1rem">Liste Eleves</h1>

<div class="cards-view">
  <div class="card-single-view">
      <div class="filter-icon"><i class="fa fa-filter"></i> Filtre</div>
      <div class="fa-dropdown"><button onclick="myFunctionFilter"><i class="fa fa-angle-down"></i></button></div>
  </div>

  <div class="add-plus">
    <button id="myBtn"><i class="fa fa-plus"></i></button>
  </div>
</div>

<div class="dropdown-filter" id="dropdown-filter">
  <div class="form-group">
    <label class="sr-only" for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label class="sr-only" for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
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
</div>
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

