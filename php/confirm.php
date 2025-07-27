<?php
// confirm.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"] ?? "";
    $line = $_POST["line"] ?? "";
    $options = $_POST["options"] ?? [];
    $message = $_POST["message"] ?? "";

    // 納期を日本語に変換
    switch ($line) {
        case "standard":
            $line = "通常納期（1週間以内）";
            break;
        case "early":
            $line = "早期納品（3日以内）";
            break;
        default:
            $line = "未選択";
    }

    // オプションを日本語に変換
    $option_labels = [
        "generate" => "ハモリ生成",
        "rec" => "ハモリ録音",
        "advise" => "アドバイス資料",
        "none" => "参考音源なし"
    ];

    $options_japanese = [];
    foreach ($options as $option) {
        if (isset($option_labels[$option])) {
            $options_japanese[] = $option_labels[$option];
        }
    }
    $options = implode(", ", $options_japanese); // 配列を文字列に変換

} else {
    // POSTデータがない場合はリダイレクト
    header("Location: index.php"); // または適切なページ
    exit;
}
