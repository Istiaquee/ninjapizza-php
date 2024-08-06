<?php 
$email = $title = $ingredient = '';;
$errors = ['email'=>'', 'title'=>'', 'ingredient'=>''];

if(isset($_POST['submit'])){
    $email =$_POST['email'];
    $title =$_POST['title'];
    $ingredient = $_POST['ingredient'];
    //check email
    if(empty($_POST['email'])){
        $errors['email'] = 'email is empty';
    }else{
        if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'Enter a valid Email';
        }
    }


    //check title
    if(empty($_POST['title'])){
        $errors['title'] = 'title is empty';
    }else{
        if(!preg_match("/^[a-zA-Z-' ]*$/",$_POST['title'])){
            $errors['title']= 'Enter a valid title';
        }
    }


    //check ingredient
    if(empty($_POST['ingredient'])){
        $errors['ingredient']= 'Ingredient is empty';
    }else{
        if(!preg_match('/^([a-zA-Z0-9]+)(,[a-zA-Z0-9]+)*$/',$_POST['ingredient'])){
            $errors['ingredient']= 'Enter a comma seperator ingredients';
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
                        <input type="email" class="form-control" id="coffeeemail" aria-describedby="emailHelp" name="email" value="<?php echo htmlspecialchars($email); ?>">
                        <div id="errorEmail" class="text-danger"> <?php echo $errors['email']; ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Coffee Title</label>
                        <input type="text" class="form-control" id="coffeetitle" aria-describedby="titlehelp" name="title" value="<?php echo htmlspecialchars($title); ?>">
                        <div id="errortitle" class="text-danger"> <?php echo $errors['title']; ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Coffee Ingredients (comma seperated)</label>
                        <input type="text" class="form-control" id="coffeeinge" aria-describedby="ingredient" name="ingredient" value="<?php echo htmlspecialchars($ingredient); ?>">
                        <div id="erroringre" class="text-danger"> <?php echo $errors['ingredient']; ?></div>
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