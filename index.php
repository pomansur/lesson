<?php

include __DIR__ . '\system\library\yascaner\vendor\autoload.php';

/**
 * Settings
 */
$key = '030d007f08bdddbf809ad32267f565d1';
$productId = 415763024;

/**
 * Init base class
 */
$scanner = new \FccScanner\Scanner($key);

$balance = $scanner->getBalance();
// $balance = (new \FccScanner\Model\Balance($key))->getBalance();

echo "<b>Balance</b><br>";
echo "Current: {$balance}<br>";

/* $info = $scanner->getInfo($productId);
// $info = new \FccScanner\Model\Info($key, $productId);

echo "<b>Info</b><br>";
echo "Name: {$info->getName()}<br>";
echo "Price: {$info->getPrice()}<hr>";

$price = $scanner->getPrice($productId);

echo "<b>Only price</b><br>";
echo "Price: {$price->getPrice()}<br>";
echo "Price updated: {$price->getPriceUpdated()}<hr>";

echo '<b>Prices</b><br>';
$prices = $scanner->getPrices([415763024, 415763025]);

foreach ($prices as $priceIndex => $price) {
    echo "{$priceIndex} => {$price->getPrice()}<br>";
}
echo '<hr>';
*/
echo "<b>Search</b><br>";
$search = $scanner->getSearchModel('Туалетная бумага Veiro');
echo "ID: {$search->getId()}<br>";
echo "Name: {$search->getName()}<br>";
echo "URL: {$search->getUrl()}<hr>";
/*
// All methods:
//
// $info->getName()
// $info->getUrl()
// $info->getCategoryId()
// $info->getBrandId()
// $info->getSpecsQuantity()
// $info->getReviewsQuantity()
// $info->getPhotosQuantity()
// $info->getRating()
// $info->getModof()
// $info->getPrice()
// $info->getPriceUpdated()


$reviews = $scanner->getReviews($productId, 10, 4);
// $reviews = $scanner->getReviews($productId);

echo "<b>Reviews:</b><br>";

foreach ($reviews as $review) {
    echo $review->uid . '<br>';
    echo $review->author . '<br>';
    echo $review->avatar . '<br>';
    echo $review->rating . '<br>';
    echo $review->pluses . '<br>';
    echo $review->minuses . '<br>';
    echo $review->comment . '<br>';
    echo $review->postdate . '<br>';

    if ($review->pictures) {
        foreach ($review->pictures as $picture) {
            echo $picture . '<br>';
        }
    }

    if ($review->subcomments) {
        foreach ($review->subcomments as $subcommentIndex => $subcomment) {
            echo $subcomment->author . '<br>';
            echo $subcomment->comment . '<br>';
            echo $subcomment->postdate . '<br>';
            echo $subcomment->avatar . '<br>';
        }
    }

    echo '<hr>';
}

$photos = $scanner->getPhotos($productId);
// $photos = $scanner->getPhotos($productId, '50x50');
// $photos = (new \FccScanner\Model\Photos($key, $productId))->getPictures('original');

echo "<b>Photos</b><br>";

foreach ($photos as $photoNumber => $photoCollection) {
    foreach ($photoCollection as $photoItem) {
        echo $photoItem->size . '  ' . $photoItem->url . '<br>';
    }

    echo "<br>";
}

echo "<hr>";

$specs = $scanner->getSpecs($productId);
// $specs = (new \FccScanner\Model\Specs($key, $productId))->getSpecifications();

echo "<b>Specifications</b><br><br>";

foreach ($specs as $specNumber => $specCollection) {

    foreach ($specCollection as $specCollectionNumber => $specCollectionItem) {

        if (is_string($specCollectionItem)) {
            echo '<b>' . $specCollectionItem . '</b><br>';
        }

        if (is_array($specCollectionItem)) {
            foreach ($specCollectionItem as $specCollectionItemParams) {

                echo $specCollectionItemParams->name . ' - "' . $specCollectionItemParams->value . '"<br>';
            }
        }

    }
}
*/
