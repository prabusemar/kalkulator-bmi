<!DOCTYPE html>
<html>

<head>
    <title>Kalkulator BMI</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Kalkulator BMI</h1>
        <form method="post" action="hitung.php">
            <label>Berat (kg):</label>
            <input type="number" name="berat" required>
            <label>Tinggi (cm):</label>
            <input type="number" name="tinggi" required>
            <input type="submit" value="Hitung">
        </form>
    </div>
</body>

</html>