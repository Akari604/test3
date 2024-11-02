<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>トップページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
    <body>
        <header class="header">
            <div class="header__inner">
                <p class="header__logo">
                    PiGly
                </p>
                <div class="header__button">
                    <a class="goal-set__button" href="/wight_logs/goal_setting">
                        目標体重設定
                    </a>
                    <a class="logout__button" href="/logout">
                        ログアウト
                    </a>
                </div>
            </div>
        </header>

        <main>
            <div class="admin">
                <table class="admin-table__heading">
                    <tr class="admin-row__heading">
                        <th class="admin-label__header">目標体重</th>
                        <th class="admin-label__middle">目標まで</th>
                        <th class="admin-label__under">最新体重</th>
                    </tr>  
                </table>
                <div class="admin__inner">
                    <form class="search-form" action="/weight_logs/search" method="get">
                        <div class="search-form__date">
                            <select class="search-form__date-select" name="select" value="">
                                <option disabled selected>年/月/日</option>
                            </select>
                            <span>~</span>
                            <select class="search-form__date-select" name="select" value="">
                                <option disabled selected>年/月/日</option>
                            </select>
                            <div class="search-form__actions">
                                <input class="search-form__search-btn" type="submit" value="検索">
                            </div>
                            <div class="data-addition">
                                <a class="data-addition__btn" href="/weight_logs/create">
                                    データ追加
                                </a>
                            </div>
                        </div>
                    </form>
                    <table class="admin-table">
                        <tr class="admin-row">
                            <th class="admin__label">日付</th>
                            <th class="admin__label">体重</th>
                            <th class="admin__label">食事摂取カロリー</th>
                            <th class="admin__label">運動時間</th>
                        </tr>
                    </table>
    </body>
</html>