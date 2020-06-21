<div x-data="getItems()" x-init="fetchItems()">
    <div x-show="!isLoading">
        <div class=" row pb-1 mb-4 ">
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 mx-auto">
                <button class="btn btn-light shadow" data-toggle="modal" data-target="#cartModalLong">Корзина <i
                        class="fas fa-shopping-cart"></i> (<span
                        x-text="getCountTotal()"></span>)
                </button>
                <div class="modal fade" id="cartModalLong" tabindex="-1" role="dialog"
                     aria-labelledby="cartModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="cartModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h4 x-show="curt.length === 0">ничего!!!</h4>
                                <template x-for="itemInCurt in curt" :key="itemInCurt.id">
                                    <div class="row">
                                        <div class="container">
                                            <div class="row">
                                                <h4 x-text="itemInCurt.name" class="col-10"></h4>
                                                <h4 x-text="itemInCurt.countInCart" class="col-2"></h4>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <button class="btn bg-custom-yellow" @click="sub(item.id)"><i
                                    class="far fa-minus-square"></i></button>
                            <button class="btn bg-custom-blue" @click="add(item.id)"><i class="far fa-plus-square"></i>
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
                this.count -= 1
            },
            getCountTotal() {
                return this.count
            },
            getItemPrice(id) {
                const currItem = this._getCurrentItem(id)
                if (!currItem) {
                    return "0.0 грн";
                }
                return currItem.price + "грн"
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
