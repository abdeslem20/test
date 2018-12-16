<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="row">
  <div class="col-md-6">
    <h1> Kanbans </h1>
    </div>
  <div class="col-md-6">
    <a href="<?php echo URLROOT; ?>/kanbans/add" class="btn btn-primary pull-right"> 
      <i class="fa fa-pencil"></i> Ajouter Kanban
    </a>
</div>
</div>

<form id="KanbanForm" action="create" method="post" >
<div class="container"> 
<div class="row">
  <div class="col-4">
<label for="KanbanText">Nom de Kanban</label>
</div>
<div class="col-8">
<input class="form-control" type="text" value="" id="KanbanText">
</div>
</div>
<div class="row">
  <div class="col-4">
  <label for="KanbanNb" >Nombre des Colonnes</label>
  </div>
  <div class="col-8">
<input class="form-control" type="number" value="" id="KanbanNb">
  </div>
</div>

<table class="table table-bordered" id="item_table">
<tr>
  <th> Nom de Colonne</th>
  <th><button type="button" class="btn btn-success"> Ajouter </button></th>
</tr>
</table>

  <input type="submit" name="submit" class="btn" value="insert">

</div>
</form>










<?php require APPROOT . '/views/inc/footer.php'; ?>