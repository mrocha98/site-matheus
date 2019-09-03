<?php
@session_start();
require_once "cabecalhoComBulma.php";
require_once "menu.php"; ?>
<script type="text/javascript">
    document.querySelector("#contato").classList.add("active");
    document.title = "Contato";
</script>
    <section class="hero">
        <div class="hero-body">
            <div class="container has-text-centered">
                <section class="section section-mensagem">
                    <div class="container">
                        <form action="enviaMensagem.php" method="POST">
                            <h1 class="title is-1">Contato</h1>
                            <h2 class="subtitle">Deixe aqui sua mensagem!</h2>
                            <?php if(isset($_SESSION['mensagem-enviada'])): ?>
                                <article class="message is-success">
                                    <div class="message-header">
                                        <p>Mensagem enviada com sucesso, obrigado pelo contato!</p>
                                    </div>
                                </article>
                            <?php endif; unset($_SESSION['mensagem-enviada']); ?>
                            <div class="control">
                                <label class="radio">
                                    <input type="radio" name="tipo" value="elogio">
                                    Elogio
                                </label>
                                <label class="radio">
                                    <input type="radio" name="tipo" value="duvida">
                                    Dúvida
                                </label>
                                <label class="radio">
                                    <input type="radio" name="tipo" value="sugestao" checked>
                                    Sugestão
                                </label>
                            </div>
                            <div class="control">
                                <textarea class="textarea" name="texto" placeholder="Digite aqui sua mensagem" rows="10" autofocus=""></textarea>
                            </div>
                            <br>
                            <button type="submit" class="button is-block is-link is-outlined">Enviar</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </section>
<?php require_once "rodape.php";?>