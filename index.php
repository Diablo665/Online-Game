<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Подключение к игре</title>
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/ionicons@4.1.2/dist/ionicons.js"></script>
</head>
<body>
    <!-- Главный блок -->
    <div class = "main_block"> 
        
        <!-- Верхний колонтикул-->
        <div class = "top"> 
            <div class = logo> 
                <img src = "https://habrastorage.org/webt/39/cp/wa/39cpwawqnizit2jha7nbyutnx6i.jpeg">
            </div>

            <div class = icons>
                <ion-icon class = disable name="information-circle-outline" title = "Инфомрация"></ion-icon>
                <ion-icon class = disable name="settings" title = "Настройки"></ion-icon>
            </div>
        </div>

        <!-- Форма входа -->
        <?php if (!isset($_COOKIE['Nick'])){?>
        <div class = "enter_form"> 

            <div class = profile_page>
                    <img src = "https://habrastorage.org/webt/39/cp/wa/39cpwawqnizit2jha7nbyutnx6i.jpeg">
            </div>
            <div id = enter_info>
                <div>Введите имя:</div>
                <div>
                    <input id = NickName type="text" size="30">
                </div>
                <button id = ready1> Продолжить </button>
            </div>
        </div>

        <?php } else { ?>

        <div class = "setting_games" id = enter_info>
        <!-- Настройка кол-во вопросов--> 
            <table>
                <tr>
                    <td id = NickName> Привет <?php echo $_COOKIE['Nick'] ?>! </td>
                </tr>
                <tr>
                    <td class = "menu_button disable" >Все лобби </td>
                </tr>
                <tr> 
                    <td class = "menu_button enable">Создать лобби</td>
                </tr>
            </table>
        </div>
        <?php } ?>
    </div>

</body>

</html>