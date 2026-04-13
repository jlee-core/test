<!DOCTYPE html>
<html>

<head>
    <title>AttendanceSystem</title>
    <style>
        .header {
            background-color: #0000FF;
            color: #FFFFFF;
            text-align: center;
        }

        .note-text {
            color: rgb(53, 194, 53);
            font-size: 0.8em;
        }

        textarea[name="reason"],
        textarea[name="job_message"] {
            width: 99%;
            height: 100px;
        }

        .submit {
            text-align: center;
        }

        .center-table {
            margin: 0 auto;
        }
    </style>
    <!-- DatePickerにjQueryとjQuery UIの導入 -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.min.js"></script>
</head>

<body>
    <?php
    $categories = ["遅刻", "早退", "欠席", "慶弔", "その他", "就活"];
    $times = ["1限", "2限", "3限", "4限", "5限"];
    ?>
    <div class="header">
        <h3>【欠席・遅刻連絡】</h3>
    </div>
    <form action="result.php" method="POST">
        <table border="1" class="center-table">
            <tbody>
                <tr>
                    <th>区分</th>
                    <td>
                        <div class="category">
                            <?php foreach ($categories as $category): ?>
                                <input type="radio" name="category" value="<?php echo htmlspecialchars($category); ?>">
                                <?php echo $category; ?>
                            <?php endforeach; ?>
                            <p class="note-text">※慶弔は過去分も入力可能（年度内）</p>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th>日付</th>
                    <td>
                        <div>
                            <input type="text" id="date_start" name="date_start" value="<?php echo date("Y-m-d"); ?>">
                            <span>〜</span>
                            <input type="text" id="date_end" name="date_end" value="<?php echo date("Y-m-d"); ?>">

                        </div>
                    </td>
                </tr>

                <tr>
                    <th>時限</th>
                    <td>
                        <div>
                            <?php foreach ($times as $time): ?>
                                <input type="checkbox" name="times[]" value="<?php echo htmlspecialchars($time); ?>">
                                <?php echo $time; ?>
                            <?php endforeach; ?>
                            <p class="note-text">※欠席する時限にチェック</p>
                        </div>
                    </td>
                </tr>

                <tr id="reason_row">
                    <th>理由</th>
                    <td>
                        <textarea name="reason"></textarea>
                    </td>


                </tr>
                <tr id="job_row" style="display:none;">
                    <th>就活</th>
                    <td>
                        <div>
                            <select name="job_category">
                                <option value="default">未選択</option>
                                <option value="説明会">説明会</option>
                                <option value="カジュアル面談">カジュアル面談</option>
                                <option value="人事面接">人事面接</option>
                                <option value="一次面接">一次面接</option>
                                <option value="二次面接">二次面接</option>
                                <option value="三次面接">三次面接</option>
                                <option value="最終面接">最終面接</option>
                                <option value="入社試験">入社試験</option>
                                <option value="社内研修">社内研修</option>
                                <option value="内定式">内定式</option>
                                <option value="その他">その他</option>
                            </select>
                        </div>
                        <div>
                            <textarea name="job_message" placeholder="※伝えたい事があれば入力してください"></textarea>
                        </div>
                    </td>
                </tr>



                </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <div class="submit">
                            <input type="submit" value="送信">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <script>
        $(function () {
            // DatePickerの初期化
            $("#date_start, #date_end").datepicker({
                dateFormat: "yy-mm-dd"
            });

            // 区分ラジオボタンの切り替え
            $('input[name="category"]').on('change', function () {
                if ($(this).val() === '就活') {
                    $('#reason_row').hide();
                    $('#job_row').show();
                } else {
                    $('#reason_row').show();
                    $('#job_row').hide();
                }
            });
        });
    </script>
</body>

</html>