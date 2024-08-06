<?php
    //connect to database
    $conn = mysqli_connect('localhost','admin','admin','chillfee');


    //check connection
    if(!$conn){
        echo 'Database error' . mysqli_connect_error();
    }

    $sql = 'SELECT title,ingredients,email FROM coffees';

    //make query & get result
    $result = mysqli_query($conn,$sql);

    //fetch the result row
    $coffees = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);
    mysqli_close($conn);

    // print_r($coffees);

?>


<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php'); ?>

<div class="container my-5">
    <div class="row">
        <?php foreach($coffees as $coffee){ ?>
            <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> <?php echo htmlspecialchars($coffee['title']); ?>  </h5>
                    <h6 class="card-subtitle mb-2 text-muted"> <?php echo htmlspecialchars($coffee['ingredients']); ?> </h6>
                    <a href="#" class="card-link">More Info</a>
                </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php include('templates/footer.php'); ?>
</html>