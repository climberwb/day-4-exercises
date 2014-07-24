<h1>Welcome to the Cupcake Blog!</h1>

<?php

$articles = array();

$article = new stdClass();
$article->name = 'Frosting Adventures';
$article->author = 'Mr.Frosting';
$article->body = 'Applicake jujubes tart toffee unerdwear.com gummies powder
jelly beans toffee. Donut brownie marzipan toffee liquorice. Cupcake bear
claw dragée unerdwear.com sugar plum.';
$articles[] = $article;


$article = new stdClass();
$article->name = 'Sprinkles Craze';
$article->author = 'Missy Sprinkles';
$article->body = 'Tootsie roll muffin chocolate cake sugar plum marzipan
candy cake jelly-o macaroon. Toffee gingerbread carrot cake macaroon
brownie. Gummi bears gummi bears chocolate sugar plum unerdwear.com cookie
carrot cake lollipop gummies. Pudding danish chocolate cake marzipan carrot
cake pudding sugar plum cake gingerbread.';
$articles[] = $article;


$article = new stdClass();
$article->name = 'What\s Your Flavor?';
$article->author = 'Vanilla Ice';
$article->body = 'Candy canes caramels fruitcake croissant macaroon carrot
cake. Bear claw chocolate cake oat cake powder soufflé wafer candy pastry
dessert. Gummies lollipop pie jujubes gingerbread tiramisu applicake.';
$articles[] = $article;

foreach ($articles as $piece){
    print '<h2>' . $piece->name . '</h2>';
    print '<em>By: ' . $piece->author . '</em><br/>';
    print $piece->body . '<br/><br/>';

}



?><h1>Welcome to the Cupcake Blog!</h1>

<?php

$articles = array();

$article = new stdClass();
$article->name = 'Frosting Adventures';
$article->author = 'Mr.Frosting';
$article->body = 'Applicake jujubes tart toffee unerdwear.com gummies powder
jelly beans toffee. Donut brownie marzipan toffee liquorice. Cupcake bear
claw dragée unerdwear.com sugar plum.';
$articles[] = $article;
<h1>Welcome to the Cupcake Blog!</h1>

<?php

$articles = array();

$article = new stdClass();
$article->name = 'Frosting Adventures';
$article->author = 'Mr.Frosting';
$article->body = 'Applicake jujubes tart toffee unerdwear.com gummies powder
jelly beans toffee. Donut brownie marzipan toffee liquorice. Cupcake bear
claw dragée unerdwear.com sugar plum.';
$articles[] = $article;


$article = new stdClass();
$article->name = 'Sprinkles Craze';
$article->author = 'Missy Sprinkles';
$article->body = 'Tootsie roll muffin chocolate cake sugar plum marzipan
candy cake jelly-o macaroon. Toffee gingerbread carrot cake macaroon
brownie. Gummi bears gummi bears chocolate sugar plum unerdwear.com cookie
carrot cake lollipop gummies. Pudding danish chocolate cake marzipan carrot
cake pudding sugar plum cake gingerbread.';
$articles[] = $article;


$article = new stdClass();
$article->name = 'What\s Your Flavor?';
$article->author = 'Vanilla Ice';
$article->body = 'Candy canes caramels fruitcake croissant macaroon carrot
cake. Bear claw chocolate cake oat cake powder soufflé wafer candy pastry
dessert. Gummies lollipop pie jujubes gingerbread tiramisu applicake.';
$articles[] = $article;

foreach ($articles as $piece){
    print '<h2>' . $piece->name . '</h2>';
    print '<em>By: ' . $piece->author . '</em><br/>';
    print $piece->body . '<br/><br/>';

}



?>
