<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LEMON</title>
	<link rel="stylesheet" type="text/css" href="style/index.css">
	<link rel="stylesheet" href="index-adaptive(1130px).css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,500,700,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700&display=swap" rel="stylesheet">
</head>
<body class="body">
	<?php include 'Logo.php' ?>
	<?php include 'navigator.php' ?>
	<div class="hero">
		<div class="hero-info">
			<div class="hero-logo "><img src="lemon-img/Logo.png"></div>
			<div class="hero-title">Bananas Foster Ice Cream Cake</div>
			<div class="hero-text">If you're looking for decadence. look no further -<br> you've found the Holu Grail of desserts. Honestly.<br>this cake makes uf wonder why Bananas Foster<br>hasn'talvays been served on top of ice cream<br>cake.</div>
			<div class="hero-button"><button class="hero-btn" href="#">Get it recipe</button></div>
		</div>
	</div>
	<div class="hero__mob"><a href="#"><img src="lemon-img/Hero-img__mob.png" class="hero__mob-img"></a></div>
	<button id="hero__mob-button">get it recipe</button>
	<!--hero end-->
	<div class="recipes">
		<div class="Raspberry">
			<a href="#">
				<img class="Raspberry-img" src="lemon-img/Raspberry.png"> 
				<div class="Raspberry-title ht">Raspberry & Cream Frozen Yogurt Pie</div>
				<div class="recipes-info"><img src="lemon-img/Clock.png"><span class="a">35rn ns</span><img class="recipes-info__message" src="lemon-img/Comment.png"><span>7</span><img class="recipes-info__eyes" src="lemon-img/View.png"><span>14</span>
			</a>
		</div>
		</div>
		<div class="Ice">
			<a href="#"><img src="lemon-img/Ice.png" class="Ice-img">
			<div class="Ice-title ht">Giant Ice Cream Sandwich</div>
			<div class="recipes-info">
				<img src="lemon-img/Clock.png">
				<span class="a">20 mins</span>
				<img class="recipes-info__message" src="lemon-img/Comment.png">
				<span>4</span>
				<img class="recipes-info__eyes" src="lemon-img/View.png">
				<span>356</span></a>
			</div>
		</div>
		<div class="Chocolate">
			<a href="#"><img src="lemon-img/Chocolate.png" class="Chocolate-img">
			<div class="Chocolate-title ht">Dark Chocolate Crunch Ice Cream<br>Sandwich Cake</div>
			<div class="recipes-info"><img src="lemon-img/Clock.png"><span>15mins</span><img class="recipes-info__message" src="lemon-img/Comment.png"><span>4</span><img class="recipes-info__eyes" src="lemon-img/View.png"><span>167</span></a></div>
		</div>
	</div>
	<!--recipes end-->

	<div class="recipe">
		<div class="recipe-text">
			<div class="recipe-title">Bananas Foster Ice Cream Cake</div>
			<div class="recipe-info"><img src="lemon-img/Clock icon.png" class="recipe-time__img"><span class="recipe-time">15mins</span><img src="#">
				<span class="recipe-time Easy">Easy</span>
				<button class="recipe-button">save recipe</button>
			</div>
			<div class="recipe-recept">1 (8 ounce) cortainer frozen whipped topping. thawed<br>20 chocolate round wafers. devided<br>1 (7 1/4 ounce) bottle Smucker's Hot Dak Chocolate Microwaveable Top-<br>ping, divided</div>
			<div class="recipe-Direction__title">Directions</div>
			<div class="recipe-Direction__text">ARRANGE 8 to 9 ice cream sandwiches in 9-inch square pan, cutting to<br>form an even layer. Spread with half of whipped topping. Break or cush<br>chocolate wafers and sprinkle over the whipped cream. Microwave 1 cup of <br> chocolate topping into small microware-safe bowl on HIGH for 30 seconds.<br>Drizzle evenly over wafers.<br>TOP with remaining 8 to 9 ice cream sandwiches to form an even layer.<br>Spread with remaining whipped toppin. Freeze 3 hours or overnight. Remove</div>
		</div>
	</div>
	<!--recipe end-->
	<div class="info">
		<div class="info-wrap">
			<div class="Error">
				<img class="Error-img" src="lemon-img/eat.png">
				<div class="Error-title"><img src="lemon-img/404.png"></div>
				<img class="Error-sorry" src="lemon-img/Sorry.png">
				<img class="Error-we" src="lemon-img/WE.png">
				<img class="Error-smile" src="lemon-img/Smile.png">
				<button class="Error-btn" href="#">BACK</button>
			</div>
			<div class="Author">
				<div class="Author-title"><img src="lemon-img/Author.png"></div>
				<div class="Author-img__wrap">
					<img class="Author-img" src="lemon-img/Karen.png">
				</div>
				<div class="Author-info">
					<div class="Author-info__name">Karen Gray</div>
					<div class="Author-info__from">United States</div>
					<div class="Author-info__social">
					<img src="lemon-img/Icons.png">
					</div>
					<div class="Author-info__title">About Lemon</div>
					<div class="Author-info__text">Over the fifteen-year life span of Food.com,we've<br>learned that - in addition to eating - sharing is<br>what you do best. And thanks to the 20 million of<br>you who come here each month, we now have<br>500,000 recipes to show for it. more than tons<br>crazy-tempting photos, troves of recipe reviews and<br>more than 2 million Facebook likes. That's a heck of<br> a lot of Food. Thank you!</div>
				</div>
			</div>
		</div>
	</div>
		<div class="comment">
			<div class="comment-info">
				<div class="comment-title">Post a Comment</div>
				<div class="comment-social">Facebook | Twitter</div>
				<div class="comment-form">
					<div class="comment-img"><img src="lemon-img/ava.png"></div>
					<form id="comment-form">
						<input type="" name="" class="comment-input">
						<button class="comment-btn">POST</button>
					</form>
				</div>
			</div>
		</div><!--Comment end-->
		<div class="comments">
			<div class="comments-title">Comments</div>
			<div class="comments-blok"></div>
		</div>	<!--comments end-->		
		<div class="back-navigator">
					
		</div><!--navigator end-->
		<div class="footer">
			<div class="footer-info">
					<div class="footer-wrap"><img class="footer-img" src="lemon-img/footer.png"></div>
					<div class="footer-wrap">home</div>
					<div class="footer-wrap">recipes</div>
					<div class="footer-wrap">photo galleries</div>
					<div class="footer-wrap">videos</div>
					<div class="footer-wrap">all catrgories</div>
					<div class="footer-wrap-right"><span><img src="lemon-img/CopyRight.png"> 2016-2020 lemon all right reserved</span><img class="footer-social" src="lemon-img/Icons.png">
					</div>
			</div>
		</div>
		<div class="footer-mob">
			<div class="container">
				<div class="row">
					<div class="footer__mob-wrap">home</div>
					<div class="footer__mob-wrap"></div>
					<div class="footer__mob-wrap"></div>
					<div class="footer__mob-wrap"></div>
					<div class="footer__mob-wrap"></div>
				</div>
			</div>
		</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="lemon.js"></script>
</body>
</html>