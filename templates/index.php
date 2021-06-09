        <?php
            if(count($herramienta) == 0){
        ?>

            <h1>No hay existencias...</h1>
        <?php
            }
        ?>
        <div class="container">
          <div class="row">
            <?php
                foreach($herramienta as $pan){
            ?>
            <div class="col-sm py-2">
                <div class="card py-2" style="width: 18rem;">
                  <img src="<?= $pan['imagen']?>" class="card-img-top" width="200" height="250">
                  <div class="card-body">
                    <h5 class="card-title"><?= $pan['nombre']?></h5>
                    <p class="card-text">Stock: <?= $pan['stock']?></p>
                    <center>
                    <a href="/producto.php?herramienta=<?=$pan['id']?>" class="btn btn-success">Info.</a>
                    <a type="button" class="btn btn-danger" href="http://example.com/borrar.php?id=<?=$pan['id']?>">Eliminar</a>
                    <a type="button" class="btn btn-warning" href="http://example.com/editar.php?id=<?=$pan['id']?>">Editar</a>
                    </center>
                  </div>
                </div>
            </div>
            <?php
                }
            ?>
          </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>    
    </body>
</html>