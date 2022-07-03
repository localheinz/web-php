--TEST--
sort no notes
--FILE--
<?php
require_once __DIR__ . "/../src/UserNotes/Sorter.php";

$notes = [];

$sorter = new phpweb\UserNotes\Sorter();
$sorter->sort($notes);
var_dump(array_map(function (array $note) {
    return [
        "ts" => $note["xwhen"],
        "upvotes" => $note["votes"]["up"],
        "downvotes" => $note["votes"]["down"],
        "score" => $note["score"],
        "total" => $note["total"],
        "rating" => $note["rating"],
        "sort" => $note["sort"],
    ];
}, $notes));
?>
--EXPECT--
array(0) {
}
