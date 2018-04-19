<?php 
// проверка константы запрет на доступ 

defined('BLOGGER') or die('Access denied'); ?> 

<div class="content"> 

            <h2>Список статей</h2> 

<?php 
if(isset($_SESSION['answer'])){
    echo $_SESSION['answer'];
    unset($_SESSION['answer']);
}
?>

            <a href="?view=add_article&amp;cat_id=<?=(int)$_GET['cat_id']?>"><img class="add_some" src="<?=ADMIN_TEMPLATE?>images/add_page.jpg" alt="добавить статью" /></a> 

            <table class="tabl" cellspacing="1"> 

              <tr> 

                <th class="number">№</th> 

                <th class="str_name">Название статьи</th> 

                <th class="str_action">Действие</th> 

              </tr> 
<?php $i = 1; ?>
<?php foreach ($articles as $item): ?>
              <tr> 

                <td><?=$i?></td> 

                <td class="name_page"><?=$item['name']?></td> 


                <td><a href="?view=edit_article&amp;art_id=<?=$item['art_id']?>" class="edit">изменить</a>&nbsp; | &nbsp;<a href="?view=del_article&amp;art_id=<?=$item['art_id']?>" class="del">удалить</a></td> 

              </tr> 
<?php $i++; ?>
<?php endforeach; ?>
            </table> 

            <a href="?view=add_article&amp;cat_id=<?=(int)$_GET['cat_id']?>"><img class="add_some" src="<?=ADMIN_TEMPLATE?>images/add_page.jpg" alt="добавить статью" /></a> 

  

        </div> <!-- .content --> 

    </div> <!-- .content-main --> 

</div> <!-- .karkas --> 

</body> 

</html> 