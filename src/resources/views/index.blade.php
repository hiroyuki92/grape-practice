<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grapeorder</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <a class="header__logo" href="/">
                    Grape order form
                </a>
            </div>
        </div>
    </header>

    <div class="order-form__content">
        <div class="order-form__heading">
            <h2>注文票</h2>
        </div>
        <div class="order-form">
        @foreach($products as $product)
            <div class="order-form__content-group">
                <div class="order-form__content-image">
                    <img src="{{ asset('storage/images/' . $product->img_path) }}" alt="{{ $product->name }}" width="200">
                </div>
                <div class="order-form__content-name">
                    <input class="order-form__item-input" type="text" name="name" value="{{ $product['name'] }}">
                </div>
                <div class="order-form__content-quantity">
                    <input class="order-form__quantity-input" type="number" name="quantity" value="{{ $product['quantity'] }}">房
                </div>
                <div class="order-form__content-price">
                    <input class="order-form__quantity-input type="number" name="price" value="{{ number_format($product['price']) }}">円
                </div>
                <div class="order-form__number">
                    数量
                    <select class="order-form__number-input">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="order-form__button">
                    <button class="order-form__button-submit">カートに入れる</button>
                </div>
            </div>

        @endforeach
        </div>
        <div class="paginate">
            {{ $products->links() }}
        </div>


</body>
</html>