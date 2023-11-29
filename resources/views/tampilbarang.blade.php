@extends('layout.content1')

<body>
    @section('card')
    <div class="row justify-content-center">
        <div class="col-8; align-items: center;">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('updatedatabarang', ['id' => $barang[0]->id ]) }}" method="POST" enctype="multipart/form-data"
                        onsubmit="return validateForm()">
                        <div style="display: flex; align-items: center;">
                            <img src="image/education_.png" alt="Profil Image" style="margin-right: 15px; width: 30px;">
                            <h2 class="header-profil">DATA BARANG</h2>
                        </div>
                        <hr style="margin-top: 0px; margin-bottom: 20px; color:#000000;">
                        @csrf
                        @method('PUT')
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
                                                @foreach ($barang as $dataBarang)
                                                <tr>
                                                    <td><input type="text" class="form-control"
                                                            name="barang[{{ $dataBarang->id }}][NamaBarang]" placeholder="Nama Barang" value="{{ $dataBarang->NamaBarang }}"
                                                            required></td>
                                                    <td><input type="text" class="form-control"
                                                            name="barang[{{ $dataBarang->id }}][Satuan]" placeholder="Satuan" value="{{ $dataBarang->Satuan }}" required></td>
                                                    <td><input type="number" class="form-control"
                                                            name="barang[{{ $dataBarang->id }}][HargaSatuan]" placeholder="HargaSatuan" value="{{ $dataBarang->HargaSatuan }}">
                                                    </td>
                                                    <td><input type="number" class="form-control"
                                                            name="barang[{{ $dataBarang->id }}][Stok]" placeholder="Stok" value="{{ $dataBarang->Stok }}">
                                                    </td>
                                                </tr>
                                                @endforeach
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