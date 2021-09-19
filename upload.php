<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>studentPlatform</title>
</head>
<body>
    <div>
        <br>

        <div class="container heading text-center">
            <h1 class="text-center font-weight-bold">Add Event</h1>
        </div>
        

        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 col-1 formss text-center">
                    <form action="index.php" method="post" enctype="multipart/form-data" class="forms">
                        <div class="form-group text-center">
                            <label for="eventname">Event Name :</label>
                            <input type="text" name="eventname" id="event">
                        </div>

                        <div class="form-group text-center">
                            <label for="eventteam">Event Team :</label>
                            <input type="text" name="eventteam" id="event">
                        </div class="form-group text-center">

                        <div class="form-group text-center">
                            <label for="regform">reg link :</label>
                            <input type="text" name="regform" id="event">
                        </div>

                        <div class="form-group text-center">
                            <label for="file">Poster: </label>
                            <input type="file" name="file" id="file">
                        </div>
                        <div class="d-flex justify-content-center contactbtn text-center">
                        <input type="submit" name="submit" value="submit">
                        <!-- <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button> -->
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>