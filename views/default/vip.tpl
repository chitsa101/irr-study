<div class="container header d-none d-md-block">
    <header class="row justify-content-end">
        <a href="tel:+73952624515" class="usphone"><i class="fas fa-phone"></i> +7 (3952) 624-515</a><br>
    </header>
</div>
{include file='leftcolumn.tpl'}

{foreach $rsCars as $item}
<div class="modal fade" id="example{$item['id']}">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body container w-100">
                <div id="carouselExample{$item['id']}Controls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/cars/{$item['main_image']}" alt="{$item['name']}" class="d-block w-100 product_modal">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/cars/{$item['image_1']}" alt="{$item['name']}" class="d-block w-100 product_modal">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/cars/{$item['image_2']}" alt="{$item['name']}" class="d-block w-100 product_modal">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample{$item['id']}Controls" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample{$item['id']}Controls" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
{/foreach}

<div class="col-md-9 car_park container">
    <div class="row headline">
        <h1>VIP автомобили</h1>
    </div>
    {foreach $rsCars as $item}
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter{$item['id']}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5> Напишите нам или позвоните по номеру: <br> 
                        <a href="tel:+73952624515" class="usphone "><i class="fas fa-phone"></i>
                             +7 (3952) 624-515
                        </a>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/menu/vipform/" method="POST" role="form">
                        <h3>{$item['name']}</h3>
                        <div class="form-group">
                            <input type="hidden" name="car" class="form-control" id="car" value="{$item['name']}">
                        </div>
                        <div class="form-group">
                            <label for="name"> Ваше имя</label>
                            <input type="name" class="form-control" id="name" name="name" placeholder="Иван" required>
                        </div>
                        <div class="form-group">
                            <label for="tel">Телефон</label>
                            <input type="tel" name="tel" class="form-control" id="tel" data-mask="" placeholder=" 7xxxxxxxxxx">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="message">Сообщение</label>
                            <textarea class="form-control" id="message" rows="3" name="message"></textarea>
                        </div>
                        <button class="btn order" type="submit">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {/foreach}
    {foreach $rsCars as $item}
    <div class="row cars  justify-content-around">
        <div class="col-md-3 img">
            <img src="/img/cars/{$item['main_image']}" alt="{$item['name']}" class="image pictures btn" data-toggle="modal"
                data-target="#example{$item['id']}">
        </div>
        <div class="col-md-7 col-lg-8 col-xl-9">
            <h3>{$item['name']}</h3>
            <p class="car_info">{$item['description']}</p>
            <p class="car_info">{$item['price']}</p>
            <button class="btn order" type="button" data-toggle="modal" data-target="#exampleModalCenter{$item['id']}">Заказать</button>
        </div>
    </div>
    {/foreach}
</div>

</div>
</div>
</div>