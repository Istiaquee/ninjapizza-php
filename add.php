<?php 

if(isset($_POST['submit'])){
    if(empty($_POST['email'])){
        echo "email is empty" . "</br>";
    }
    else{
        echo htmlspecialchars($_POST['email'])." -is your email" . "</br>";
    }
    if(empty($_POST['title'])){
        echo "title is empty" . "</br>";
    }
    else{
        echo htmlspecialchars($_POST['title'])." -is your title" . "</br>";
    }
    if(empty($_POST['ingredient'])){
        echo "ingredient is empty" . "</br>";
    }
    else{
        echo htmlspecialchars($_POST['ingredient'])." -is your ingredient" . "</br>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php'); ?>
<section>

    <div class="container widthsix">
        <div class="row">
            <div class="col-12">
                <div class="text-center mt-3">
                    <p class="fs-3 mb-0">Add a Coffee</p>
                </div>
                <form class="mb-3" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="coffeeemail" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Coffee Title</label>
                        <input type="text" class="form-control" id="coffeetitle" aria-describedby="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Coffee Ingredients (comma seperated)</label>
                        <input type="text" class="form-control" id="coffeeinge" aria-describedby="ingredient" name="ingredient">
                    </div>                
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary"name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include('templates/footer.php'); ?>
</html>