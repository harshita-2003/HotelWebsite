<?php 
    require('inc/essentials.php');
    adminlogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - settings</title>
    <?php require('inc/links.php')?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <style>
        #dashboard-bar{
            position: fixed;
            height:100%;
        }
        .custom-btn{
            background-color: teal;
            color:white;
        }
        .custom-btn:hover{
            background-color:teal;
            opacity: 70%;
        }
        @media screen and (max-width:990px) {
            #dashboard-bar{
                height: auto;
                width:100%;
            }
            #main-content{
                margin-top: 60px;
            }
        }
    </style>
</head>
<body>
    
<?php require('inc/header.php')?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">SETTINGS</h3>
                <!-- general setting -->
                <div class="card" >
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-3">General settings</h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa-solid fa-pen-to-square"></i> Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form>
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">General Setting</h5>
                                        
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label">Site Title</label>
                                            <input type="text" name="site_title" class="form-control shadow-none">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Address</label>
                                            <textarea name="site_about " rows="6" class="form-control shadow-none"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn text-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn custom-btn shadow-none">Submit</button>
                                    </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>

                        <h6 class="card-subtitle mb-1 fw-bold">Site title</h6>
                        <p class="card-text" id="site-title">content.</p>
                        <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                        <p class="card-text" id="site-about">content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php require('inc/scripts.php') ?>
    <script>
        let general_data;

        function get_general(){

            let site_title = document.getElementById('site-title');
            let site_about = document.getElementById('site-about');
            
            let xhr = new XMLHttpRequest();
            xhr.open("POST","ajax/settings_crud.php",true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

            xhr.onload =function(){
                general_data = JSON.parse(xhr.responseText);
                // console.log(general_data);

                site_title.innerText = general_data.site_title;
                site_about.innerText = general_data.site_about;
            }

            xhr.send('get-general');
        }

        window.onload = function(){
            get_general();
        }
    </script>
</body>
</html>