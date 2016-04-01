<div class="form" style="height: 650px">
    <form method="post">
        <div class="name">Введите название новости</div>
        <div class="input"><input type="text" name="nameNews" value="<?=$_POST["nameNews"]?>">
            <div style="color: red">
                <? if ($arResult["form_error"]["nameNews"]) {
                    echo "Заполните поле!!!!";
                }
                ?>
            </div>
        </div>

        <div class="name">Введите заголовок</div>
        <div class="input"><input type="text" name="headerNews" value="<?=$_POST["headerNews"]?>">
            <div style="color: red">
                <? if ($arResult["form_error"]["headerNews"]) {
                    echo "Заполните поле!!!!";
                }
                ?>
            </div>
        </div>

        <div class="name">Введите описание новости</div>
        <div class="input"><input type="text" name="descriptionNews" value="<?=$_POST[85]?>">
            <div style="color: red">
                <? if ($arResult["form_error"][85]) {
                    echo "Заполните поле!!!!";
                }
                ?>
            </div>
        </div>

        <div class="name">Введите текст новости</div>
        <div class="input"><textarea name="TextNews" ><?=$_POST["TextNews"]?></textarea>
            <div style="color: red">
            <? if ($arResult["form_error"]["TextNews"]) {
                echo "Заполните поле!!!!";
            }
            ?>
            </div>
        </div>

        <div class="name"><input type="submit" name="sub"></div>
    </form>
</div>
