$(document).ready(function(){

    // Работа кнопки продолжения 
    $("#ready1").click(function(){
        if ($('#NickName').val().trim().length != 0){
            sendData ($('#NickName').val()) 
        }
        else{
            alert('Имя не должно быть пустым')
        }
    });
    // Заглушки для функций которые пока не действуют
    $(".disable").click(function(){
        alert('Эта функция сейчас деактивирована')
    });

    // Не забыть добавить дальнейшее определение для кнопок, что бы не писать новые функции
    $(".menu_button.enable").click(function(){
        window.location.href = "../my-lobbi";
    });


// ------------------------------------------Start--------------------------------------------------------//

    /* 
        Начало игры:

        Будущий функционал: 

            1. Вытащить категории указанные юзером.
            2. Вытащить кол-во вопросв из каждной категории
            3. Передать инфу на сервах. 
            4. На серваке сгенеретить пак вопросов, и вернуть их сюда. 
            5. Вывести первый вопрос на страницу. (Для отображения нужно создать отдельную функцию)
            
        Также нужно доавить нормальную обработку ошибок запроса на сервер

    
    */ 

    $(".menu_button.start").click(function(){
        $.ajax({
            url: '../php/parsing.php',
            method: 'GET',
            data: "test",
            success: function(response) {
                console.log(response)
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    });


// --------------------------------------------END------------------------------------------------------//


// ------------------------------------------Start--------------------------------------------------------//
    /* 
        Кнопка для рандомного выбора категорий. 

        Будущий функционал: 

        1. Запросить у игрока кол-во вопросв на раунд. 
        2.
            2.1 Если категори не выбраны то разделить кол-во вопросов указанных юзером, на разные категории в рандомном порядке.
            2.2. Если категории указаны, разделить рандомное кол-во вопросов на категории указанные юзеров
    
    */
    $(".menu_button.random").click(function(){
        alert('Рандом');
    });
// --------------------------------------------END------------------------------------------------------//


// ----------------------------------------------START----------------------------------------------------//
    /* 
        WARNING !!!!

        Обязательно в ближайшее время добавить проверку вводимых данных на SQL инъекции и другие вредные данный.
    
        
    */

    // Делаем куку на 1 день с ником пользователя. 
    function sendData(information){
        
        $.ajax({
            url: '../php/start.php',
            method: 'GET',
            data: {
                type: 'enter',
                data: information
            },
            success: function(response) {
                location.reload(true)
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    }

// ------------------------------------------------END--------------------------------------------------//

});