	<?php
require "includes/config.php";
?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Сайт базы</title>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" type="text/css" href="style/menu.css">
	</head>
	<body>		
		
		<?php include "includes/header.php";?>

			<div class="row">
<div class="content">
		<div class="main-content"> 
			<div class="blog"><h2>Популярное в блоке</h2>

			<?php $articls = mysqli_query($connection,'SELECT * FROM articls ORDER BY id DESC LIMIT 4');?>

				<?php 
				while ($art = mysqli_fetch_assoc($articls))
				{
					?>
					<article class="article">
	<div class="article_image" style="background-image: url(/img/<?php echo $art['imgage'];?>);"></div>
	<div class="article_info">
		<a href="/articles.php?id=<?php echo $art['id'];?>"><?php echo $art['title']; ?></a>
		<div class="article_info_meta">
			<?php 
			$art_cat = false;
			foreach($categories as $cat)
			{
				if($cat['id'] == $art['categorie'])
			{
				$art_cat = $cat;
				break;
			}
			}
			?>
			<small>Категория: <a href="/articls.php?categorie=<?php echo $art_cat['id']; ?>"><?php echo $art_cat['title']; ?></a></small>
		</div>
		<div class="article_info_preview"><?php echo mb_substr($art['text'],0,50, 'utf-8'); ?></div>
	</div>
</article>
<?php
}
?>	
<a id="zapis" href="/articls.php?categorie=7">Все записи</a>
</div>
</div>


		<div class="inner-content"><h2>Популярное в блоке</h2>

			<a id="zapis" href="/articls.php?categorie=7">Все записи</a>
					
</div>
<div class="inner-content"><h2>Популярное в блоке</h2><a id="zapis" href="/articls.php?categorie=7">Все записи</a>
		
</div>
<div class="inner-content"><h2>Популярное в блоке</h2><a id="zapis" href="/articls.php?categorie=7">Все записи</a>
		
</div>
</div>
<?php
require "includes/sidebar.php";
?>
</div>

	<?php include "includes/footer.php";?>
</div>

	</body>
	</html>