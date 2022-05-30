<h1>Liste Notes</h1>

<div class="cards-view">
  <div class="card-single-view">
      <div class="filter-icon"><i class="fa fa-filter"></i> Filtre</div>
      <div class="fa-dropdown"><button><i class="fa fa-angle-down"></i></button></div>
  </div>

  <div class="add-plus">
    <button id="myBtn"><i class="fa fa-plus"></i></button>
  </div>
</div>

<table id="customers">
  <tr>
    <th>Designation</th>
    <th>Moyenne</th>
    <th>Type evaluation</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
</table>

<script>
  var modal = document.getElementById("modalAddNote");

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