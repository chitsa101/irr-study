<div class="container header d-none d-md-block">
    <header class="row justify-content-end">
        <a href="tel:+79526288555" class="usphone"><i class="fas fa-phone"></i>+7 (952) 628-85-55</a><br>
    </header>
</div>
{include file='leftcolumn.tpl'}

<div class="col-md-9 car_park container">
    <div class="row headline">
        <h1>Обратная связь</h1>
    </div>
    <div class="row cars  justify-content-around">
        <form action="../contactform/" method="POST" role="form" >
            <div class="form-group" >
                <label for="name"> Ваше имя</label>
                <input type="name" class="form-control" id="name" name="name" placeholder="Иван">
            </div>
            <div class="form-group">
                <label for="tel">Телефон</label>
                <input type="tel" name="tel" class="form-control" id="tel" data-mask="+7 000 000 00 00" placeholder=" 7xxxxxxxxxx">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="message">Сообщение</label>
                <textarea class="form-control" id="message" rows="3" name="message"></textarea>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck">
                <label class="form-check-label" for="exampleCheck">Check me out</label>
              </div>
            <button class="btn order check" type="submit" disabled="disabled">Отправить</button>
        </form>
    </div>
</div>

</div>
</div>
</div>