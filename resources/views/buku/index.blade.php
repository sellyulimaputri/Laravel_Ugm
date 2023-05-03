<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .container{
        width: 1000px;
        margin-top: 10px
    }
</style>
<body class="container">
<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Harga</th>
            <th>Tanggal Terbit</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_buku as $buku)
            <tr>
                <td>{{++$no}}</td>
                <td>{{$buku -> judul}}</td>
                <td>{{$buku -> penulis}}</td>
                <td>{{"Rp".number_format($buku -> harga, 2, ',', '.')}}</td>
                <td>{{$buku -> tgl_terbit}}</td>
                <td><a href="{{route('buku.destroy',$buku->id)}}" class="btn btn-danger">Hapus</a>
                <a href="{{route('buku.edit',$buku->id)}}" class="btn btn-warning">Edit</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
<p><a class="btn btn-primary mx-5" href="{{route('buku.create')}}">Tambah Buku</a></p>

<h5 class="mx-5">Jumlah Buku : {{$data_buku->count('id')}}</h5>
<h5 class="mx-5">Total Harga Buku : {{"Rp".number_format($data_buku->sum('harga'))}}</h5>
</body>
