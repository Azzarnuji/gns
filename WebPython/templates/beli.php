{%extends "layout.html"%}
{% block content%}
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" style="margin-top:5%;" data-target="#exampleModal">
  Lanjut Pesan
</button>

<!-- Modal -->
<form action="{{ url_for('lanjut') }}" method="GET">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pesan {{barang}}</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama: </label>
            <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">No Hp</label>
            <input type="number" name="nohp" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Wilayah</label>
            <select class="form-control" name="wilayah" id="exampleFormControlSelect1">
              <option>Tambun</option>
              <option>Jatiasih</option>
              <option>Klapa Nunggal</option>
              <option>Cibarusah</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat: </label>
            <input type="text" class="form-control" name="alamat" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            
            <input type="text" name="pesanan" value="{{barang}}" hidden class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Jumlah Pesanan</label>
            <input type="number" name="jumlahpesan" class="form-control" id="exampleInputPassword1">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Pesan</button>
      </div>
    </div>
  </div>
</div>
</form>
{%endblock%}
