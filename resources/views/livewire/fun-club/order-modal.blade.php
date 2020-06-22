<div class="modal fade" id="cartModalLong" tabindex="-1" role="dialog"
     aria-labelledby="cartModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cartModalLongTitle">ЗАКАЗ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4 x-show="curt.length === 0">ничего не заказано</h4>
                <template x-for="itemInCurt in curt" :key="itemInCurt.id">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <h4 x-text="itemInCurt.name" class="col-6"></h4>
                                <h5 x-text="itemInCurt.countInCart" class="col-2"></h5>
                                <h5 x-text="getItemSumInCart(itemInCurt.id)" class="col-2"></h5>
                                <div @click="sub(itemInCurt.id)" class="col-1"><a href="#"><i class="text-danger far fa-minus-square"></i></a></div>
                                <div @click="add(itemInCurt.id)" class="col-1"><a href="#"><i class="text-info far fa-plus-square"></i></a></div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
            <div class="modal-footer m-0 p-0">
                <div class="container">
                    <div class="row">
                        <h4 class="col-6">Итого к заказу:</h4>
                        <h4 x-text="getTotalOrderQuantity()" class="col-3"></h4>
                        <h4 x-text="getTotalOrderSum()" class="col-3"></h4>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                <button @click="saveCurt()" type="button" class="btn btn-primary" data-dismiss="modal">Отправить заказ</button>
            </div>
        </div>
    </div>
</div>
