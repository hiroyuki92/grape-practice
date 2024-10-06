<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/product.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <a class="header__logo" href="/products">
                    Products
                </a>
            </div>
        </div>
    </header>

    <div class="product-form__content">
        <div class="product-form__heading">
            <h2>商品登録</h2>
        </div>
        <form class="form">
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label">商品名</span>
                    <span class="form__label">数量</span>
                    <span class="form__label">金額</span>
                </div>
                <div class="form__group-content">
                    <div class="form__group-text">
                        <input type="text" name="name" value="{{ old('name') }}" />
                    </div>
                    <div class="form__group-text">
                        <input type="number" name="quantity" value="{{ old('quantity') }}">
                    </div>
                    <div class="form__group-text">
                        <input type="number" name="price" value="{{ old('price') }}" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>