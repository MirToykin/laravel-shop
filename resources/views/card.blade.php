<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <div class="labels">


    </div>
    <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg" alt="iPhone X 64GB">
    <div class="caption">
      <h3>{{$prod->name}}</h3>
      <p>{{$prod->price}}</p>
      <p>
      <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">
        <button type="submit" class="btn btn-primary" role="button">В корзину</button>
        <a href="http://internet-shop.tmweb.ru/mobiles/iphone_x_64"
           class="btn btn-default"
           role="button">Подробнее</a>
        @csrf
      </p>
    </div>
  </div>
</div>
