<!-- 2章：ステータスコードを学べるアプリを作ってみよう -->
<?php
// require_once 既に取り込まれたファイルは2回目以降は取り込まない（1度だけ取り込む） 
// index.php ファイルで、ランダムに取得を行うため require_once を利用して status_code.php ファイルの読み込み
require_once('config/status_codes.php');
// <?php array_rand('対象の配列', '要素数'); 指定した配列の中から要素を無作為に抜き出す関数
$random_numbers = array_rand($status_codes, 4);

foreach ($random_numbers as $index) {
$options[] = $status_codes[$index];
}
// 先程の配列 options の中から 1 つを正解として新しい配列 question に代入
$question = $options[mt_rand(0, 3)];
?>

<!DOCTYPE html>
<html lang="ja">
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
<!-- 、問題のステータスコードの説明文を表示させます。正解の配列の中からキーが description のものを表示させる -->
                <?php echo $question['description'] ?>
                </p>
            </div><!-- question -->
        
<!-- フォームの作成 -->
<!-- データを送信できるように、<form>タグを利用。また、選択できるように、<input>タグの type 属性は、 radio としている-->
    <!-- action 属性で入力されたデータを処理する　今回は「 result.php」ファイル-->
        <form class="quiz-form" action="result.php" method="post">
            <input type="hidden" name="answer_code" value="<?php echo $question['code'] ?>">
            <!-- ↑value=には解答となるデータを送信配列の中の code を通して答え合わせを行えるようにする-->
            <div class="quiz-form__item">
                <?php foreach ($options as $option): ?>
                <div class="quiz-form__group">
                    <!-- <input>タグの id 属性と label タグの for 属性に同じものを指定する -->
                    <input class="quiz-form__radio" id="<?php echo $option['code'] ?>
                    "type="radio" name="option" value="<?php echo $option['code'] ?>">
                    <label class="quiz-form__label" for="<?php echo $option['code'] ?>">
                    <?php echo $option['code'] ?>
                    </label>
                </div>    <!-- quiz-form__group -->
                <?php endforeach; ?>
            </div><!-- "quiz-form__item -->
            <div class="quiz-form__button">
                <button class="quiz-form__button-submit" type="submit">
                回答
                </button>
            </div><!--  quiz-form__button-->  
        </form> 
        </div><!-- quiz__content  -->            
    </main>
</body>

</html>

