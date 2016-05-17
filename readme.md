# Petunjuk Penggunaan Repo Remote

[![Join the chat at https://gitter.im/achmiral/tanyakost-codeigniter](https://badges.gitter.im/achmiral/tanyakost-codeigniter.svg)](https://gitter.im/achmiral/tanyakost-codeigniter?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

* Fork dulu repository [tanyakost-codeigniter](https://bitbucket.org/achmiral/tanyakost-codeigniter), dengan cara mengklik [fork](https://bitbucket.org/achmiral/tanyakost-codeigniter/fork) pada sidebar bitbucket.
* Kemudian buka repository hasil fork tadi, kemudian di clone, dengan cara mengklik Clone pada sidebar, kemudian pastekan di cmd atau di terminal.

# Petunjuk Penggunaan Repo Local
* Clone dulu repository hasil fork yang ada di akun masing - masin1. 2. g.
* Setiap sebelum melakukan pengeditan, pastikan repo local yang ada di komputer kita sudah update, dengan cara menjalankan perintah:

```
git pull origin master
```

* Edit file, sesuai keinginan, **Jangan lupa di tambahkan comment yang jelas di setiap barisnya**
* Jalankan perintah:

```
git add --all
```
* untuk menambahkan file hasil yang telah kita ubah ke **Staging Area Git**
* Terus jalankan perintah: 


```
git commit -m "pesan (contoh: tambah function tampil_kost)"
```

* kemudian lakukan git push ke origin ,dengan perintah : 


```
git push origin master
```

* kemudian buat pull request ke repository ini dengan cara klik **Create pull request** di repository akun masing masing

* jangan lupa di baris codingnya ditambahkan comment dengan bahasa yang jelas
