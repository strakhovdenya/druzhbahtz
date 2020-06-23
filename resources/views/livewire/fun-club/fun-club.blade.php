<div x-data="getItems()" x-init="fetchItems()">
    <div x-show="messages" x-text="messages" class="alert alert-info text-center" role="alert">
    </div>

    <div x-show="!isLoading">
        <div class=" row pb-1 mb-4 ">
            <div class="col-lg-12 col-md-6 mb-4 mb-lg-0 d-flex justify-content-end">
                <button class="btn btn-light shadow" data-toggle="modal" data-target="#cartModalLong">Корзина
                    <i class="fas fa-shopping-cart"></i>
                    <span x-show="getCountTotal() !== 0">
                        (<span x-text="getCountTotal()"></span>)
                    </span>
                </button>
                @include('livewire.fun-club.order-modal')
            </div>
        </div>
        <div class="row pb-5 mb-4 ">
            <template x-for="item in funClubItems" :key="item.id">

                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 mx-auto">
                    <!-- Card-->
                    <div class="card rounded shadow border-0 h-100">
                        <div class="card-body p-1 d-flex align-items-end flex-column">
                            <div class="h-auto d-inline-block">
                                <img
                                    :src="item.image"
                                    alt=""
                                    class="img-fluid d-block mx-auto mb-3">
                                <h5 class="text-center"><span x-text="item.name"></span></h5>
                                <p class="small text-muted font-italic text-center" x-text="item.description"></p>
                            </div>
                            <div class="w-100 h-auto d-inline-block mt-auto text-center d-flex justify-content-around">
                                <h6 class="text-center"><span x-text="getItemPrice(item.id)"></span></h6>
                                <button
                                    class="btn bg-danger btn-sm"
                                    @click="sub(item.id)"
                                    :disabled="isNotInCurt(item.id)"
                                >
                                    <i class="far fa-minus-square"></i>
                                </button>
                                <button class="btn bg-primary btn-sm" @click="add(item.id)">
                                    <i class="far fa-plus-square"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
    <div x-show="isLoading">
        <div class="d-flex justify-content-center">
            <div class="lds-dual-ring"></div>
        </div>
    </div>
</div>
<script>
    function getItems() {
        return {
            count: 0,
            funClubItems: [],
            curt: [],
            isLoading: false,
            messages: false,
            add(id) {
                this.messages = false
                this.count += 1
                let curtCurrItem = this._getCurrentItemInCart(id)
                if (curtCurrItem) {
                    curtCurrItem.countInCart += 1
                    return;
                }
                let currItem = this._getCurrentItem(id)
                let copyCurrItem = Object.assign({}, currItem);
                copyCurrItem.countInCart = 1
                this.curt.push(copyCurrItem)
            },
            sub(id) {
                this.messages = false
                let currItem = this._getCurrentItemInCart(id)
                if (currItem === undefined) {
                    return;
                }
                if (currItem.countInCart > 1) {
                    currItem.countInCart -= 1
                    this.count -= 1
                    return;
                }
                if (currItem.countInCart === 1) {
                    this.curt = this.curt.filter(function (elem) {
                        return elem.id !== currItem.id
                    })
                    this.count -= 1
                }
            },
            isNotInCurt(id) {
                const item = this._getCurrentItemInCart(id)
                return item === undefined
            },
            isEmptyCurt() {
                return this.curt.length === 0
            },
            getCountTotal() {
                return this.count
            }
            ,
            getTotalOrderSum() {
                return this.curt.reduce(function (sum, item) {
                    return sum + item.countInCart * item.price;
                }, 0.0) + "грн"
            }
            ,
            getTotalOrderQuantity() {
                return this.curt.reduce(function (quan, item) {
                    return quan + item.countInCart;
                }, 0) + "шт"
            }
            ,
            getItemSumInCart(id) {
                const currItem = this._getCurrentItemInCart(id)
                return currItem.price * currItem.countInCart + "грн"
            }
            ,
            getItemPrice(id) {
                const currItem = this._getCurrentItem(id)
                if (!currItem) {
                    return "0.0 грн";
                }
                return currItem.price + "грн"
            }
            ,
            _getCurrentItemInCart(id) {
                return this.curt.find(function (item) {
                    if (item.id === id) {
                        return true;
                    }
                });
            }
            ,
            _getCurrentItem(id) {
                return this.funClubItems.find(function (item) {
                    if (item.id === id) {
                        return true;
                    }
                });
            }
            ,
            fetchItems() {
                this.isLoading = true;
                fetch(`api/fun_club_items/all`)
                    .then(res => res.json())
                    .then(data => {
                        this.isLoading = false;

                        this.funClubItems = data.map(function (item) {
                            item.image = '/storage/images/fun_club_items/' + item.image;
                            return item;
                        });
                    });
            }
            ,
            saveCurt() {
                this.isLoading = true;
                fetch(`api/fun_club_items/save`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(this.curt)
                })
                    .then(res => res.json())
                    .then(data => {
                        this.isLoading = false;
                        this.messages = data.messages;
                        this.curt = []
                        this.count = 0
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                    });
            }

        }

    }
</script>
