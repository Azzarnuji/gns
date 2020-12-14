"""
Routes and views for the flask application.
"""

from datetime import datetime
from flask import render_template, request, redirect, Flask
from flask_mysqldb import MySQL
import json

app = Flask(__name__)
mysql = MySQL(app)
app.config['MYSQL_HOST'] = "localhost"
app.config['MYSQL_USER'] = "HostLokal"
app.config['MYSQL_PASSWORD'] = "Azzar-1002"
app.config['MYSQL_DB'] = "gns"


@app.route('/')
@app.route('/home')
def home():
    """Renders the home page."""
    return render_template(
        'index.php',
        title='Home Page',
        year=datetime.now().year,
    )

@app.route('/contact')
def contact():
    """Renders the contact page."""
    return render_template(
        'contact.html',
        title='Contact',
        year=datetime.now().year,
        message='Your contact page.'
    )

@app.route('/about')
def about():
    """Renders the about page."""
    return render_template(
        'about.html',
        title='About',
        year=datetime.now().year,
        message='Your application description page.'
    )
@app.route('/belanja',methods=['POST','GET'])
def belanja():
    cur = mysql.connection.cursor()
    cur.execute("SELECT * FROM data")
    rv = cur.fetchall()
    cur.close()
    return render_template(
        'belanja.php',
        title = 'Belanja',
        computers=rv,
        year=datetime.now().year
        )
@app.route('/beli',methods=['POST','GET'])
def beli():
    id = request.args.get('id')
    barang = request.args.get('barang')
    return render_template(
        'beli.php',
        title = 'Beli',
        id = id,
        barang = barang,
        year=datetime.now().year
        )
@app.route('/lanjut',methods=['POST','GET'])
def lanjut():
    nama = request.args.get('nama')
    nohp = request.args.get('nohp')
    wilayah = request.args.get('wilayah')
    pesanan = request.args.get('pesanan')
    jumlahpesan = request.args.get('jumlahpesan')
    alamat = request.args.get('alamat')
    if wilayah == "Tambun":
        return redirect("https://api.whatsapp.com/send?phone=6285641845879&text=Saya%20Tertarik%20Dengan%20Produk%20Anda%20{}%0ANomor%20Hp%20Saya:%20{}%0AJumlah%20Pesanan:%20{}%0AWilayah:%20{}%0AAlamat:%20{}".format(pesanan,nohp,jumlahpesan,wilayah,alamat),302) 
    elif wilayah == "Jatiasih":
        return redirect("https://api.whatsapp.com/send?phone=6287749608861&text=Saya%20Tertarik%20Dengan%20Produk%20Anda%20{}%0ANomor%20Hp%20Saya:%20{}%0AJumlah%20Pesanan:%20{}%0AWilayah:%20{}%0AAlamat:%20{}".format(pesanan,nohp,jumlahpesan,wilayah,alamat),302)
    elif wilayah == "Klapa Nunggal":
        return redirect("https://api.whatsapp.com/send?phone=6283872836757&text=Saya%20Tertarik%20Dengan%20Produk%20Anda%20{}%0ANomor%20Hp%20Saya:%20{}%0AJumlah%20Pesanan:%20{}%0AWilayah:%20{}%0AAlamat:%20{}".format(pesanan,nohp,jumlahpesan,wilayah,alamat),302)
    elif wilayah == "Cibarusah":
        return redirect("https://api.whatsapp.com/send?phone=6281617351983&text=Saya%20Tertarik%20Dengan%20Produk%20Anda%20{}%0ANomor%20Hp%20Saya:%20{}%0AJumlah%20Pesanan:%20{}%0AWilayah:%20{}%0AAlamat:%20{}".format(pesanan,nohp,jumlahpesan,wilayah,alamat),302)
    else:
        return "Salah"

if __name__ == "__main__":
    app.run()