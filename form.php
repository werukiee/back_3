<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Anastasia</title>
</head>
<body>
<div class="block_form" id="forma">
  <div class="top_bot">
    <h1>Form</h1>
    <form method="POST" id="form">
            <label>
                Имя:<br />
                <input type=text name="field-name" placeholder="Тервер Терверыч" />
            </label><br />
            <label>
                Поле email:<br />
                <input name="field-email" placeholder="example@test.com" type="email">
            </label><br />
            <label>
                Дата рождения:<br />
                <input name="field-date" value="2012-12-12" type="date" />
            </label><br />
            <label>Пол:</label><br />
            <label class="radio"><input type="radio" checked="checked" name="radio-gender" value=1 />
                Мужской</label>
            <label class="radio"><input type="radio" name="radio-gender" value=0 />
                Женский</label><br />
            <label>Кол-во конечностей:</label><br />
            <label class="radio"><input type="radio" checked="checked" name="radio-konech" value=0 />
                0</label>
            <label class="radio"><input type="radio" name="radio-konech" value=1 />
                1</label>
            <label class="radio"><input type="radio" name="radio-konech" value=2 />
                2</label>
            <label class="radio"><input type="radio" name="radio-konech" value=3 />
                3</label>
            <label class="radio"><input type="radio" name="radio-konech" value=4 />
                4</label><br />
            <label>
                Ваши сверхспособности:<br />
                <select multiple="true" name="superpower[]">
                    <option value="Бессмертие">Бессмертие</option>
                    <option value="Прохождение сквозь стены">Прохождение сквозь стены</option>
                    <option value="Левитация">Левитация</option>
                </select>
            </label><br />
            <label>
                Биография:<br />
                <textarea name="biography" placeholder="Расскажите о себе"></textarea>
                <br />
            </label>
            <label>
                <input name="chick" type="checkbox" checked=checked value=1> Ознакомлен с контрактом:<br />
            </label>
            <input type="submit" value="Отправить" />
        </form>
 </div>
</div>
</body>