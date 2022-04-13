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
    <form method="POST">
      <label>
        Введите Ваше имя:
        <br/>
        <input name="field-name"
          type=text
          value=""/>
      </label>
   <br/>

      <label>
        Введите Ваш email:
        <br/>
        <input name="field-email"
          value="test@example.com"
          type="email"/>
      </label>
      <br/>

      <label>
        Введите Вашу дату рождения:
        <br/>
        <input name="field-date"
          value="2002-06-08"
          type="date"/>
      </label>
      <br/>

      Количество конечностей:<br/>
      <label><input type="radio" checked="checked" name="radio-limb" value="Значение1" />1</label>
      <label><input type="radio" name="radio-limb" value="Значение2"/>2</label>
      <label><input type="radio" name="radio-limb" value="Значение2"/>3</label>
      <label><input type="radio" name="radio-limb" value="Значение2"/>4</label>
      <br/>

      Пол:<br/>
      <label><input type="radio" checked="checked" name="radio-gender" value="Значение1" />Мужской</label>
      <label><input type="radio" name="radio-gender" value="Значение2"/>Женский</label>
      <br/>

      <label>
        Сверхспособности:
        <br/>
        <select name="superpower[]" multiple="multiple">
          <option value="Значение1">Бессмертие</option>
          <option value="Значение2" selected="selected">Прохождение сквозь стены</option>
          <option value="Значение3" selected="selected">Левитация</option>
        </select>
      </label><br/>

      <label>
        Биография:<br />
        <textarea name="bio"></textarea>
      </label><br/>

      <label>
        С контрактом ознакомлен (а):<input type="checkbox" name="check"/>
      </label>
      <br/>

      <label> 
        Отправьте что-то:
        <input type="submit" value="Отправить" />
    </label>
    </form>
 </div>
</div>
</body>
