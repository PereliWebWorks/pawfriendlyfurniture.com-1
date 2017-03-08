<?php
	define("PAGE_NAME", "purchase");
	require_once __DIR__ . "/../resources/templates/head.php";
	require_once __DIR__ . "/../resources/templates/contentStart.php";
	require_once __DIR__ . '/../resources/templates/navbar.php';
?>
	<div class="row">
		<div class="col-xs-12">
			<h1>Where to purchase the best cat trees</h1>
			Our cat trees can be purchased directly from us and at various pet shows in Southern Wisconsin.
			<h2>Direct Sales</h2>
			Please <a href="contact.php">contact us</a> to obtain current prices, to order our <a href="products.php">cat trees</a>, or to <a href="youdesign.php">design a custom order</a>.
			<br/><br/>
			<b>Please note: because of shipping costs, we are not able to ship our products. We apologize for the inconvenience. We look forward to seeing you soon!</b>
			<h2>Cat Shows</h2>
			We have been going to Cat shows in and around Wisconsin for years now. They're a great opportunity for us to learn what

our Customer’s want for their cat’s needs. Cat Shows are very educational. From learning about the

different breeds to the judging in the rings, it is quite impressive. You can follow us at the following

shows.
	<br/><br/>
		<table class="table table-striped table-bordered table-responsive">
			<thead><tr><th colspan="3">2017</th></tr></thead>
			<tbody>
				<tr>
					<td>Sept. 23rd and 24th</td>
					<td>Feline Groovy Cat show</td>
					<td>Racine Wisconsin/Racine Civic Center</td>
				</tr>
				<tr>
					<td>Jul. 8th and 9th</td>
					<td>Madison Cat Club</td>
					<td>Madison, WI</td>
				</tr>
				<tr>
					<td>Oct. 21st and 22nd</td>
					<td>Friendly Kat Fanciers of Iowa</td>
					<td>Cedar Rapids, IA</td>
				</tr>
				<tr>
					<td>Nov. 4th and 5th</td>
					<td>Janesville Allbreed Cat Club</td>
					<td>Janesville, WI</td>
				</tr>
			</tbody>
			<thead><tr><th colspan="3">2018</th></tr></thead>
			<tbody>
				<tr>
					<td>Feb. 3rd and 4th</td>
					<td>Rock Valley Cat Club</td>
					<td>Loves Park, IL</td>
				</tr>
			</tbody>
		</table>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3" id="credit-cards">
			<span class="col-xs-12 col-sm-4"><img src="img/credit_cards/master_card.png" class="img-responsive" /></span>
			<span class="col-xs-12 col-sm-4"><img src="img/credit_cards/visa.png" class="img-responsive" /></span>
			<span class="col-xs-12 col-sm-4"><img src="img/credit_cards/discover.png" class="img-responsive"/></span>
		</div>
	</div>
<?php
	require_once __DIR__ . "/../resources/templates/contentEnd.php";
?>