<div class="col-md-4 col-sm-4 ">
    <div class="x_panel tile fixed_height_320">
        <div class="x_title">
            <h2>Комманды</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Settings 1</a>
                        <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <h4>Количество человек в коммандах</h4>
            <div x-show="isLoading">
                <div class="widget_summary">
                    <div class="d-flex justify-content-center">
                        <div class="lds-dual-ring"></div>
                    </div>
                </div>
            </div>
            <div x-show="!isLoading">
                <template x-for="(item, index) in teams" :key="index">

                    <div class="widget_summary">
                        <div class="w_left w_25">
                            <span x-text="item.name"></span>
                        </div>
                        <div class="w_center w_55">
                            <div class="progress">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60"
                                     aria-valuemin="0" aria-valuemax="100" x-bind:style="item.percentageStyle">
                                    <span x-text="item.percentage"></span>
                                </div>
                            </div>
                        </div>
                        <div class="w_right w_20">
                            <span x-text="item.count + ' ч.'">.</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </template>
            </div>
        </div>
    </div>
</div>
