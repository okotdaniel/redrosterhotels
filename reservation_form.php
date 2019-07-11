<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reservation</title>


    <!----locally hosted css abd javascript files -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/fontawesome/css/font-awesome.min.css">
     <link rel='stylesheet' type="text/css" href ="assets/css/bootstrap.min.css">
     <link rel='stylesheet' type="text/css" href ="assets/css/index.css" >
     <!--jquery library and javascript -->
     <script src ="assets/js/jquery-3.4.1.min.js "></script>
     <script src ="assets/js/bootstrap.min.js "></script>
</head>
<body>
    <div class ="container">
        <form action="reserve.php" method="POST">
        <div class="form-group">
            <label> First Name </label>
            <input type="text" name="f_name" placeholder="First Name" class="form-control" required>
        </div>

        <div class="form-group">
            <label> Last Name </label>
            <input type="text" name ="l_name" placeholder="Last Name" class="form-control" required>
        </div>

        <div class="form-group">
            <label> Nationality </label>
            <input type="text" name ="l_name" placeholder="Last Name" class="form-control" required>
        </div>

        <div class="form-group">
            <label> Phone </label>
            <input type="text" name ="phone" placeholder="phone" class="form-control" required>
        </div>
        <div class="form-group">
            <label> Email </label>
            <input type="text" name ="email" placeholder="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label> Check In Date </label>
            <input type="text" name ="date" placeholder="Check In Date" class="form-control" required>
        </div>
        <div class="form-group">
            <label> Check Out Date </label>
            <input type="text" name ="date" placeholder="Check Out Date" class="form-control" required>
        </div>
        <div class="form-group col-xs-3">
            <label for="sel1">Adults</label>
                <select class="form-control " id="sel1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>more than 4</option>
                </select>
        </div>
        <div class="form-group col-xs-4">
            <label for="sel1">Children</label>
                <select class="form-control" id="sel1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>more than 4</option>
                </select>
        </div>
        
        <div class="form-group">
            <button class="btn btn-primary" name="Reserve"> Reserve </button>
        </div>
        </form>
    </div>
</body>
</html>