  <?php
  require_once __DIR__ . '/view/header.php';

  if ($_GET) {
    $controller = isset($_GET['controller']) ? ((class_exists($_GET['controller'])) ? new $_GET['controller'] : NULL) : NULL;
    $method     = isset($_GET['method']) ? $_GET['method'] : NULL;
    if ($controller && $method) {
      if (method_exists($controller, $method)) {
        $parameters = $_GET;
        unset($parameters['controller']);
        unset($parameters['method']);
        call_user_func(array($controller, $method), $parameters);
      } else {
        echo "Método não encontrado!";
      }
    } else {
      echo "Controller não encontrado!";
    }
  }else{
    ?>
    <div class='container'>
      <div class='row mx-auto text-center'>
        <p class="text-center">Para acessar os registros ou criar novos, favor clicar no menu <span class="text-info">Listar</span> acima.</p>
      </div>
    </div>
    <?php
  }
  ?>  
  <footer class="footer mt-auto py-3">
    <div class="container">
      <p class="text-muted text-center">Desenvolvido por <a class="text-dark" href="mailto:web.bruno@gmail.com">Bruno Depieri Barduchi</a>.</p>
    </div>
  </footer>  
  <?php
  require_once __DIR__ . '/view/footer.php';
