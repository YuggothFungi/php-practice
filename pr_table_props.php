<!DOCTYPE html>
<html>

<body>
    <!-- Создаём форму с кнопкой submit, чтобы она за нас формировала GET запрос и посылала в него все данные с формы -->
    <!-- Вызываем по этому запросу страницу pr_table_build.php.-->
    <!-- Получится вызов http://localhost:3000/pr_table_build.php?tblheader=Заголовок+страницы&tblrows=5&tblcols=5 (вместо русских букв в запросе будут коды символов) -->
    <form action=pr_table_build.php method=GET>
        <input type=text name="tblheader" value="Заголовок таблицы"><br>
        <input type=text name="tblrows" value="5" size=5><br>
        <input type=text name="tblcols" value="5" size=5><br>
        <input type=submit value="Создать таблицу"><br>
    </form>
</body>

</html>