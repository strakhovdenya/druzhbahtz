<div x-show="isLoading">
    <div class="row">
        <div class="d-flex justify-content-center">
            <div class="lds-dual-ring"></div>
        </div>
    </div>
</div>
<div x-show="!isLoading">
    <div class="row">
        <div class="tile_count" style="width: 100%">
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i>Кол-во игроков</span>
                <div class="count" x-text="getCountPlayers()"></div>
                <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-clock-o"></i> Всего событий</span>
                <div class="count" x-text="getCountEvents()"></div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Всего новостей</span>
                <div class="count" x-text="getCountNews()"></div>
                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i>Всего заказов</span>
                <div class="count" x-text="getCountOrders()"></div>
                <span class="count_bottom"><i class="red"><i
                            class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Всего наименований</span>
                <div class="count" x-text="getCountOrdersItem()"></div>
                <span class="count_bottom"><i class="green"><i
                            class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
        </div>
    </div>
</div>

