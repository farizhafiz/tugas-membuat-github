<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="height: 3000px;">
    <nav class="navbar navbar-expand navbar-dark bg-secondary sticky-top">
        <div class="container-lg">
            <a class="navbar-brand" href="#"><i class="bi bi-crown"></i> PEMADAM KETERLAMBATAN</a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Username
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-2">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> Profil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Setting</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-left"></i> logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-3">
                <nav class="navbar navbar-expand-lg bg-body-tertiary rounded border mt-2">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                                    <li class="nav-item">
                                        <a class="nav-link active link-light" aria-current="page" href="index.php"><i
                                                class="bi bi-house"></i> Menu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-dark" href="mahasiswa.php"><i class="bi bi-pen"></i>
                                            Mahasiswa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-dark" href="admin.php"><i class="bi bi-pen"></i>
                                            Admin</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-dark" href="dosen.php"><i class="bi bi-pen"></i>
                                            Dosen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-dark" href="kaprodi.php"><i class="bi bi-pen"></i>
                                            Kaprodi</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9 rounded mt-2">
                <div class="card">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa assumenda temporibus neque
                            ut? Dolores ipsam magni illum eveniet laboriosam molestiae exercitationem nostrum magnam
                            ullam. Iure sequi dolore itaque harum excepturi!</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed-bottom text-center mb-2">
            POLITEKNIK NEGERI LHOKSEUMAWE
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
