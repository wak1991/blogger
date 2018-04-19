<?php 
// проверка константы запрет на доступ 

defined('BLOGGER') or die('Access denied'); ?> 

<div class="content"> 

            <h2>Список категорий</h2> 

<?php 
if(isset($_SESSION['answer'])){
    echo $_SESSION['answer'];
    unset($_SESSION['answer']);
}
//print_arr($categories);
?>

            <a href="?view=add_categorie"><img class="add_some" src="<?=ADMIN_TEMPLATE?>images/add_kategory.jpg" alt="добавить категорию" /></a> 

            <table class="tabl" cellspacing="1"> 

              <tr> 

                <th class="number">№</th> 

                <th class="str_name">Название категории</th> 

                <th class="str_action">Действие</th> 

              </tr> 
<?php $i = 1; ?>
<?php foreach ($categories as $item): ?>
              <tr> 

                <td><?=$i?></td> 

                <td class="name_page"><?=$item['cat_name']?></td> 


                <td><a href="?view=edit_categorie&amp;cat_id=<?=$item['cat_id']?>" class="edit">изменить</a>&nbsp; | &nbsp;<a href="?view=del_categorie&amp;cat_id=<?=$item['cat_id']?>" class="del">удалить</a></td> 

              </tr> 
<?php $i++; ?>
<?php endforeach; ?>
            </table> 

            <a href="?view=add_categorie"><img class="add_some" src="<?=ADMIN_TEMPLATE?>images/add_kategory.jpg" alt="добавить категорию" /></a> 

  

        </div> <!-- .content --> 

    </div> <!-- .content-main --> 

</div> <!-- .karkas --> 

</body> 

</html> 