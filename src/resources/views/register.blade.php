<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>体重登録画面</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
    @livewireStyles
</head>
    <body>
        <header class="modal-header__title">
            <h1>Weight Logを追加</h1>
        </header>
        <main>
            <form class="modal-form" action="/" method="POST">
                <div class="modal-form__group">
                    <div class="modal-form__title">
                        <span class="modal-form__label">日付</span>
                        <span class="modal-form__required">必須</span>
                    </div>
                    <div class="modal-form__select">
                        <select class="modal-form__date" name="date">
                            <option></option>
                        </select>
        @livewireScripts
    </body>
</html>