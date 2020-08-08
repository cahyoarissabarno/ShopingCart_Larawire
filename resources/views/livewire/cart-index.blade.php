<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Shoping Cart
            </div>
            <div class="cart-body">
                <ul class="list-group">
                    @forelse($cart['product'] as $product)
                        <li class="list-group-item">
                            <span>{{$product->name}} | Price : {{$product->price}}</span>
                            <div class="float-right">
                                <button wire:click="removeItem({{$product->id}})" class="btn btn-danger">Remove</button>
                            </div>
                        </li>
                    @empty
                    @endforelse
                </ul>
            </div>
            <div class="card-footer">   
            @if($cart['product'])
                <button wire:click="checkout" class="btn btn-success float-right">Checkout</button>
            @endif
            </div>
        </div>
    </div>
</div>