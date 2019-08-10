<?php
include("inc/data.php");
include("inc/functions.php");

$pageTitle = "Personal Media Library";
$section = null;
include("inc/header.php");?>

		<div class="section catalogue random">

			<div class="wrapper">

				<h2>May we suggest something?</h2>

				<ul class="items">
					<?php
					$random = array_rand($catalogue, 4);

					foreach ($random as $id) {
						echo get_item_html($id, $catalogue[$id]);
					}
					?>
				</ul>

			</div>

		</div>

	</div>


<?php include("inc/footer.php");?>
