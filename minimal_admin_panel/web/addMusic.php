<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Music</title>
    <!-- Подключение иконок Font Awesome (можно загрузить с CDN) -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
    <!-- Добавление стилей для кнопок и формы -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            max-width: 400px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            color: red;
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input,select,file {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .add-music-button {
            width: 100%;
            padding: 10px;
            font-size: 1.2em;
            font-weight: bold;
            color: #fff;
            background: red;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .add-music-button:hover {
            background: #e55f50;
        }

        .music-list {
            list-style-type: none;
            padding: 0;
            margin-top: 20px;
        }

        .music-list li {
            background: #ecf0f1;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .music-list li i {
            margin-right: 10px;
            color: #3498db;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Add Music <i class="fas fa-music"></i></h2>

        <!-- Форма для добавления музыки и песни -->
        <form  action="musicadd.php"  method="POST"  id="addMusicForm" enctype="multipart/form-data">
            <label for="musicName">Select your Music:</label>
            <input type="file" name="fileToUpload">
            <label for="artist">Artist:</label>
            <select name="artistName" id="artist">
                <?php
                    require_once("../../config/connection.php");
                    $sql = "SELECT fullname FROM artist;";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <option value="<?=$row['fullname']?>"><?=$row['fullname']?></option>
                        <?php
                    }
                ?>
            </select>

            <label for="songName">Song Albom:</label>
            <select name="albomName" id="albom">
                <?php
                    require_once("../../config/connection.php");
                    $sql = "SELECT fullname FROM alboms;";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <option value="<?=$row['fullname']?>"><?=$row['fullname']?></option>
                        <?php
                    }
                ?>
            </select>
            <button type="submit" class="add-music-button" name="submit">Add Music <i class="fas fa-plus"></i></button>
        </form>

        <!-- Список добавленной музыки и песен -->
        <ul id="musicList" class="music-list"></ul>
    </div>

    <!-- JavaScript код для динамического добавления музыки и песен -->
    <script>
        function addMusic() {
            // Получаем значения из формы
            var musicName = document.getElementById("musicName").value;
            var artist = document.getElementById("artist").value;
            var songName = document.getElementById("songName").value;

            // Создаем новый элемент списка (музыку и песню)
            var listItem = document.createElement("li");
            listItem.innerHTML = `<i class="fas fa-music"></i> Music Name: ${musicName} - Artist: ${artist} - Song Name: ${songName}`;

            // Добавляем элемент в список
            document.getElementById("musicList").appendChild(listItem);

            // Очищаем значения формы
            document.getElementById("musicName").value = "";
            document.getElementById("artist").value = "";
            document.getElementById("songName").value = "";
        }
    </script>

</body>
</html>
