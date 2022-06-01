<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">
      Alunos
      <a href="view/cadastrar_alunos.html" style="text-decoration: none; color: white;" class="btn btn-success">Cadastrar Alunos</a>
    </h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
      </div>
      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar" class="align-text-bottom"></span>
        This week
      </button>
    </div>
  </div>
  
  <div class="table-responsive">

    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">CPF</th>
          <th scope="col">UF</th>
          <th scope="col">Senha</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($alunos as $aluno) { ?>
          <tr>
            <td><?php echo $aluno["nome"]; ?></td>
            <td><?php echo $aluno["cpf"]; ?></td>
            <td><?php echo $aluno["uf"]; ?></td>
            <td><?php echo $aluno["senha"]; ?></td>
            <td><?php echo $aluno["email"]; ?></td>
          </tr>
        <?php  } ?>
      </tbody>
    </table>
  </div>
</main>