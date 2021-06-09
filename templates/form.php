        <div class="container">
            <H1>Crear producto</H1>
            <br>
            <form method="post" action="http://example.com/crear_producto.php">
              <div class="mb-3">
                <label class="form-label"><b>Nombre</b></label>
                <input name="nombre" class="form-control form-control-lg" type="text" placeholder="Ingresa el nombre del producto" aria-label=".form-control-lg example">
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Precio</b></label>
                <input name="precio" class="form-control form-control-lg" type="number" placeholder="Ingresa el precio del producto" aria-label=".form-control-lg example">
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Marca</b></label>
                <input name="marca" class="form-control form-control-lg" type="text" placeholder="Ingresa la marca del producto" aria-label=".form-control-lg example">
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Material</b></label>
                <input name="material" class="form-control form-control-lg" type="text" placeholder="Ingresa el material del producto" aria-label=".form-control-lg example">
              </div>
              <div class="mb-3">
                <label class="form-label"><b>Stock</b></label>
                <input name="stock" class="form-control form-control-lg" type="number" placeholder="Ingresa la cantidad de producto en existencia" aria-label=".form-control-lg example">
              </div>
              <div class="mb-3">
                  <label class="form-label"><b>Imagen</b></label>
                <input name="imagen" class="form-control form-control-lg" type="text" placeholder="Ingresa el URL de una imagen del producto" aria-label=".form-control-lg example">
              </div>
              <button type="submit" class="btn btn-primary">Subir</button>
              <a href="http://example.com/" class="btn btn-dark">Cancelar</a>   
            </form>
        </div>
        <br>
    </body>
</html>