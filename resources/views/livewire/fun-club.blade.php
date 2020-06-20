<div x-data="data()">
    <div class="row pb-1 mb-4 ">
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 mx-auto">
            <button class="btn btn-light">Корзина <i class="fas fa-shopping-cart"></i> (<span x-text="cart"></span>)</button>
        </div>
    </div>
    @php($chunkItems = 5)
    @forelse ($coaches->chunk($chunkItems) as $chunk)
        <div class="row pb-5 mb-4 ">
            @foreach($chunk as $coach)
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 mx-auto" @click="add()">
                    <!-- Card-->
                    <div class="card rounded shadow-sm border-0">
                        <div class="card-body p-4"><img
                                src="https://res.cloudinary.com/mhmd/image/upload/v1556485076/shoes-1_gthops.jpg"
                                alt=""
                                class="img-fluid d-block mx-auto mb-3">
                            <h5><a href="#" class="text-dark">Awesome product</a></h5>
                            <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur
                                adipisicing
                                elit.</p>
                            <ul class="list-inline small">
                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @empty

    @endforelse

</div>
<script>
    function data() {
        return {
            cart: 0,
            add() { this.cart += 1 },

        }
    }
</script>
