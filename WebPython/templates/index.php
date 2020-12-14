{% extends "layout.html" %}

{% block content %}

<div class="jumbotron" style="margin-top:5%;">
    <h1>GNS</h1>
    <p class="lead">Penyedia Minuman Dan Makanan Kekinian</p>
    <p><a href="{{ url_for('belanja') }}" class="btn btn-primary btn-large">Berbelanja &raquo;</a></p>
</div>

<div class="row" style="text-align:center;">
    <div class="col-md-6">
        <h2>Produk Buatan Sendiri</h2>
        <p>
            Produk Ini Di Buat Dari Tangan Sendiri, Hasil Keringat Sendiri Yang Mana Ini Menjadi Suatu Kelebihan Produk Ini
        </p>
        <p><a class="btn btn-default" href="{{ url_for('belanja') }}">Belanja &raquo;</a></p>
    </div>
    <div class="col-md-6">
        <h2>Bahan Dasar</h2>
        <p>Bahan Dasar Produk Ini Menggunakan Bahan Dasar Yang Berkualitas Untuk Menjamin Kelezatan Produk Ini </p>
        <p><a class="btn btn-default" href="{{ url_for('belanja') }}">Belanja &raquo;</a></p>
    </div>
</div>

{% endblock %}
