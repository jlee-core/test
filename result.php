<!DOCTYPE html>
<html>

<head>
    <title>result</title>
    <style>
        .header {
            background-color: rgb(17, 141, 31);
            color: #FFFFFF;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="header">
        <h3>【提出結果】</h3>
    </div>
    <?php
    $selected_category = isset($_POST["category"]) ? $_POST["category"] : "未入力";
    $selected_date_start = isset($_POST["date_start"]) ? $_POST["date_start"] : "未入力";
    $selected_date_end = isset($_POST["date_end"]) ? $_POST["date_end"] : "未入力";
    $selected_times = isset($_POST["times"]) ? $_POST["times"] : ["未入力"];
    $selected_reason = isset($_POST["reason"]) ? $_POST["reason"] : "未入力";
    $selected_job_category = isset($_POST["job_category"]) ? $_POST["job_category"] : "未入力";
    $selected_job_message = isset($_POST["job_message"]) ? $_POST["job_message"] : "未入力";

    echo "【区分】" . $selected_category . "<br>";
    echo "【期間】" . $selected_date_start . "～" . $selected_date_end . "<br>";
    echo "【時間】" . implode(",", $selected_times) . "<br>";
    if ($selected_category === "就活") {
        echo "【活動区分】" . $selected_job_category . "<br>";
        echo "【メッセージ】" . $selected_job_message . "<br>";
    } else {
        echo "【理由】" . $selected_reason . "<br>";
    }
    ?>
</body>

</html>