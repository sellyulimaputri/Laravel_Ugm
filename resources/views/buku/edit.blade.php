<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .container{
        width: 500px;
        margin-top: 10px;
    }
</style>    
<div class="container mx-5">
        <form action="{{route('buku.update',$buku->id)}}" method="post" >
            @csrf
            <div class="mb-3">
                <label  class="form-label">Judul</label>
                <input  class="form-control" value="{{$buku->judul}}" name="judul"aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                  <label class="form-label">Penulis</label>
                  <input class="form-control" value="{{$buku->penulis}}" name="penulis"aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input class="form-control" value="{{$buku->harga}}" name="harga"aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                      <label class="form-label">Tanggal Terbit</label>
                      <input class="form-control"value="{{$buku->tgl_terbit}}"  name="tgl_terbit"aria-describedby="emailHelp">
                    </div>
            <div>
                <button type="submit"class="btn btn-primary" >Simpan</button>
                <a href="/buku"class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>