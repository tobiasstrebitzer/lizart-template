<?php 
include "config.php";
$tag = $_GET["tag"];

// GET ITEMS
$topItems = array();
$secItems = array();
foreach($config["blogItems"] as $blogItem) {
  $itemTags = explode(";", $blogItem[1]);
  if($itemTags[0] == $tag) {
    $topItems[$blogItem[0]] = $blogItem;
  }elseif(in_array($tag, $itemTags)) {
    $secItems[$blogItem[0]] = $blogItem;
  }
}

// SORT ITEMS
asort($topItems);
asort($secItems);
$retVal = array_merge($topItems, $secItems);

if(count($retVal) == 1) {
  $full = true;
}else{
  $full = false;
}
?>

<div id="content">
<?php foreach($retVal as $blogitem) { ?>
  <?php $title = $blogitem[0]; ?>
  <?php $class = $blogitem[1]; ?>
  <div style="opacity: 0;" data-id="<?php echo $title; ?>" data-type="<?php echo $class; ?>" class="blogitem <?php if($full === true) { echo "blogitem-full"; } ?>">
    <h1><?php echo $title; ?></h1>
    <?php for($i=0;$i<$blogitem[2];$i++) { ?>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <?php } ?>
  </div>
<?php } ?>
</div>