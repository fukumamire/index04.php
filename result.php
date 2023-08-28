<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
            Status Code Quiz
            </a>
        </div><!-- header__inner" -->

    </header>
    <main><!--  画像のように作成する部分を分割して作成　緑枠の部分を作成 -->
        <div class="result__content">
            <div class="result">
                <h2 class=>"result__text--correct">正解</h2>
                <h2 class="result__text--incorrect">不正解</h2>
            </div><!-- result -->
        
        <!-- 説明文の作成　表作成 -->
            <div class="answer-table">
                <table class="answer-table__inner">
                <!-- tr ：table row(行）) -->
                    <tr class="answer-table__row">
                        <!--th (table header)見出し  -->
                        <th class="answer-table__header">ステータスコード</th>
                        <td class="answer-table__text"></td>
                    </tr>

                    <tr class="answer-table__row">
                        <th class="answer-table__header">説明</th>
                        <td class="answer-table__text"></td>
                    </tr>
                </table>    
            </div>   <!-- answer-table -->
        </div><!-- result__content -->    
        </main>
</body>


</html>