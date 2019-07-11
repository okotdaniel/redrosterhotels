<!doctype html>
<html lang="en">
<head>
<?php include 'admin_head.php'; ?>
</head>
<body>

<div class="wrapper">
    <?php include 'admin_sidebar.php'; ?>

    <div class="main-panel">
        <?php include 'admin_menu.php'; ?>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form action ="user.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Position</label>
                                                <input type="text" class="form-control"  name="position" placeholder="position" value="<?php ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control"  name="username" placeholder="Username" value="<?php ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" name="firstname" placeholder="Company" value="<?php ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" name ="lastname" placeholder="Last Name" value="<?php ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                       
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control" placeholder="Country" name="country" value="<?php ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>NIN(Pssport Number)</label>
                                                <input type="number" class="form-control" name="number">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select class="form-control">
                                                    <option>Male</option>
                                                    <option> Female </option>
                                                </select>
                                            </div>
                                        </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> Age </label>
                                            <input type="number" class="form-control" name="age">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> Religion </label>
                                            <select class="form-control">
                                                <option> Muslim </option>
                                                <option> christian </option>
                                                <option> others </option>
                                            </select>
                                        </div>
                                    </div>
            
                                    </div>

                                    <button type="submit" name ="save" class="btn btn-info btn-fill pull-right">save changes </button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>



                            <?php 
include 'admin_includes/pdo_connect.php';
class admin_reg extends pdo_connect{
    
    private $position;
    private $username;
    private $email;
    private $firstname;
    private $lastname;
    private $addres;
    private $country;
    private $nin;
    private $gender;
    private $age;
    private $religion;
    private $pdo;

    function __construct(){
        $this->position = $_POST['position'];
        $this->usernmae = $_POST['username'];
        $this->email = $_POST['email'];
        $this->firstname = $_POST['firstname'];
        $this->lastname = $_POST['lastname'];
        $this->address = $_POST['addres'];
        $this->country = $_POST['country'];
        $this->nin = $_POST['nin'];
        $this->gender = $_POST['gender'];
        $this->age = $_POST['age'];
        $this->eligion = $_POST['religion'];

    }
    function save_changes(){
        include_once 'admin_includes/pdo_connect.php';
        if(ISSET($_POST['save'])){
            $stmt = $pdo->query("INSERT into users
            (position, username,email,firstname,lastname,addres,country,nin,gender,age,religion)
            VALUES('$position','$username','$email','$firstname','$lastname',
            '$addres','$country','$nin','$gender','$age','$religion')");


        }
    }
}

$save = new admin_reg();
$save->save_changes();



?>


                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="..."/>

                                      <h4 class="title">Mike Andrew<br />
                                         <small>michael24</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> "Lamborghini Mercy <br>
                                                    Your chick she so thirsty <br>
                                                    I'm in that two seat Lambo"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <?php include 'admin_footer.php'; ?>

    </div>
</div>

</body>

<?php include 'admin_js.php'; ?>

</html>
