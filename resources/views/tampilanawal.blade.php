@extends('layout.sidebar')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="{{ asset('css/tampilanawal.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                    <div class="container mt-5">
                        

                </div>
            </div>
        </section>
    </div>
    @endsection

    <script>
        const typt = document.getElementById("typed-text");
        const text = "This website helps you make CV writing easier";
        let index = 0;

        function typeWriter() {
            if (index < text.length) {
                typedTextElement.innerHTML += text.charAt(index);
                index++;
                setTimeout(typeWriter, 100);
            } else {

                index = 0;
                typedTextElement.innerHTML = "";
                setTimeout(typeWriter, 100);
            }
        }
        window.onload = function () {
            typeWriter();
        };
        $(document).ready(func         {
            // Toggle the col            e of the sidebar when the SVG is clicked
            $("#svgNa            ").click(function () {
                le.log("SVG clicked!");
                $(".navbar").toggleClass("d-none"                             ;
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>