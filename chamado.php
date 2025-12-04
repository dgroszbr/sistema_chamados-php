<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Criar Chamado - Mock</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/chamado.css" />
</head>
<body>
  <div style="display:flex;min-height:100vh;">
    <!-- Sidebar -->
  <div class="sidebar">
      <?php
  session_start();
  if(isset($_SESSION['id_usuario'])){
    $nome_usuarios = $_SESSION['nm_usuario'];
    echo "Olá ". $nome_usuarios;

  } else{
  echo  "<script>alert('você não esta logado'); window.history.back();</script>";
  }
  
?>
    <i class="bi bi-list menu-icon"></i>
    <i class="bi bi-person user-icon"></i>
    <a href="home.php"><i class="bi bi-house-door"></i> Home</a>
    <a href="chamado.php"><i class="bi bi-plus-lg"></i> Criar Chamado</a>
  </div>

    <!-- Main content with white margin area seen in image -->
    <main class="main-wrap">
      <section class="panel">
        <div class="title">＋ Criar Chamado</div>

        <form class="form-left" method="POST" action="php/cad_chamados.php">
          <!-- TIPO -->
          <div class="mb-big">
            <label class="custom-label" for="tipo">TIPO</label>
            <div class="select-wrap">
              <select id="tipo" name="tipo" class="field">

                <?php
                    include 'php/conexao.php';
                    $select = "SELECT * FROM tb_tipo";
                    $query = $conexao->query($select);
                    while ($resultado = $query->fetch_assoc()) { ?>
                    <option value="<?php echo $resultado['id_tipo']?>"> <?php echo $resultado['nm_tipo']?></option>
                  <?php }
                ?>

              </select>
            </div>
          </div>

          <!-- CATEGORIA -->
          <div class="mb-big">
            <label class="custom-label" for="categoria">CATEGORIA</label>
            <div class="select-wrap">
              <select id="categoria" name="categoria" class="field">

                <?php
                    include 'php/conexao.php';
                    $select = "SELECT * FROM tb_categoria";
                    $query = $conexao->query($select);
                    while ($resultado = $query->fetch_assoc()) { ?>
                    <option value="<?php echo $resultado['id_categoria']?>"> <?php echo $resultado['nm_categoria']?></option>
                  <?php }
                ?>
              </select>
            </div>
          </div>

          <!-- URGÊNCIA -->
          <div class="mb-big">
            <label class="custom-label" for="urgencia">URGENCIA</label>
            <div class="select-wrap">
              <select id="urgencia" name="urgencia" class="field">

                    <?php
                    include 'php/conexao.php';
                    $select = "SELECT * FROM tb_urgencia";
                    $query = $conexao->query($select);
                    while ($resultado = $query->fetch_assoc()) { ?>
                    <option value="<?php echo $resultado['id_urgencia']?>"> <?php echo $resultado['nm_urgencia']?></option>
                  <?php }
                    ?>
              </select>
            </div>
          </div>

          <!-- TITULO -->
          <div class="mb-big">
            <label class="custom-label" for="titulo">TITULO</label>
              <input id="titulo" name="titulo" type= "text" class="field" placeholder="Digite o título">
          </div>

          <!-- DESCRIÇÃO -->
          <div class="mb-verybig">
            <label class="custom-label" for="descricao">DESCRIÇÃO</label>
            <textarea id="descricao" name="descricao" class="field"></textarea>
          </div>

          <!-- Área dos botões -->
          <div style="display:flex; justify-content: space-between; align-items: center; margin-top: 20px;">
            <!-- Botão VOLTAR à esquerda -->
            <button class="btn-back" type="button" onclick="history.back()">VOLTAR</button>

            <!-- Botão CRIAR à direita -->
            <button class="btn-create" type="submit">CRIAR</button>
          </div>
        </form>
      </section>
    </main>
  </div>

  <!-- Bootstrap JS (opcional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
