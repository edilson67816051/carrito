<form action="{{ route('session') }}" method="POST">
    @csrf
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="costo" value="85462">
    
    <button type="submit" id="checkout-live-button">Checkout</button>
</form>