<!-- 2章：ステータスコードを学べるアプリを作ってみよう -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>

    <header class='header'>
        <div class='header__inner"'>
            <a class='header__logo' href="/">
            Status Code Quiz
            </a>

        </div><!-- header_inner -->

    </header>
    
    <main>
        <div class="quiz__content">
            <div class="question">
<!-- 同じ文書内で、1つのクラス名を複数の要素に指定することができます。（1つのスタイルを複数の要素に適用させることができます） -->
                <p class="question__text">Q. 以下の内容に当てはまるステータスコードを選んでください</p>
                <p class="question__text">
                </p>
            </div><!-- question -->
        </div><!-- quiz__content  -->
<!-- フォームの作成 -->
<!-- データを送信できるように、<form>タグを利用。また、選択できるように、<input>タグの type 属性は、 radio としている-->
    <!-- action 属性で入力されたデータを処理する　今回は「 result.php」ファイル-->
        <form class="quiz-form" action="result.php" method="post">
            <input type="hidden" name="answer_code" value="">
            <div class="quiz-form__item">
                <div class="quiz-form__group">
                    <input class="quiz-form__radio" id="" type="radio" name="option" value="">
                    <label class="quiz-form__label" for="">
                    </label>
                </div>    <!-- quiz-form__group -->
            </div><!-- "quiz-form__item -->
            <div class="quiz-form__button">
                <button class="quiz-form__button-submit" type="submit">
                回答
                </button>
            </div><!--  quiz-form__button-->  
        </form>   
    </main>
</body>

</html>