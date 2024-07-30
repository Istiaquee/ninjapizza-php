<?php 

if(isset($_POST['submit'])){
    if(empty($_POST['email'])){
        echo "email is empty" . "</br>";
    }
    else{
        if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            echo 'Enter a valid Email';
        }
    }
    if(empty($_POST['title'])){
        echo "title is empty" . "</br>";
    }
    else{
        if(!preg_match("/^[a-zA-Z-' ]*$/",$_POST['title'])){
            echo 'Enter a valid title';
        }
    }
    if(empty($_POST['ingredient'])){
        echo 'Ingredient is empty';
    }
    else{
        if(!preg_match('/^([a-zA-Z0-9]+)(,[a-zA-Z0-9]+)*$/',$_POST['ingredient'])){
            echo 'Enter a comma seperator ingredients';
        }
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