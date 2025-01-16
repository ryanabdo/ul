<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استلام البيانات من النموذج
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $gender = htmlspecialchars($_POST['gender']);
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>معلومات المستخدم</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            direction: rtl;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .result-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .result-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .result-container p {
            font-size: 16px;
        }
    </style>
</head>
<body>

    <div class="result-container">
        <h2>البيانات المرسلة</h2>
        <p><strong>اسم المستخدم:</strong> <?php echo $username; ?></p>
        <p><strong>البريد الإلكتروني:</strong> <?php echo $email; ?></p>
        <p><strong>الجنس:</strong> <?php echo $gender; ?></p>
    </div>

</body>
</html>
