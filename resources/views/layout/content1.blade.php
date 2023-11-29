@extends('layout.sidebar')
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/tambahdata.css') }}">

    <title>Add Data</title>
</head>

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="container">
                    <nav class="navbar navbar-expand display">
                    </nav>
                    @yield('card')
                </div>
            </div>
        </div>
    </section>
</div>
@endsection


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
<style>
    .prev-next-buttons {
        text-align: center;
        margin-top: 20px;
    }

    .prev-button,
    .next-button {
        color: #000000;
        border: none;
        /* padding: 10px 20px; */
        cursor: pointer;
        font-size: 18px;
        margin-right: 10px;
        background: transparent;
        cursor: pointer;
        text-decoration: underline;
    }

    .prev-button:hover,
    .next-button:hover {
        text-decoration: none;
        /* Menghapus garis bawah pada hover (opsional) */
        color: #0056b3;
        /* Warna teks pada hover */
        background: transparent;
    }

    .slide-form {
        display: none;
    }
</style>


<script>

    function validateForm() {
        var tanggalLahir = document.getElementById("tanggalLahir").value;

        // Buat objek Date dari input tanggal lahir
        var dob = new Date(tanggalLahir);
        var today = new Date();

        // Hitung usia
        var age = today.getFullYear() - dob.getFullYear();

        // Periksa apakah tanggal lahir valid
        if (isNaN(age) || age < 0) {
            //   alert("Tanggal lahir tidak valid.");
            return false;
        }

        return true;
    }

    var currentSlide = 1;

    function showSlide(n) {
        var slides = document.getElementsByClassName("slide-form");
        if (n < 1) {
            currentSlide = 1;
        }
        if (n > slides.length) {
            currentSlide = slides.length;
        }
        for (var i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[currentSlide - 1].style.display = "block";
    }

    function goToSlide(n) {
        currentSlide = n;
        showSlide(n);
    }

    showSlide(1);

    function validateProfileAndNavigate(targetUrl) {
        // Add additional validation logic here
        var firstName = document.getElementsByName("firstName")[0].value;
        var lastName = document.getElementsByName("lastName")[0].value;
        var nomorTelepon = document.getElementsByName("nomorTelepon")[0].value;
        var emailUser = document.getElementsByName("emailUser")[0].value;
        var tanggalLahir = document.getElementById("tanggalLahir").value;
        var gender = document.getElementsByName("gender")[0].value;
        var country = document.getElementsByName("country")[0].value;
        var address = document.getElementsByName("address")[0].value;

        // Check if any of the required fields are empty
        if (firstName === '' || lastName === '' || nomorTelepon === '' || emailUser === '' || tanggalLahir === '' || gender === '' || country === '' || address === '') {
            alert("Dimohon untuk mengisi Data Profil terlebih dahulu.");
        } else {
            // If all required fields are filled, navigate to the target URL
            window.location.href = targetUrl;
        }
    }


</script>

</html>