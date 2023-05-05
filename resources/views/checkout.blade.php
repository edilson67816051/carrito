<form action="/session" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    
    <button type="submit" id="checkout-live-button">Checkout</button>
</form>

<form action="/stripe/charge" method="post">
    @csrf
    <div>
        <label for="nombre-titular">Nombre del titular de la tarjeta:</label>
        <input type="text" id="nombre-titular" name="nombre-titular">
    </div>
    <div>
        <label for="numero-tarjeta">Número de la tarjeta:</label>
        <input type="text" id="numero-tarjeta" name="numero-tarjeta">
    </div>
    <div>
        <label for="fecha-expiracion">Fecha de expiración:</label>
        <input type="text" id="fecha-expiracion" name="fecha-expiracion">
    </div>
    <div>
        <label for="cvv">Código de seguridad (CVV):</label>
        <input type="text" id="cvv" name="cvv">
    </div>
    <div>
        <label for="monto">Monto a cobrar:</label>
        <input type="text" id="monto" name="monto">
    </div>
    <button type="submit">Pagar</button>
</form>
