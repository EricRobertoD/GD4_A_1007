<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Register Page</title>
</head>

<body>
    <nav class="navbar navbar-bg bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/gd4_b_0589">PHP - Eric Roberto Djohan</a>
        </div>
    </nav>

    <div class="bg bg-light text-dark">
        <div class = "container min-vh-100 mt-5 d-flex align-items-center justify-content-center">
            <div class="card text-white bg-dark ma-5 shadow" style="min-width: 25rem;">
                <div class="card-header fw-bold"> Register </div>
                <div class="card-body">
                    <form action="../process/registerProcess.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input class="form-control" id="name" name="name" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputtEmail1" class="form-label">Phone Number</label>
                            <input class="form-control" id="phonenum" name="phonenum" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Membership</label>
                            <select class="form-select" aria-label="Default select example" name="membership" id="membership">
                                <option value="Reguler">Reguler</option>
                                <option value="Platinum">Platinum</option>
                                <option value="Gold">Gold</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input class="form-control" type="password" id="password" name="password">
                        </div>
                        <div class="d-grip gap-2">
                            <button type="submit" class="btn btn-primary" name="register">Register</button>
                        </div>
                    </form>
                    <p class="mt-2 mb-0">Have a account?
                        <a href="./loginPage.php" class="text-primary">Login here!</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>