    <div class="container py-5">
      <div class="mb-4">
        <h1>{{title}} produto</h1>
      </div>
      <div class="w-50 mt-2">
        <form action="/app/estoque/" method="post">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="{{nome}}">
          </div>
          <div class="mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <textarea class="form-control" id="descricao" name="descricao" style="resize:none;" rows="5" placeholder="{{descricao}}"></textarea>
          </div>
          <div class="row">
            <div class="mb-3 col-4">
              <label for="categoriaId" class="form-label">Categoria Id:</label>
              <input type="number" class="form-control" id="categoriaId" name="categoriaId" placeholder="{{categoriaId}}">
            </div>
            <div class="mb-3 col-4">
              <label for="quantidade" class="form-label">Quantidade:</label>
              <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="{{quantidade}}">
            </div>
            <div class="mb-3 col-4">
              <label for="valor" class="form-label">Valor:</label>
              <input type="text" class="form-control" id="valor" name="valor" placeholder="{{valor}}">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">{{submitButton}}</button>
        </form>
      </div>
    </div>