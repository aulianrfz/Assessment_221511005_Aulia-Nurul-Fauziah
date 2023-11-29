@extends('layout.content1')

<body>
    @section('card')
    <div class="row justify-content-center">
        <div class="col-8; align-items: center;">
            <div class="card">
                <div class="card-body">
                    <form action="/insertdatanota" method="POST" enctype="multipart/form-data"
                        onsubmit="return validateForm()">
                        <div style="display: flex; align-items: center;">
                            <h2 class="header-profil">DATA nota</h2>
                        </div>
                        <hr style="margin-top: 0px; margin-bottom: 20px; color:#000000;">
                        @csrf
                        <div class="container mb-4">
                            <div class="row-1">
                                <div id="formRiwayatContainer">

                                    <div class="mb-3">
                                        <label for="nota" class="form-label"></label>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>TglNota</th>
                                                    <th>JamNota</th>
                                                    <th>JumlahBelanja</th>
                                                    <th>Diskon</th>
                                                </tr>
                                            </thead>
                                            <tbody id="nota">
                                                <tr>
                                                    <td><input type="date" class="form-control" name="nota[0][TglNota]"
                                                            placeholder="TglNota" required></td>
                                                    <td><input type="time" class="form-control" name="nota[0][JamNota]"
                                                            placeholder="JamNota" required></td>
                                                    <td><input type="number" class="form-control"
                                                            name="nota[0][JumlahBelanja]" placeholder="JumlahBelanja"
                                                            required></td>
                                                    <td><input type="number" class="form-control" name="nota[0][Diskon]"
                                                            placeholder="Diskon" required></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <button type="button" class="btn btn-info" id="tambahnota"
                                            style="width: 120px;">
                                            <img src="image/plus_.png" alt="Icon"
                                                style="vertical-align: middle; margin-right: 10px; width: 20px;">
                                            Tambah
                                        </button>
                                        <button class="btn btn-success" style="float: right;" type="submit">
                                            Submit</button>
                                    </div>



                                </div>

                                <div class="row">
                                    <table class="table" style="margin-left: 10px; margin-right: 10px;">
                                        <thead>
                                            <tr>
                                                <th scope="col">Kode nota</th>
                                                <th scope="col">TglNota</th>
                                                <th scope="col">JamNota</th>
                                                <th scope="col">JumlahBelanja</th>
                                                <th scope="col">Diskon</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $nota)
                                            <tr>
                                                <td>{{ $nota-> KodeNota }}</td>
                                                <td>{{ $nota->TglNota }}</td>
                                                <td>{{ $nota->JamNota }}</td>
                                                <td>{{ $nota->JumlahBelanja }}</td>
                                                <td>{{ $nota->Diskon }}</td>
                                                <td>{{ $nota->Total }}</td>
                                                <!-- <td>
                                                    <a href="/tampilnota/{{ $nota->id }}"
                                                        class="btn btn-warning text-black">Edit</a>
                                                    <a href="/deletenota/{{ $nota->id }}"
                                                        class="btn btn-danger">Delete</a>

                                                </td> -->

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    <script>
        let notaIndex = 2;

        document.getElementById('tambahnota').addEventListener('click', function () {
            let newRow = document.createElement('tr');
            newRow.innerHTML = `
        <td><input type="text" class="form-control" name="nota[${notaIndex}][pendidikanFormal]" placeholder="Namanota Sekolah/Universitas"></td>
        <td><input type="text" class="form-control" name="nota[${notaIndex}][jurusan]" placeholder=""></td>
        <td><input type="text" class="form-control" name="nota[${notaIndex}][tahunPendidikan]" placeholder=""></td>
    `;
            document.getElementById('Pendidikan').appendChild(newRow);
            riwayatPekerjaanIndex++;
        });



    </script>
    <script src="{{ asset('admin') }}/vendors/base/vendor.bundle.base.js"></script>
    <script src="{{ asset('admin') }}/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('admin') }}/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="{{ asset('admin') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="{{ asset('admin') }}/js/off-canvas.js"></script>
    <script src="{{ asset('admin') }}/js/hoverable-collapse.js"></script>
    <script src="{{ asset('admin') }}/js/template.js"></script>
    <script src="{{ asset('admin') }}/js/dashboard.js"></script>
    <script src="{{ asset('admin') }}/js/data-table.js"></script>
    <script src="{{ asset('admin') }}/js/jquery.dataTables.js"></script>
    <script src="{{ asset('admin') }}/js/dataTables.bootstrap4.js"></script>
    <script src="{{ asset('admin') }}/js/jquery.cookie.js" type="text/javascript">
    </script>
    @endsection
</body>