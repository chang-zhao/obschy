<?php

/*
 * Coundown to show the time left to launching a web site or some of its services
 *
 * @language RU + EN
 */

?><!DOCTYPE html>
<html lang="ru_RU" class="ru">
  <head>
    <meta charset="utf-8">
    <title>Общий - Obschy</title>
  </head>
  <body>

    <div style="text-align: center; padding: 1em; font-size: large">
      <div style="padding: 1em; background-color: #FCC">
        <p><em>
<?php

function showDate() { // Europe/Moscow, in Russian
  $months = array( 1 => 'января' , 'февраля' , 'марта' , 'апреля' , 'мая' , 'июня' , 'июля' , 'августа' , 'сентября' , 'октября' , 'ноября' , 'декабря' );
  $days = array( 1 => 'понедельник' , 'вторник' , 'среда' , 'четверг' , 'пятница' , 'суббота' , 'воскресенье' );
  return date('H:i, j ' . $months[date('n')] . ' Y, ' . $days[date('N')] . ' Мск.', strtotime('+3 hours'));
}
echo showDate();

?>
        </em></p>
        <h1>«Общий путь»</h1>
        <p>Запуск форума назначен на субботу, 13.01.2018 16:00</p>
        <p>Осталось</p>
      </div>
      <h2>
<?php

$date = strtotime("2018-01-13 13:00:00");
$remaining = $date - time();
$days_remaining = floor($remaining / 86400);
$hours_remaining = floor(($remaining % 86400) / 3600);
$minutes_remaining = floor((($remaining % 86400) % 3600) / 60);
echo "$days_remaining дней (days), $hours_remaining : $minutes_remaining";

?>
      </h2>
      <div style="padding: 1em; background-color: #CCF">
        <p>left</p>
        <p>Forum launch is scheduled at: Saturday, 13.01.2018 13:00 UTC.</p>
        <h1>Joint («Общий») Path</h1>
        <p><em>
<?php

echo date('l, jS \of F Y, h:i A') . ' UTC';

?>
        </em></p>
      </div>
    </div>
  </body>
</html>
