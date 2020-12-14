{% extends "layout.html" %}
{% block content %}
<h1>Daftar Menu</h1>
{% for row in computers%}
<div class="container">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="/static/gambar/{{row.5}}" class="card-img" alt="..." style="margin-top:3px;margin-bottom:3px;">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{row.1}}</h5>
            <p class="card-text"><strong>Deskripsi: </strong>{{row.4}}</p>
            <p class="card-text"><strong>Harga: </strong>{{row.3}}</p>
            <a class="btn btn-primary" href="{{url_for('beli')}}?id={{row.0}}&barang={{row.1}}">Beli</a>
            <p class="card-text"><small class="text-muted">Production GNS {{year}}</small></p>
          </div>
        </div>
      </div>
    </div>
</div>
{% endfor%}
{% endblock%}