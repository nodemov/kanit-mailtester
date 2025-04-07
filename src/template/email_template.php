<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f9f9f9;
            color: #333;
            padding: 20px;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #007BFF;
        }

        .email-body {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .email-footer {
            font-size: 14px;
            color: #555;
            margin-top: 20px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">Congratulations</div>
        <div class="email-body">
            <p>We have received your booking request.</p>
            <p>We will contact you soon at <strong><?= htmlspecialchars($to) ?></strong></p>
            <p style="color:orange">
                <?= $body ?>
            </p>
        </div>
        <div class="email-footer">Thank you for reaching out to us!</div>
    </div>
</body>

</html>