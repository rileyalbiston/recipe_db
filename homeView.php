<?php 

require_once('nav.php');

?>

<?php foreach ($result as $results) { ?>

    <a href="singleController.php?id=<?php echo $results['recipe_id'] ?>"><h2><?php echo $results['recipe_name'] ?></h2></a>

    <p><?php echo "Serves: " . $results['recipe_servings']; ?></p>
    <p><?php echo "Date Added: " . $results['recipe_date']; ?></p>
    <p><?php echo $results['recipe_overview']; ?></p>
    
<?php } ?>


