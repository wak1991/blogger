<?php 
// проверка константы запрет на доступ 
defined('BLOGGER') or die('Access denied'); ?> 
<div class="content"> 
            <h2>Добавления статьи</h2> 
<?php  
if(isset($_SESSION['add_article']['res'])){ 
    echo $_SESSION['add_article']['res']; 
} 
?> 
  
<form action="" method="post" enctype="multipart/form-data"> 
  
    <table class="add_edit_page" cellspacing="0" cellpadding="0"> 
        <tr> 
            <td class="add-edit-txt">Название статьи:</td> 
            <td><input class="head-text" type="text" name="name" /></td> 
        </tr> 
        <tr> 
            <td class="add-edit-txt">Ключевые слова:</td> 
            <td><input class="head-text" type="text" name="keywords" value="<?=htmlspecialchars($_SESSION['add_article']['keywords'])?>" /></td> 
        </tr> 
        <tr> 
            <td class="add-edit-txt">Описание:</td> 
            <td><input class="head-text" type="text" name="description" value="<?=htmlspecialchars($_SESSION['add_article']['description'])?>" /></td> 
        </tr> 
        <tr> 
            <td>Категория:</td> 
            <td> 
            <select class="select-inf" name="category" multiple="" size="10" style="height: auto;"> 
<?php foreach($categories as $key_parent): ?>  
    <option <?php if($key_parent['cat_id'] == (int)$_GET['cat_id']) echo "selected" ?> value="<?=$key_parent['cat_id']?>"><?=$key_parent['cat_name']?></option>
<?php endforeach; ?> 
            </select> 
            </td> 
        </tr> 
        <tr> 
            <td>Картинка статьи:</td> 
            <td><input type="file" name="baseimg" /></td> 
        </tr> 
        <tr> 
            <td>Краткое описание:</td> 
            <td></td> 
        </tr> 
        <tr> 
            <td colspan="2"> 
                <textarea id="editor1" class="anons-text" name="anons"><?=$_SESSION['add_article']['anons']?></textarea> 
<script type="text/javascript"> 
    CKEDITOR.replace(editor1); 
</script> 
            </td> 
        </tr> 
        <tr> 
            <td>Подробное описание:</td> 
            <td></td> 
        </tr> 
        <tr> 
            <td colspan="2"> 
                <textarea id="editor2" class="anons-text" name="content"><?=$_SESSION['add_article']['content']?></textarea> 
<script type="text/javascript"> 
    CKEDITOR.replace(editor2); 
</script> 
            </td> 
        </tr>  
        <tr> 
            <td>Показывать:</td> 
            <td><input type="radio" name="visible" value="1" checked="" />Да <br /> 
                <input type="radio" name="visible" value="0" />Нет</td> 
        </tr> 
    </table> 
     
    <input type="image" src="<?=ADMIN_TEMPLATE?>images/save_btn.jpg" /> 
  
</form> 
<?php unset($_SESSION['add_article']); ?> 
        </div> <!-- .content --> 
    </div> <!-- .content-main --> 
</div> <!-- .karkas --> 
</body> 
</html> 