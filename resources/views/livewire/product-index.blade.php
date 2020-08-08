<div class="row">
    <div class="col-md-12">
    <input wire:model="search" type="text" class="form-control mb-3" placeholder="Find Something...">
    </div>
        @foreach($products as $product)
            <div class="col-md-3 mt-2">
            <div class="card">
                <div class="card-header">{{$product->name}}</div>
                <div class="card-body">{{$product->description}}</div>
                <div class="card-footer">
                    <button wire:click="addToCart({{$product->id}})"class="btn btn-success">Add To Cart</button>
                </div>
            </div>
            </div>
        @endforeach
        {{$products->links()}}
</div>