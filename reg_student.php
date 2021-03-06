<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Student Register</title>
</head>
<body>
<div class="w3-center">
    <img src="http://tahfizselangor.unisel.edu.my/unisel.png" alt="Universiti Selangor" class="top-logo">
    <img src="http://hafizhizers.000webhostapp.com/eComplaint/img/icon.JPG" alt="" class="top-logo">
</div>
<br>
<?php require_once "include/nav.php"; ?>
<div class="w3-container">
    <div class="w3-cell-row">
        <div class="w3-container w3-light-grey w3-cell" style="width: 200px;">
            <ul class="w3-ul">
                <li><a href="login.php"><img src="https://img.icons8.com/plasticine/2x/password.png" alt=""
                                             width="40px" height="40px">Login</a></li>

            </ul>
        </div>
        <div class="w3-cell-row">



            <div class="w3-container w3-cell">
                <h4 class="w3-center" id="mesej"></h4>
                <form action="" method="post" id="formRegisterStudent">
                <table class="w3-table w3-border">
                    <tbody>
                    <tr>
                        <th colspan="2" class="w3-center w3-light-grey">Student Registration / Daftar Pelajar</th>
                    </tr>
                    <tr>
                        <th width="20%">Student ID / ID Pelajar</th>
                        <td><input type="text" name="no_matrik" class="w3-input w3-border" autocomplete="off" id="no_matrik" required></td>
                    </tr>
                    <tr>
                        <th>Name / Nama</th>
                        <td><input type="text" name="name" class="w3-input w3-border" autocomplete="off" required></td>
                    </tr>
                    <tr>
                        <th>Email / Emel</th>
                        <td><input type="email" name="emel" class="w3-input w3-border" autocomplete="off" required></td>
                    </tr>
                    <tr>
                        <th>Phone No / No Telefon</th>
                        <td><input type="text" name="no_telefon" class="w3-input w3-border" autocomplete="off" required></td>
                    </tr>
                    <tr>
                        <th>Faculty / Fakulti</th>
                        <td>
                            <select name="fakulti" id="fakulti" class="w3-input w3-border" required>
                                <option value="">--Sila Pilih--</option>
                                <option value="Faculty Communication Visual Arts & Computing">Faculty Communication
                                    Visual Arts & Computing</option>
                                <option value="Faculty Engineering & Life Science">Faculty Engineering & Life
                                    Science</option>
                                <option value="Faculty Education & Science Social">Faculty Education & Science
                                    Social</option>
                                <option value="Faculty Business & Accounting">Faculty Business & Accounting</option>
                                <option value="Center of Foundation">Center of Foundation</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Course / Aliran</th>
                        <td><input type="text" name="aliran" class="w3-input w3-border" autocomplete="off" required></td>
                    </tr>
                    <tr>
                        <th>Password / Kata Laluan</th>
                        <td><input type="password" id="password" name="password" class="w3-input w3-border" required></td>
                    </tr>
                    <tr>
                        <th>Confirm Password / Sahkan Kata Laluan</th>
                        <td><input type="password" id="password2" name="password2" class="w3-input w3-border" required></td>
                    </tr>
                    <tr>
                        <th colspan="2" class="w3-center">
                            <input type="submit" name="login" class="w3-button w3-light-grey" value="Daftar">
                            <input type="reset" name="reset" class="w3-button w3-light-grey" value="Batal">
                        </th>

                    </tr>
                    </tbody>
                </table>
                </form>


            </div>



        </div>
        
    </div>


    <br>
    <?php require_once "include/footer.php"; ?>

</div>
</body>
<script src="js/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        // $('#no_matrik').on('focusout', function(){
        //     var val = $(this).val();
        //     console.log(val);
        //     // $('#validate_matrik').text(val);
        //     // alert(val);
        // });

        $('#formRegisterStudent').on('submit', function(e){
            e.preventDefault();

            var password = $('#password').val();
            var password2 = $('#password2').val();

            if (password !== password2) {
                // console.log('password not matching');
                 $('#mesej').text('Kata Laluan Tidak Sama');
            } else {
                // console.log(password+password2);
                var data = $(this).serialize();
                $.ajax({
                    url: "processRegStud.php",
                    method: "POST",
                    data: data,
                    success: function(data){
                        $('#mesej').html(data);
                    },
                    error: function() {
                        alert('error handling here');
                    }
                });
                $('#password').val('');
                $('#password2').val('');
                $('#fakulti').val('');
                $('#formRegisterStudent').trigger("reset");

            }
           

            

        });
    });
</script>
<style>
    .bg-danger{
        color: red;
    }
</style>
</html>