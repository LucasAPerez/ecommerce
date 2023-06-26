<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrito de Compras</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Carrito de Compras</h1>
    
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Producto</th>
          <th>Precio</th>
          <th>Cantidad</th>
          <th>Subtotal</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Producto 1</td>
          <td>$10.00</td>
          <td>2</td>
          <td>$20.00</td>
        </tr>
        <tr>
          <td>Producto 2</td>
          <td>$15.00</td>
          <td>1</td>
          <td>$15.00</td>
        </tr>
        <tr>
          <td colspan="3" class="text-right">Total:</td>
          <td>$35.00</td>
        </tr>
      </tbody>
    </table>
    
    <div class="text-center">
      <a href="index.php" class="btn btn-primary">Continuar Comprando</a>
      <a href="#" class="btn btn-success">Pagar</a>
    </div>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
