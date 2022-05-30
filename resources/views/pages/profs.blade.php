<div>
<h1 style="margin-top: 1rem">Liste Professeurs</h1>

<div class="cards-view">
  <div class="card-single-view">
      <div class="filter-icon"><i class="fa fa-filter"></i> Filtre</div>
      <div class="fa-dropdown"><button><i class="fa fa-angle-down"></i></button></div>
  </div>

  <div class="add-plus">
    <button id="btnAddProfs"><i class="fa fa-plus"></i></button>
  </div>
</div>

<table id="customers">
  <tr>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Sexe</th>
    <th>Adresse</th>
    <th>Disciplines</th>
    <th>Telephone</th>
    <th>Email</th>
    <th>Classe</th>
  </tr>
  <tr ng-repeat="item in enseignants">
    <td>@{{item.nom}}</td>
    <td>@{{item.prenom}}</td>
    <td>@{{item.sexe}}</td>
    <td>@{{item.adresse}}</td>
    <td>@{{item.discipline}}</td>
    <td>@{{item.telephone}}</td>
    <td>@{{item.email}}</td>
  </tr>
</table>
</div>
<script>
  console.log('iiyo');
  var modal = document.getElementById("modalAddProfs");

  var btn = document.getElementById("btnAddProfs");
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
