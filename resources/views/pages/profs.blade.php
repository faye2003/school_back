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
    <th>#</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Email</th>
    <th>Telephone</th>
    <th>Adresse</th>
    <th>Sexe</th>
    <th>Discipline</th>
    <th>Actions</th>
  </tr>
  <tr ng-repeat="item in enseignants">
    <td>@{{item.id}}</td>
    <td>@{{item.nom}}</td>
    <td>@{{item.prenom}}</td>
    <td>@{{item.email}}</td>
    <td>@{{item.telephone}}</td>
    <td>@{{item.adresse}}</td>
    <td>@{{item.sexe}}</td>
    <td>@{{item.discipline}}</td>
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
          <button ng-click="removeProf(item)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" 
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
