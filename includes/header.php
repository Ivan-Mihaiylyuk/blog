<header class="header">
  <div class="secondary-container">
    <div class="secondary-menu">
<ul>
  <li><a href="index.php">Главная</a></li>
  <li><a href="#">Обо мне</a></li>
  <li><a href="http://vk.com/mihaiylyuk">Я Вконтакте</a></li>
</ul>
    </div>
  </div>
  <div id="wraper">
<div class="primary-container">
<div class="primary-menu">
  <?php $categories = mysqli_query($connection,'SELECT * FROM articl_categoria');?>
      <div class="primary-menu">
        <ul>
          <?php 
          while ($cat = mysqli_fetch_assoc($categories)) {
            ?> <li><a href="/articls.php?categorie=<?php echo $cat['id']; ?>"><?php echo $cat['title'];?></a></li>
                      <?php
          }
          ?>  
</ul>
    </div>
   </div>
   </div>
 </header>