        <center>
            <div class="card" style="width: 18rem;">
                <img src="<?= $y['imagen'] ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $y['nombre'] ?></h5>
                    <p class="card-text">Marca: <?= $y['marca']?></p>
                    <p class="card-text">Material: <?= $y['material']?></p>
                    <p class="card-text">En existencia: <?= $y['stock']?> unidades</p>
                    <p class="card-text">Costo: $<?= $y['precio']?></p>
                    <a href="#" class="btn btn-success">¡COMPRAR AHORA!</a>
                    <a type="button" class="btn btn-danger" href="http://example.com/borrar.php?id=<?=$y['id']?>">Eliminar</a>
                    <a href="http://example.com/" class="btn btn-dark">Regresar al menú</a>
                </div>
            </div>
        </center>
        <br>
    </body>
</html>