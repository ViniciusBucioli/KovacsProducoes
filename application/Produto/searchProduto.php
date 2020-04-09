<div class="container mt-4">
    <form action="./controller/produto/ProdutoControllerListar.php" method="get">
        <div class="form-row">
            <div class="col">
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="search" class="form-control" name="word"/>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Pesquisar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col text-right mt-2 mb-2"><button class="btn btn-primary" type="button"><i class="fa fa-plus"></i></button></div>
        </div>
        <div class="form-row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Categoria</th>
                                <th>Preço</th>
                                <th>Descrição<br /></th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cell 1</td>
                                <td>Cell 2</td>
                                <td>Cell 3</td>
                                <td>Cell 4</td>
                                <td class="text-center">
                                    <div role="group" class="btn-group"><button class="btn btn-primary" type="button"><i class="fas fa-edit"></i></button><button class="btn btn-primary" type="button"><i class="fa fa-remove"></i></button></div>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" value="Editing cell" /></td>
                                <td><input type="text" class="form-control" /></td>
                                <td><input type="text" class="form-control" /></td>
                                <td><input type="text" class="form-control" /></td>
                                <td class="text-center">
                                    <div role="group" class="btn-group"><button class="btn btn-primary" type="button"><i class="fas fa-check"></i></button><button class="btn btn-primary" type="button"><i class="fa fa-remove"></i></button></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
</div>