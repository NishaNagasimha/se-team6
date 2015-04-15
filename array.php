<?php
$fruits=array("banana","apple","grapes");
$val1=$fruits[0];
$val2=$fruits[1];
$val3=$fruits[2];
echo $val1," ",$val2," ",$val3."<br/>";
echo count($fruits);
$authors = array( "Steinbeck", "Kafka", "Tolkien", "Dickens" );
echo "The array: " . print_r( $authors, true )."<br/>";
echo " The current element is: " . current( $authors )."<br/>";
echo " The next element is: " . next( $authors )."<br/>";
echo " ...and its index is: " . key( $authors )."<br/>";
echo " The next element is: " . next( $authors )."<br/>";
echo " The previous element is: " . prev( $authors )."<br/>";
echo " The first element is: " . reset( $authors )."<br/>";
echo " The last element is: " . end( $authors )."<br/>";
echo " The previous element is: " . prev( $authors )."<br/>";
echo "---------------"."<br/>";
$myBooks = array(
array(
"title",
"author",
"pubYear" 
),
array(
"title",
"author",
"pubYear"
),
array(
"title",
"author",
"pubYear"
),
array(
"title",
"author",
"pubYear"
)
);

print_r ( $myBooks );

?>