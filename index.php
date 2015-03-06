<?php include_once 'header.php'; ?>

<div class="breadcrums-block clearfix">
    <div class="headerContainer">
        <div class="breadcrums-wrapper">
            <div class="category-icon pull-left"></div>
            <div class="pull-left">
                <div class="category-name">Отели</div>
                <div class="breadcrums">
                    <a href="/" class="breadcrums-link">Главная</a>
                    <span class="divider">/</span>
                    <a href="/" class="breadcrums-link">Отели</a>
                    <span class="divider">/</span>
                    <a href="javascript:void(0);" class="breadcrums-link">Фишка</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-small">
    <div class="address-wrapper clearfix">
        <div class="col-xs-12 col-sm-12 hotel-name-wrapper">
            <a href="#" class="hotel-name">Фишка</a>
        </div>
        <div class="col-xs-12 col-sm-12 hotel-address">
            Красногвардейская улица, дом 12, корп.3 (м. Дмитровская)
        </div>
        <div class="col-xs-12 col-sm-12 phone-wrapper">
            <a href="tel:+79264567890" class="hotel-phone">+7 926 456 78 90</a>
        </div>
        <div class="col-xs-12 col-sm-12 btn-booking-wrapper">
            <button type="button" class="btn-booking">Забронировать на час</button>
        </div>
    </div>
</div>

<div class="container-small">
    <!-- main slider carousel -->
    <div class="clearfix big-photo-wrapper" id="slider">
        <div class="" id="carousel-bounding-box">
            <div id="myCarousel" class="carousel slide">
                <!-- main slider carousel items -->
                <div class="carousel-inner">
                    <div class="active item" data-slide-number="0">
                        <img src="css/img/slider/photo1.png" class="img-responsive big-photo" alt="">
                    </div>
                    <div class="item" data-slide-number="1">
                        <img src="css/img/slider/photo2.png" class="img-responsive big-photo" alt="">
                    </div>
                    <div class="item" data-slide-number="2">
                        <img src="css/img/slider/photo3.png" class="img-responsive big-photo" alt="">
                    </div>
                    <div class="item" data-slide-number="3">
                        <img src="css/img/slider/photo4.png" class="img-responsive big-photo" alt="">
                    </div>
                    <div class="item" data-slide-number="4">
                        <img src="css/img/slider/photo5.png" class="img-responsive big-photo" alt="">
                    </div>
                </div>
                <!-- main slider carousel nav controls --> 
                <!-- Controls -->
                <!--                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                            </a>-->
            </div>
        </div>
    </div>
    <!--/main slider carousel-->
    <!-- thumb navigation carousel -->
    <div class="clearfix" id="slider-thumbs">
        <!-- thumb navigation carousel items -->
        <ul class="custom-slider-thumb">
            <li class="thumb-item"> 
                <a id="carousel-selector-0" class="thumb-item-link" href="javascript:void(0);" data-number="0">
                    <img src="css/img/slider/photo1.png" class="img-responsive thumb-img selected-thumb" alt="">
                </a>
            </li>
            <li class="thumb-item"> 
                <a id="carousel-selector-1" href="javascript:void(0);" data-number="1" class="thumb-item-link">
                    <img src="css/img/slider/photo2.png" class="img-responsive thumb-img" alt="">
                </a>
            </li>
            <li class="thumb-item"> 
                <a id="carousel-selector-2" href="javascript:void(0);" data-number="2" class="thumb-item-link">
                    <img src="css/img/slider/photo3.png" class="img-responsive thumb-img" alt="">
                </a>
            </li>
            <li class="thumb-item"> 
                <a id="carousel-selector-3" href="javascript:void(0);" data-number="3" class="thumb-item-link">
                    <img src="css/img/slider/photo4.png" class="img-responsive thumb-img" alt="">
                </a>
            </li>
            <li class="thumb-item"> 
                <a id="carousel-selector-4" href="javascript:void(0);" data-number="4" class="thumb-item-link">
                    <img src="css/img/slider/photo5.png" class="img-responsive thumb-img" alt="">
                </a>
            </li>
        </ul>

    </div>
</div>
<div class="container-small">
    <div class="hotel-description clearfix">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 margin-row">
            <div class="pull-left icon-description "></div>
            <div class="pull-left text-description ">Макс.чел: 3</div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 margin-row">
            <div class="pull-left icon-description room-amount"></div>
            <div class="pull-left text-description ">Кол-во номеров: 4</div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 margin-row">
            <div class="pull-left icon-description parking"></div>
            <div class="pull-left text-description ">Парковка: Есть</div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
            <div class="pull-left icon-description full-info"></div>
            <a href="#" class="pull-left text-description link-description">
                Подробнее об отеле
            </a>
        </div>
    </div>
