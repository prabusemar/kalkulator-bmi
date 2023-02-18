<?php
if (isset($_POST['berat']) && isset($_POST['tinggi'])) {
    $berat = $_POST['berat'];
    $tinggi = $_POST['tinggi'] / 100;
    $bmi = $berat / ($tinggi * $tinggi);

    $result = "BMI Anda: " . number_format($bmi, 2);
    $message = "";
    $class = "";
    if ($bmi < 18.5) {
        $message = "Anda kekurangan berat badan.";
        $class = "kurang";
    } elseif ($bmi >= 18.5 && $bmi < 25) {
        $message = "Anda memiliki berat badan normal.";
        $class = "normal";
    } elseif ($bmi >= 25 && $bmi < 30) {
        $message = "Anda tergolong overweight.";
        $class = "overweight";
    } else {
        $message = "Anda tergolong obesitas.";
        $class = "obesitas";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <style>
        body {
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
        }

        .container {
            margin: auto;
            width: 400px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
            margin-top: 50px;
            padding: 20px;
        }

        h1 {
            font-size: 36px;
            margin: 0 0 20px 0;
            text-align: center;
            color: #333;
        }

        .result {
            color: white;
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .result p {
            margin: 0;
        }

        .result .message {
            margin-top: 10px;
        }

        /* Warna background berdasarkan kondisi BMI */
        .result.overweight {
            background-color: #f39c12;
        }

        .result.kurang {
            background-color: #f39c12;
        }

        .result.normal {
            background-color: #4CAF50;
        }

        .result.obesitas {
            background-color: #e74c3c;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
            display: block;
            margin: auto;
        }

        a {
            text-decoration: none;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Hasil Kalkulator BMI</h1>
        <?php if (isset($result)) { ?>
            <div class="result <?= $class; ?>">
                <p><?php echo $result; ?></p>
                <p class="message"><?php echo $message; ?></p>
            </div>
        <?php } else { ?>
            <p>Maaf, terjadi kesalahan. Silakan coba lagi.</p>
        <?php } ?>

        <a href="index.php" class="btn">Kembali ke Kalkulator</a>
    </div>
</body>

</html>