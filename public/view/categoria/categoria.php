<?php    
  require_once __DIR__.'../../includes/header.php';
  require_once __DIR__.'../../includes/footer.php';
?>  
<div class="container py-5">
  <div class="mb-4 d-flex flex-row justify-content-between">
    <h1>Categorias</h1>
    <div>
      <a href="/app/categoria/nova" class="btn btn-primary"><i class="bi bi-plus"></i>Nova categoria</a>
    </div>
  </div>

  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col-1 text-align-right">Actions</th>
      </tr>
    </thead>
    <tbody>
<!--</tbody>
  </table>
</div>
-->