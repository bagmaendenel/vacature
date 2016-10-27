<!-- Vacature categorieen-->
<div class="">
	<h2>Categorieen</h2>
	<ul>
		<?php
			$allCategories = Db::getInstance()->queryResults('SELECT * FROM categories');
			foreach($allCategories as $category) {
				echo '<li><a href="?pagina=home&categorie='. $category->name .'">' . $category->name . '</a></li>';
			}							
		?>
	</ul>
</div>

<!--Meest bekeken vacatures-->
<div class="">
	<h3>Meest bekeken vacatures</h3>
	<ul>
		<?php
			$totalVacancies = Db::getInstance()->queryResults('SELECT * FROM vacancies LIMIT 5');
			foreach($totalVacancies as $vacancy) {
				echo '<li>' . $vacancy->position . '</li>';
			}							
		?>
	</ul>
</div>

<!--Onze partners Slider-->
<div class="col-xs-12">
	<h4>Onze partners</h4>
	<div id="partners">
		<?php
			$totalVacancies = Db::getInstance()->queryResults('SELECT * FROM companies');
			foreach($totalVacancies as $vacancy) {
				echo '<div class="item"><img src="img/'. $vacancy->logo .'" alt="'. $vacancy->name .'"></div>';
			}							
		?>
	</div>	
</div>

