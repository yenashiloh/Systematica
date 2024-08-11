<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Post</title>

    @include('partials.links')
</head>
<style>
    img.rounded-circle {
        border: 2px solid #ddd;
        margin-top: 15px;
    }

    .dropdown-menu {
        min-width: 100px;
    }
</style>

<body>

    <!-- ======= Header ======= -->
    @include('partials.header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('partials.sidebar')
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">


        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <button type="button" class="btn w-100" data-bs-toggle="modal"
                            data-bs-target="#onYourMindModal"
                            style="background-color: rgb(224, 224, 224); height: 50px;">
                            What's on your mind?
                        </button>
                        <div class="modal fade" id="onYourMindModal" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h5 class="modal-title w-100" style="font-weight: bold;">Create a new post</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Text Field -->
                                        <div class="mb-3">

                                            <textarea class="form-control" id="postText" rows="4" placeholder="What's on your mind?"
                                                style="background-color: rgb(243, 243, 243);"></textarea>
                                        </div>
                                        <!-- Upload Photo Button -->
                                        <div class="mb-3">
                                            <button class="btn w-100" id="uploadPhotoBtn"
                                                style="
                                            background-color: rgb(243, 243, 243);
                                            height: 60px;
                                            display: flex; 
                                            align-items: center; 
                                            justify-content: center;
                                        ">
                                                Upload Photo
                                            </button>

                                        </div>
                                        <!-- Buttons -->
                                        <div class="d-grid gap-2">
                                            <button type="button" class="btn btn-primary">Post</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Basic Modal-->
                    </div>
                </div>
            </div>

            <div class="pagetitle">
                <h1>Posts</h1>

            </div><!-- End Page Title -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Post Header -->
                        <div class="d-flex align-items-center mb-3">
                            <!-- Profile Picture -->
                            <img src="../assets-user/img/profile-img.jpg" alt="Profile Picture" class="rounded-circle"
                                style="width: 50px; height: 50px; object-fit: cover;">

                            <!-- Post Information -->
                            <div class="ms-3 flex-grow-1">
                                <!-- Name and Privacy Settings -->
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <strong class="d-block mt-2">John Doe</strong>
                                        <div class="text-muted"><i class="fas fa-globe" style="color: #c0bebe"></i>
                                            Public</div>
                                    </div>
                                    <!-- Ellipsis Button -->
                                    <div class="dropdown">
                                        <button class="btn btn-link" type="button" id="dropdownMenuButton"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="#"><i class="fas fa-edit"></i>
                                                    Edit</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fas fa-trash"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Post Content -->
                        <div class="mb-3">
                            <!-- Caption -->
                            <p>This is a caption for the post. It describes the content or shares thoughts.</p>

                            <!-- Photo -->
                            <img src="post-photo.jpg" alt="Post Photo" class="img-fluid"
                                style="max-height: 400px; object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main><!-- End #main -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets-user/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets-user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets-user/vendor/chart.js/chart.umd.js"></script>
    <script src="../assets-user/vendor/echarts/echarts.min.js"></script>
    <script src="../assets-user/vendor/quill/quill.js"></script>
    <script src="../assets-user/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets-user/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets-user/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets-user/js/main.js"></script>

</body>

</html>
