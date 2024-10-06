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
        <form class="order-form">
            <div class="order-form__item">ピオーネ</div>
            <div class="order-form__quantity">
                <select class="order-form__quantity-select">
                    <option value="">房数</option>
                    <option value="1">1房</option>
                    <option value="2">2房</option>
                    <option value="3">3房</option>
                </select>
            </div>
            <div class="order-form__price">1000円</div>
            <div class="order-form__button">
                <button class="order-form__button-submit" type="submit">注文</button>
            </div>
        </form>
        <form class="order-form">
            <div class="order-form__item">シャインマスカット</div>
            <div class="order-form__quantity">
                <select class="order-form__quantity-select">
                    <option value="">房数</option>
                    <option value="1">1房</option>
                    <option value="2">2房</option>
                    <option value="3">3房</option>
                </select>
            </div>
            <div class="order-form__price">1000円</div>
            <div class="order-form__button">
                <button class="order-form__button-submit" type="submit">注文</button>
            </div>
        </form>
        <div class="order-form__heading">
            <h2>注文商品一覧</h2>
        </div>
        <div class="order-table">
            <table class="order-table__inner">
                <tr class="order-table__row">
                    <tn class="order-table__header">
                        <span class="order-table__header-span">商品名</span>
                        <span class="order-table__header-span">注文数</span>
                        <span class="order-table__header-span">金額</span>
                    </tn>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>