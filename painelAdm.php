<?php
session_start();
include('verificaLogin.php');
require_once "cabecalhoComBulma.php";
require_once "menu.php";
?>
<script type="text/javascript">
    document.querySelector("#painel").classList.add("active");
    document.title = "Painel Administrativo";
</script>
    <a href="logout.php" class="button is-danger logout">Logout</a>
    <h1 class="title is-2">Bem vindo, <?php echo $_SESSION['usuario'];?>!</h1>
    <section class="hero">
        <div class="hero-body">
            <div class="container has-text-centered">
                <section class="section section-tabela">
                    <table class="table is-striped">
                        <thead>
                            <tr>
                                <th><strong>ID</strong></th>
                                <th><strong>Tipo</strong></th>
                                <th><strong>Mensagem</strong></th>
                        </thead>
                        <tbody>
                            <?php require_once "buscaMensagens.php"; ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </section>
<?php require_once "rodape.php"; ?>