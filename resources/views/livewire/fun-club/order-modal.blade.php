<div class="modal fade" id="cartModalLong" tabindex="-1" role="dialog"
     aria-labelledby="cartModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header p-1 pr-3 bg-primary">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-2 p-0">
                            <i class="fas fa-shopping-cart fa-3x"></i>
                        </div>
                        <div class="col-9 p-0 pl-1">
                            <h4 class="modal-title" id="modalLongTitle20">Заказ</h4>
                        </div>
                        <div class="col-1 p-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-body">
                <h4 x-show="curt.length === 0" class="mb-0 text-center">Hичего не заказано</h4>
                <template x-for="itemInCurt in curt" :key="itemInCurt.id">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <h4 x-text="itemInCurt.name" class="col-6 mb-0"></h4>
                                <h5 x-text="itemInCurt.countInCart" class="col-2 mb-0"></h5>
                                <h5 x-text="getItemSumInCart(itemInCurt.id)" class="col-2 mb-0"></h5>
                                <div @click="sub(itemInCurt.id)" class="col-1"><a href="#"><i
                                            class="text-danger far fa-minus-square"></i></a></div>
                                <div @click="add(itemInCurt.id)" class="col-1"><a href="#"><i
                                            class="text-info far fa-plus-square"></i></a></div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
            <div class="modal-footer m-0 p-0">
                <div class="container">
                    <div class="row">
                        <h4 class="col-6 mb-0">Итого к заказу:</h4>
                        <h4 x-text="getTotalOrderQuantity()" class="col-3 mb-0"></h4>
                        <h4 x-text="getTotalOrderSum()" class="col-3 mb-0"></h4>
                    </div>
                </div>
            </div>
            <div class="modal-footer m-0 p-0">
                <div class="container">
                    <div class="row">
                        <h5 class="col-5">Заполните телефон</h5>
                        <input id="phone" x-model="phone" x-on:keydown="$nextTick(() => { checkPhone() });"
                               x-bind:class="{ 'border border-danger': errors['phone'] }"
                               class="col-5"
                               type="text" placeholder="xxx-xxx-xxx-xx">
                        <span
                            x-show="errors['phone']"
                            class="col-2 text-center">
                            <i class="fas fa-exclamation-circle fa-2x text-danger"></i>
                        </span>
                        <template x-if="errors['phone']">
                            <div class="container">
                                <div class="row">
                                    <div class="text-danger col-12 text-center"
                                          x-text="errors['phone']"></div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                <button
                    @click="saveCurt()"
                    type="button"
                    class="btn btn-primary"
                    data-dismiss="modal"
                    :disabled="checkDisabling()"
                >
                    Отправить заказ
                </button>
            </div>
        </div>
    </div>
</div>
