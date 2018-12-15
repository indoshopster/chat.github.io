# Apa itu Indoshopster Chat ?
indoshopster chat adalah produk yang berfungsi sebagai media chat whatsapp atau lebih tepatnya whatsapp client dengan penambahan bermacarm-macam fitur. tentunya fitur-fitur yang tersedia untuk membantu bisnis Anda.

# Apa saja fitur-fitur Indoshopster Chat ?
indoshopster sendiri sudah memiliki fitur dasar dari whatsapp, mulai dari kirim pesan, gambar ke orang-orang yang ada didaftar contact whatsapp kita. selain fitur setandar ini, indoshopster chat menyediakan fitur-fitur lain, yaitu :

- Label

Fitur label akan sangat membantu Anda untuk memberikan tanda terhadap chat, contohnya jika anda ingin memberikan label untuk pesanan yang harus segera dikirim, atau belum membayar, itu semua terserah Anda.


- New Message

sangat repot jika Anda dibatasi mengirim pesan kepada orang-orang yang ada didaftar kontak Anda. dengan adanya fitur ini bahkan Anda dapat mengirimkan pesan kepada orang-orang selain yang ada didalam daftar kontak Anda.


- Advanced Filter

dalam Advanced filter terdapat 2 jenis filter pencarian :
a. pencarian berdasarkan label
b. pencarian berdasarkan tanggal/rentang waktu tertentu
Anda dapat mencari history chat dengan lebih cepat


- quick reply / message template

fitur ini memudahkan Anda dalam membalas pesanan agar lebih cepat, karena sudah Anda buat templatenya. tanpa harus mengetik hal yang sama berulang2.


- multiple user
dengan Indoshopster chat Anda dapat menggunakan 1 nomor whatsapp untuk banyak user/PC. sehingga Anda dapat mengurangi biaya operasional Anda.

- Unlimited Staff
- dan masih banyak lagi

# API Indoshopster Chat
selain menggunakan indoshopster chat untuk mengirim/menerima pesan, Anda juga dapat menggunakan API kami untuk mengirim pesan dari website Anda langsung ke customer. Mulai dari Mengirim rincian pemesanan, informasi nomor resi, dll.

[![Message Template](https://i.imgur.com/zB7qCAA.png "Message Template")](https://i.imgur.com/zB7qCAA.png "Message Template")


# Cara menggunakan API Indoshopster Chat
1. Pastikan Anda telah terdaftar di Indoshopster Chat, jika belum klik Disini.
2. Pastikan qr code whatsapp sudah terscan dihalaman chat
3. Masuk kehalaman Setting.
4. Catat API Key yang tertera
5. Buat Template jika belum memiliki template dengan tipe Message
6. Setelah template berhasil dibuat, catat ID template yang tertera (untuk format/contoh template lihat disini)
7. tambahkan code berikut untuk mengirim pesan

# Contoh mengirim pesan menggunakan javascript
```
<script type="text/javascript">
  var params = {
    "api_key": "YUUB787435673465GGsgr", 
    "template_id": 200043543856, 
    "phone_number": 6266324732846, // nomor telpon customer
    "data": { // pastikan data yang dikirin sesuai dengan template, nama key juga harus sama
	"fullname": "Mr. Smith", 
	"order_id": 67,
	"order_date": "2018-10-09 17:30:00"
    }
  };
  
  $.ajax({
      data: JSON.stringify(params),
      contentType: 'application/json',
      method: "POST",
      url: 'http://chat.indoshopster.com:1212/sendWhatsappMessage',                      
      success: function(data) {
      	  // callback
          console.log(data);
      }
  });
</script>
```

## Parameter - [Lihat versi jelasnya](https://github.com/indoshopster/chat#parameter)

[![Parameter](https://preview.ibb.co/heLyOA/Screen-Shot-2018-10-28-at-9-41-50-AM.png "Parameter")](https://preview.ibb.co/heLyOA/Screen-Shot-2018-10-28-at-9-41-50-AM.png "Parameter")]


## Response - [Lihat versi jelasnya](https://github.com/indoshopster/chat#response)

[![Response](https://preview.ibb.co/n8yXGV/Screen-Shot-2018-10-28-at-9-41-57-AM.png "Response")](https://preview.ibb.co/n8yXGV/Screen-Shot-2018-10-28-at-9-41-57-AM.png "Response")]



