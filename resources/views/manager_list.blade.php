<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Таблица</title>
 </head>
 <body>
  <table border="1">
   <tr>
    <th>manager</th>
    <th>salary</th>
    <th>plan</th>
    <th>Дата</th>
    <th>количество дней в месяце</th>
    <th>Количество дней отработано</th>
    <th>ЗП с посещения работы</th>
    <th>прибавка за звонки</th>
   </tr>
    @foreach ($data as $item)
        <tr>
            <td>{{$item['manager']}}</td>
            <td>{{$item['salary']}}</td>
            <td>{{$item['plan']}}</td>
            <td>{{$item['Дата']}}</td>
            <td>{{$item['количество дней в месяце']}}</td>
            <td>{{$item['Количество дней отработано']}}</td>
            <td>{{$item['ЗП с посещения работы']}}</td>
            <td>{{$item['прибавка за звонки']}}</td>
        </tr>
    @endforeach
  </table>
 </body>
</html>