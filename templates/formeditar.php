        <div class="container">
            <H1>Editar producto</H1>
            <br>
            <form method="post" action="http://example.com/editar_producto.php?id=<?=$id['id']?>">
              <div class="mb-3">
                <label class="form-label"><b>Nombre</b></label>
                <input name="nombre" class="form-control form-control-lg" type="text" value="<?=$id['nombre']?>" placeholder="Ingresa el nombre del producto" aria-label=".form-control-lg example">
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Precio</b></label>
                <input name="precio" class="form-control form-control-lg" step="0.01" type="number" value="<?=$id['precio']?>" placeholder="Ingresa el precio del producto" aria-label=".form-control-lg example">
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Marca</b></label>
                <input name="marca" class="form-control form-control-lg" type="text" value="<?=$id['marca']?>" placeholder="Ingresa la marca del producto" aria-label=".form-control-lg example">
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Material</b></label>
                <input name="material" class="form-control form-control-lg" type="text" value="<?=$id['material']?>" placeholder="Ingresa el material del producto" aria-label=".form-control-lg example">
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Stock</b></label>
                <input name="stock" class="form-control form-control-lg" type="number" value="<?=$id['stock']?>" placeholder="Ingresa la cantidad de producto en existencia" aria-label=".form-control-lg example">
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Imagen</b></label>
                <input name="imagen" class="form-control form-control-lg" type="text" value="<?=$id['imagen']?>" placeholder="Ingresa el URL de una imagen del producto" aria-label=".form-control-lg example">
              </div>
              <button type="submit" class="btn btn-primary">Actualizar</button>
              <a href="http://example.com/" class="btn btn-dark">Cancelar</a>  
            </form>
        </div>
    <br>
    </body>
</html>