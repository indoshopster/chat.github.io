## Apa itu Indoshopster Chat ?
indoshopster chat adalah produk yang berfungsi sebagai media chat whatsapp atau lebih tepatnya whatsapp client dengan penambahan bermacarm-macam fitur. tentunya fitur-fitur yang tersedia untuk membantu bisnis Anda.

## Apa saja fitur-fitur Indoshopster Chat ?
indoshopster sendiri sudah memiliki fitur dasar dari whatsapp, mulai dari kirim pesan, gambar ke orang-orang yang ada didaftar contact whatsapp kita. selain fitur setandar ini, indoshopster chat menyediakan fitur-fitur lain, yaitu :

1. Label
Fitur label akan sangat membantu Anda untuk memberikan tanda terhadap chat, contohnya jika anda ingin memberikan label untuk pesanan yang harus segera dikirim, atau belum membayar, itu semua terserah Anda.

2. New Message
sangat repot jika Anda dibatasi mengirim pesan kepada orang-orang yang ada didaftar kontak Anda. dengan adanya fitur ini bahkan Anda dapat mengirimkan pesan kepada orang-orang selain yang ada didalam daftar kontak Anda.

3. Advanced Filter
dalam Advanced filter terdapat 2 jenis filter pencarian :
a. pencarian berdasarkan label
b. pencarian berdasarkan tanggal/rentang waktu tertentu
Anda dapat mencari history chat dengan lebih cepat

4. quick reply / message template
fitur ini memudahkan Anda dalam membalas pesanan agar lebih cepat, karena sudah Anda buat templatenya. tanpa harus mengetik hal yang sama berulang2.

5. multiple user
dengan Indoshopster chat Anda dapat menggunakan 1 nomor whatsapp untuk banyak user/PC. sehingga Anda dapat mengurangi biaya operasional Anda.

6. Unlimited Staff
7. dan masih banyak lagi

## API Indoshopster Chat
selain menggunakan indoshopster chat untuk mengirim/menerima pesan, Anda juga dapat menggunakan API kami untuk mengirim pesan dari website Anda langsung ke customer. Mulai dari Mengirim rincian pemesanan, informasi nomor resi, dll.

## Cara menggunakan API Indoshopster Chat
1. Pastikan Anda telah terdaftar di Indoshopster Chat, jika belum klik Disini.
2. Pastikan qr code whatsapp sudah terscan dihalaman chat
3. Masuk kehalaman Setting.
4. Catat API Key yang tertera
5. Buat Template jika belum memiliki template dengan tipe Message
6. Setelah template berhasil dibuat, catat ID template yang tertera (untuk format/contoh template lihat disini)
7. tambahkan code berikut untuk mengirim pesan

## POST - sendWhatsappMessage
1. Javascript
```javascript
<script type="text/javascript">
  var params = {
    "api_key": "78HHJYO09188392",
	  "template_id": 104,
	  "phone_number": 6299475799378,
	  "data": {
		  "fullname": "Mr. Smith",
		  "order_id": 67,
	  }
  };
  
  $.ajax({
      data: params,
      url: 'http://chat.indoshopster.com:1212',                      
      success: function(data) {
          console.log(JSON.stringify(data));
      }
  });
</script>
```
