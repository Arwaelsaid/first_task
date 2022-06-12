

<!doctype html>
<html lang="en">

<head>
    <title>Ecommerce</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-primary mt-5">
                <h4>
                    grade
                </h4>
            </div>
            <div class="col-4 offset-4  mt-5">
                <form action="<?PHP $_SERVER['PHP_SELF'];?>" method="POST">
                    <div class="form-group">
                        <label for="Name">Physics</label>
                        <input type="text" name="Physics" id="Physics" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    
                
                    <div class="form-group">
                        <label for="Name">Chemistry</label>
                        <input type="text" name="Chemistry" id="Chemistry" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    
                
                    <div class="form-group">
                        <label for="Name">Biology</label>
                        <input type="text" name="Biology" id="Biology" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                        <label for="Name">Mathematics</label>
                        <input type="text" name="Mathematics" id="Mathematics" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    
                
                    <div class="form-group">
                        <label for="Name">Computer</label>
                        <input type="text" name="Computer" id="Computer" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                                       <button class=" btn btn-outline-primary form-control"> Calculate </button>
                   
                 
  <?php
$Physics = $_POST['Physics'];
$Chemistry = $_POST['Chemistry'];
$Biology = $_POST['Biology'];
$Mathematics = $_POST['Mathematics'];
$Computer = $_POST['Computer'];

if($Physics<=100 && $Chemistry<=100 && $Biology<=100 && $Mathematics<=100 && $Computer<=100)
{
$sum = $Physics + $Chemistry + $Biology + $Mathematics + $Computer;
echo 'degree is '.$sum;

 $percent = $sum /500 * 100;
echo '<br>';
echo 'percentage:'.$percent;
}

else
{
echo 'error';
}

 






?>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>