</div>
<div class="container-small">
    <div class="rooms-wrapper clearfix">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-rooms-left">
            <div class="clearfix">
                <div class="medium-photo-wrapper pull-left">
                    <img src="css/img/slider/medium1.png" class="img-responsive medium-photo" alt=""/>
                </div>
                <!--/main slider carousel-->
                <!-- thumb navigation carousel -->
                <div class="pull-left medium-thumb-wrapper" >
                    <!-- thumb navigation carousel items -->
                    <ul class="vertical-slider-thumb">
                        <li class="thumb-item-medium"> 
                            <a href="javascript:void(0);" class="thumb-medium-link" data-toggle="modal"   data-target="#basicModal">
                                <img src="css/img/slider/small.png" class="img-responsive thumb-img-medium" alt="">
                                <span class="plus"></span>
                            </a>
                        </li>
                        <li class="thumb-item-medium"> 
                            <a href="javascript:void(0);" class="thumb-medium-link" data-toggle="modal"   data-target="#basicModal">
                                <img src="css/img/slider/small.png" class="img-responsive thumb-img-medium" alt="">
                                <span class="plus"></span>
                            </a>
                        </li>
                        <li class="thumb-item-medium"> 
                            <a href="javascript:void(0);" class="thumb-medium-link" data-toggle="modal"   data-target="#basicModal">
                                <img src="css/img/slider/small.png" class="img-responsive thumb-img-medium" alt="">
                                <span class="plus"></span>
                            </a>
                        </li>
                        <li class="thumb-item-medium"> 
                            <a href="javascript:void(0);" class="thumb-medium-link" data-toggle="modal"   data-target="#basicModal">
                                <img src="css/img/slider/small.png" class="img-responsive thumb-img-medium" alt="">
                                <span class="plus"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="room-description-header">
                Стандартный семейный улучшенный
            </div>
            <div class="room-description">
                <div class="row-price">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding">1 час</div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 no-padding room-price">500 рублей</div>
                </div>
                <div class="row-price">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding">3 часа</div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 no-padding room-price">1500 рублей</div>
                </div>
                <div class="row-price">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding">Ночь(23:00 - 9:00)</div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 no-padding room-price">2000 рублей</div>
                </div>
                <div class="row-price">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding">Сутки(24 часа)</div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 no-padding room-price">3000 рублей</div>
                </div>
                <div>
                    При почасовой оплате минимальный заказ 3 часа
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-rooms-right">
            <div class="clearfix">
                <div class="medium-photo-wrapper pull-left">
                    <img src="css/img/slider/medium1.png" class="img-responsive medium-photo" alt=""/>
                </div>
                <!--/main slider carousel-->
                <!-- thumb navigation carousel -->
                <div class="pull-left medium-thumb-wrapper" >
                    <!-- thumb navigation carousel items -->
                    <ul class="vertical-slider-thumb">
                        <li class="thumb-item-medium"> 
                            <a href="javascript:void(0);" class="thumb-medium-link" data-toggle="modal"   data-target="#basicModal">
                                <img src="css/img/slider/small.png" class="img-responsive thumb-img-medium" alt="">
                                <span class="plus"></span>
                            </a>
                        </li>
                        <li class="thumb-item-medium"> 
                            <a href="javascript:void(0);" class="thumb-medium-link" data-toggle="modal"   data-target="#basicModal">
                                <img src="css/img/slider/small.png" class="img-responsive thumb-img-medium" alt="">
                                <span class="plus"></span>
                            </a>
                        </li>
                        <li class="thumb-item-medium"> 
                            <a href="javascript:void(0);" class="thumb-medium-link" data-toggle="modal"   data-target="#basicModal">
                                <img src="css/img/slider/small.png" class="img-responsive thumb-img-medium" alt="">
                                <span class="plus"></span>
                            </a>
                        </li>
                        <li class="thumb-item-medium"> 
                            <a href="javascript:void(0);" class="thumb-medium-link" data-toggle="modal"   data-target="#basicModal">
                                <img src="css/img/slider/small.png" class="img-responsive thumb-img-medium" alt="">
                                <span class="plus"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="room-description-header">
                Стандартный семейный улучшенный
            </div>
            <div class="room-description">
                <div class="row-price">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6  no-padding">1 час</div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 no-padding room-price">500 рублей</div>
                </div>
                <div class="row-price">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding">3 часа</div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 no-padding room-price">1500 рублей</div>
                </div>
                <div class="row-price">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding">Ночь(23:00 - 9:00)</div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 no-padding room-price">2000 рублей</div>
                </div>
                <div class="row-price">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-padding">Сутки(24 часа)</div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 no-padding room-price">3000 рублей</div>
                </div>
                <div>
                    При почасовой оплате минимальный заказ 3 часа
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>

