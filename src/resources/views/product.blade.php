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

    <div class="product__alert">
        @if(session('message'))
        <div class="product__alert--success">
            {{ session('message')}}
        </div>
        @endif

        @if($errors->any())
        <div class="product__alert--danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>

    <div class="product-form__content">
        <div class="product-form__heading">
            <h2>商品登録</h2>
        </div>
        <form class="form" action="/products" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label">商品名</span>
                    <span class="form__label">数量</span>
                    <span class="form__label">金額</span>
                    <span class="form__label">商品画像</span>
                </div>
                <div class="form__group-content">
                    <div class="form__group-text">
                        <input class="form__group-text_input" type="text" name="name" value="{{ old('name') }}" />
                    </div>
                    <div class="form__group-text">
                        <input class="form__group-text_input"type="number" name="quantity" value="{{ old('quantity') }}">
                    </div>
                    <div class="form__group-text">
                        <input class="form__group-text_input"type="number" name="price" value="{{ old('price') }}" />
                    </div>
                    <div class="form__group-image">
                        <input class="form__group-image_input"type="file" name="image" accept="image/*" value="{{ old('image') }}" />
                    </div>
                </div>
                <div class="form__group__registration-button">
                    <button class="form__group__registration-button-submit" type="submit">登録</button>
                </div>
            </div>
        </form>
        <div class="product-table">
            <table class="product-table__inner">
                <tr class="product-table__row-title">
                    <th class="product-table__header">登録商品一覧</th>
                </tr>
                @foreach ($products as $product)
                <tr class="product-table__row">
                    <td class="product-table__item">
                        <form class="update-form" action=/products/update method="post" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                            <div class="update-form__item">
                                <input class="update-form__item-input" type="text" name="name" value="{{ $product['name'] }}">
                                <input type="hidden" name='id' value="{{ $product['id']}} ">
                            </div>
                            <div class="update-form__quantity">
                                <input class="update-form__quantity-input type="number" name="quantity" value="{{ $product['quantity'] }}">
                                <input type="hidden" name='id' value="{{ $product['id']}} ">
                                <div class="update-form__quantity-unit">房</div>
                            </div>
                            <div class="update-form__price">
                                <input class="update-form__quantity-input type="number" name="price" value="{{ number_format($product['price']) }}">
                                <input type="hidden" name='id' value="{{ $product['id']}} ">
                                <div class="update-form__price-unit">円</div>
                            </div>
                            <div class="update-form__image">
                                <img src="{{ asset('storage/images/' . $product->img_path) }}" alt="{{ $product->name }}" width="200">
                            </div>
                            <div class="update-form__button">
                                <button class="update-form__button-submit" type="submit">更新</button>
                            </div>
                        </form>
                    </td>
                    <td class="product-table__item">
                        <form class="delete-form" action="/products/delete" method="POST">
                            @method('DELETE')
                            @csrf
                            <div class="delete-form__button">
                                <input type="hidden" name="id" value="{{$product['id']}}">
                                <button class="delete-form__button-submit" type="submit">削除</button>
                            </div>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>