<!DOCTYPE html>

<html>
<head>
  <title>Форма</title>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <div class="container">
        <h1 class="header">Регистрация</h1>

        <form method="post" action="post.php">
            <div class="container-input">
                <div class="input-fio">
                    <label for="name">Имя:</label>
                    <input type="text" name="name" required class="text-input">
                </div>
                <div class="input-fio">
                    <label for="name">Фамилия:</label>
                    <input type="text" name="secondName" required class="text-input">
                </div>
                <div class="input-fio">
                    <label for="name">Отчество:</label>
                    <input type="text" name="secondName2" required class="text-input">
                </div>
            </div>

            <div class="container-input">
               <div class="input-sex">
                    <label class="lable-sex">Пол:</label>
                    <input type="radio" name="sex" value="мужской">мужской
                    <input type="radio" name="sex" value="женский">женский
                </div>  
                <div class="input-age">
                    <label>Год рождения:</label>
                    <input type="date" name="" class="brth-date">
                </div>
            </div>
            <div class="container-input">
               <div class="input-tel">
                    <label class="lable-tel">Телефон:</label>
                    <input type="tel" name="tel" class="text-input">
                </div>  
                <div class="input-email">
                    <label class="lable-email">Email:</label>
                    <input type="email" name="email" class="text-input">
                </div> 
            </div>
            <div class="container-auth">
                <div class="input-login">
                    <label class="lable-login">Логин:</label><br>
                    <label class="lable-password">Пароль:</label>
                </div> 
                <div class="input-password">
                    <input type="login" name="tel" class="text-input-login">
                    <input type="password" name="tel" class="text-input-password">
                </div>  
            </div>

            <div class="container-selector">
                <p>
                    Выберите предмет изучения:
                </p> 
                <select>
                    <option selected>Выберите</option>
                    <option>Аэрокосмические приборы и системы</option>
                    <option>Радиотехника, электроника и связь</option>
                    <option>Инновационные технологии в электромеханике и робототехнике</option>
                    <option>Вычислительные системы и программирование</option>
                </select>
            </div>

            <div class="container-text">
                <p>
                    Кратко расскажите о выбранной Вами предметной области:
                </p> 
                <textarea name="text">
                    
                </textarea>

            </div>
            <div class="container-checkbox">
                <input type="checkbox" name="checkbox">
                <label class="checkbox">Вы подвтерждаете, что даете согласие на обработку персональных данных?</label>
  
            </div>

            <input type="submit" name="">

        </form>
    </div>        


</body>
</html>