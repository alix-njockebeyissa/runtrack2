<!DOCTYPE html>
<html>
<head>
    <title>Formulaire avec changement de style</title>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $selectedStyle = $_POST['style'];
            echo '<link id="style-link" rel="stylesheet" type="text/css" href="' . $selectedStyle . '.css">';
        } else {
            echo '<link id="style-link" rel="stylesheet" type="text/css" href="style1.css">';
        }
    ?>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        
        form {
            margin: 50px auto;
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        
        select {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }
        
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form id="style-form" action="" method="post">
        <label for="style">Choisissez un style :</label>
        <select id="style" name="style">
            <option value="style1">Style 1</option>
            <option value="style2">Style 2</option>
            <option value="style3">Style 3</option>
        </select>
        <input type="submit" value="Appliquer le style">
    </form>

    <script>
        document.getElementById('style-form').addEventListener('submit', function(event) {
            event.preventDefault(); // 
            var styleValue = document.getElementById('style').value;
            var styleLink = document.getElementById('style-link');
            styleLink.href = styleValue + '.css';
        });
    </script>
</body>
</html>