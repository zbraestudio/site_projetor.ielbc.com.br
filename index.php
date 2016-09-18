<? include('inc.header.php'); ?>
<body>
<header>
  <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <h1>Painel de Projetor  IELBC</h1>
        <p>Painel para gerenciamento de avisos para culto.</p>
      </div>
    </div>
  </div>
</header>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h3>Avisos em vigência</h3>
      <p>Abaixo veja quais os avisos disponíveis:</p>

      <div class="row">

        <?

        $arquivos = scandir('laminas');

        foreach($arquivos as $arquivo) {

          if ($arquivo != '.' && $arquivo != '..') {

            $lamina = 'laminas/' . $arquivo;
            ?>
            <div class="col-xs-3 col-md-2">
              <a href="<?= $lamina; ?>" class="thumbnail fancybox lamina">
                <img src="<?= $lamina; ?>">
              </a>
              <input type="checkbox" class="laminas_select" value="<?= $lamina; ?>">
            </div>
            <?
          }
        }
        ?>
      </div>

    </div>
  </div>
  <div class="row">
    <button type="button" id="projetor" class="btn btn-primary btn-md">
      <span class="glyphicon glyphicon glyphicon-facetime-video" aria-hidden="true"></span> Tela de Exibição
    </button>
  </div>

  <div class="row">
    <p>Após clicar no botão acima, uma nova janela será aberta. Assim que estiver aberta, arraste-a até o segundo monitor e clica F11 em seu teclado.</p>
  </div>



</div>

</body>
</html>
