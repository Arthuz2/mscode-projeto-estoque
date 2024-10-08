<div class="container py-5">
    <div class="mb-4">
        <div class="mb-4 d-flex flex-row justify-content-between">
            <h1>Produtos</h1>
            <div>
                <a href="/app/estoque/novo" class="btn btn-primary"><i class="bi bi-plus"></i>Novo produto</a>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Categoria Id</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Qtd. Disponível</th>
                    <th scope="col-2 text-align-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['produtos'] as $produto) { ?>
                    <tr>
                        <th scope='row'><?= $produto['id'] ?></th>
                        <td scope='row'><?= $produto['nome'] ?></td>
                        <td scope='row'><?= $produto['descricao'] ?></td>
                        <td scope='row'>
                            <?php foreach ($data['categorias'] as $categoria) :
                                if ($categoria['id'] === $produto['categoria_id']) {
                                    echo $categoria['nome'] . " - " . $produto['categoria_id'];
                                }
                            endforeach ?>
                        </td>
                        <td scope='row'><?= "R$ " . $produto['valor'] . ",00" ?></td>
                        <td scope='row'><?= $produto['quantidade_disponivel'] ?></td>
                        <td class="col-2 text-align-right">
                            <a href='/app/estoque/add?id=<?= $produto['id'] ?>' class="btn btn-primary btn-sm"><i class="bi bi-plus"></i></a>
                            <a href="/app/estoque/editar?id=<?= $produto['id']; ?>" class="btn btn-secondary btn-sm"><i class="bi bi-pencil"></i></a>
                            <a href="/app/estoque/excluir?id=<?= $produto['id']; ?>" class="btn btn-danger btn-sm"><i class="bi bi-x"></i></a>
                            <a href="/app/estoque/vender?id=<?= $produto['id'] ?>" class="btn btn-primary btn-sm">Vender</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>