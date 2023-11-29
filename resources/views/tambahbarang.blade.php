@extends('layout.content1')

<body>
    @section('card')
    <div class="row justify-content-center">
        <div class="col-8; align-items: center;">
            <div class="card">
                <div class="card-body">
                    <form action="/insertdatabarang" method="POST" enctype="multipart/form-data"
                        onsubmit="return validateForm()">
                        <div style="display: flex; align-items: center;">
                            <h2 class="header-profil">DATA BARANG</h2>
                        </div>
                        <hr style="margin-top: 0px; margin-bottom: 20px; color:#000000;">
                        @csrf
                        <div class="container mb-4">
                            <div class="row-1">
                                <div id="formRiwayatContainer">

                                    <div class="mb-3">
                                        <label for="barang" class="form-label"></label>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nama Barang</th>
                                                    <th>Satuan</th>
                                                    <th>Harga Satuan</th>
                                                    <th>Stok</th>
                                                </tr>
                                            </thead>
                                            <tbody id="Pendidikan">
                                                <tr>
                                                    <td><input type="text" class="form-control"
                                                            name="barang[0][NamaBarang]" placeholder="Nama Barang"
                                                            required></td>
                                                    <td><input type="number" class="form-control"
                                                            name="barang[0][Satuan]" placeholder="Satuan" required></td>
                                                    <td><input type="number" step="any" class="form-control"
                                                            name="barang[0][HargaSatuan]" placeholder="HargaSatuan">
                                                    </td>
                                                    <td><input type="number" class="form-control"
                                                            name="barang[0][Stok]" placeholder="Stok">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <button type="button" class="btn btn-info" id="tambahbarang"
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
                                                <th scope="col">Kode Barang</th>
                                                <th scope="col">Nama Barang</th>
                                                <th scope="col">Satuan</th>
                                                <th scope="col">Harga Satuan</th>
                                                <th scope="col">Stok</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no = 1;
                                            @endphp

                                            @foreach ($data as $barang)
                                            <tr>
                                                <td>{{ $barang-> KodeBarang }}</td>
                                                <td>{{ $barang->NamaBarang }}</td>
                                                <td>{{ $barang->Satuan }}</td>
                                                <td>{{ $barang->HargaSatuan }}</td>
                                                <td>{{ $barang->Stok }}</td>
                                                <td>
                                                    <a href="/tampilbarang/{{ $barang->id }}"
                                                        class="btn btn-warning text-black">Edit</a>
                                                    <a href="/deletebarang/{{ $barang->id }}"
                                                        class="btn btn-danger">Delete</a>

                                                </td>

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
        let barangIndex = 2;

        document.getElementById('tambahbarang').addEventListener('click', function () {
            let newRow = document.createElement('tr');
            newRow.innerHTML = `
        <td><input type="text" class="form-control" name="barang[${barangIndex}][pendidikanFormal]" placeholder="Nama Sekolah/Universitas"></td>
        <td><input type="text" class="form-control" name="barang[${barangIndex}][jurusan]" placeholder=""></td>
        <td><input type="text" class="form-control" name="barang[${barangIndex}][tahunPendidikan]" placeholder=""></td>
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