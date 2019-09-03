<?php
session_start();
require_once "cabecalho.php";
require_once "menu.php"; ?>
<script type="text/javascript">document.querySelector("#inicio").classList.add("active");</script>
<div class="demo">
    <section class="section section-apresentacao">
        <div class="container">
            <h1 class="primeiro">Quem sou eu</h1>
            <p>Meu nome é Matheus Rocha, tenho 20 anos e estudo Banco de Dados na FATEC São José dos Campos. O começo da minha carreira foi no setor industrial, mas foi na área de tecnologia que me encontrei!</p>
            <p>Sou entusiasta das áreas de eletrônica, design e game dev. Sempre que consigo um tempo livre, estudo um pouco desses assuntos.</p>
        </div>
    </section>
    <section class="section section-experiencia">
        <div class="container">
            <h1>Experiência Profissional</h1>
            <h3>Menor Aprendiz</h3>
            <p>Durante os anos de 2014 e 2015, eu fui aprendiz na empresa <a href="http://www.globousinagem.com.br" class="target">Globo Usinagem <i>ltda</i></a>. Eu operava máquinas fresadoras CNC, organizava o ferramental e realizava a limpeza do setor.</p>
            <h3>Suporte Técnico (HelpDesk)</h3>
            <p>Por um breve período de tempo, atuei como suporte na <a href="https://tivit.com" class="target">TIVIT</a> de São José dos Campos. Minhas atividades consistiam em fornecer orientações aos colaboradores, abrir chamados e alimentar planilhas.</p>
        </div>
    </section>
    <section class="section section-projetos">
        <div class="container">
            <h1>Projetos Pessoais</h1>
            <p>Aqui estão alguns <a href="https://github.com/mrocha98" class="target">projetos pessoais</a> desenvolvidos ao longo da minha carreira.</p>
            <?php require_once "cards.php" ?>
        </div>
    </section>
<br>
</div>
<?php require_once "rodape.php"?>

