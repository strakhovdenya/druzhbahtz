<div x-data="getItems()" x-init="fetchItems()">
    <div x-show="!isLoading">
        <div class=" row pb-1 mb-4 ">
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 mx-auto">
                <button class="btn btn-light shadow" data-toggle="modal" data-target="#cartModalLong">Корзина <i
                        class="fas fa-shopping-cart"></i> (<span
                        x-text="getCountTotal()"></span>)
                </button>
                @include('livewire.fun-club.order-modal')
            </div>
        </div>
        <div class="row pb-5 mb-4 ">
            <template x-for="item in funClubItems" :key="item.id">

                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 mx-auto">
                    <!-- Card-->
                    <div class="card rounded shadow-sm border-0 h-100">
                        <div class="card-body p-4">
                            <img
                                :src="item.image"
                                alt=""
                                class="img-fluid d-block mx-auto mb-3">
                            <h5 class="text-center"><span x-text="item.name"></span></h5>
                            <p class="small text-muted font-italic" x-text="item.description"></p>
                            <h5 class="text-center"><span x-text="getItemPrice(item.id)"></span></h5>
                            <button class="btn bg-custom-yellow" @click="sub(item.id)">
                                <i class="far fa-minus-square"></i>
                            </button>
                            <button class="btn bg-custom-blue" @click="add(item.id)">
                                <i class="far fa-plus-square"></i>
                            </button>

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
            add(id) {
                this.count += 1
                let currItem = this._getCurrentItem(id)
                if (currItem.hasOwnProperty('countInCart')) {
                    currItem.countInCart += 1
                    return;
                }
                currItem.countInCart = 1
                this.curt.push(currItem)
            },
            sub(id) {
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
            getCountTotal() {
                return this.count
            },
            getTotalOrderSum() {
                return this.curt.reduce(function (sum, item) {
                    return sum + item.countInCart * item.price;
                }, 0.0) + "грн"
            },
            getTotalOrderQuantity() {
                return this.curt.reduce(function (quan, item) {
                    return quan + item.countInCart;
                }, 0) + "шт"
            },
            getItemSumInCart(id) {
                const currItem = this._getCurrentItemInCart(id)
                return currItem.price * currItem.countInCart + "грн"
            },
            getItemPrice(id) {
                const currItem = this._getCurrentItem(id)
                if (!currItem) {
                    return "0.0 грн";
                }
                return currItem.price + "грн"
            },
            _getCurrentItemInCart(id) {
                return this.curt.find(function (item) {
                    if (item.id === id) {
                        return true;
                    }
                });
            },
            _getCurrentItem(id) {
                return this.funClubItems.find(function (item) {
                    if (item.id === id) {
                        return true;
                    }
                });
            },
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

        }

    }
</script>
