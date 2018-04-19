<?php 

// проверка константы запрет на доступ 

defined('BLOGGER') or die('Access denied'); ?> 

<div class="content"> 

<h2>Добавление категории</h2> 

<?php  

if(isset($_SESSION['add_categorie']['res'])){ 

    echo $_SESSION['add_categorie']['res']; 

    unset($_SESSION['add_categorie']); 

} 

?> 

<form action="" method="post"> 

     

    <table class="add_edit_page" cellspacing="0" cellpadding="0"> 

      <tr> 

        <td class="add-edit-txt">Название категории:</td> 

        <td><input class="head-text" type="text" name="cat_name" /></td> 

      </tr> 


    </table> 

     

    <input type="image" src="<?=ADMIN_TEMPLATE?>images/save_btn.jpg" />  

  

</form> 

  

        </div> <!-- .content --> 

    </div> <!-- .content-main --> 

</div> <!-- .karkas --> 

</body> 

</html> 