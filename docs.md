# Index

### Landing Page

# Landing Page

## search

Routes : http://api.minejobs.id/api/cari-iklan?q=keyword

Method : GET

Body :
|field|type|optional|
|-|-|-
|q|params|x|
Response : 
```
{
    "count": 1,
    "message": "data ditemukan",
    "keyword": "test",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 2,
                "id_perusahaan": 1,
                "posisi_pekerjaan": "test",
                "gaji_min": 10,
                "gaji_max": 10,
                "provinsi": "asd",
                "kota": "asd",
                "bidang_pekerjaan": "asd",
                "tingkat_pendidikan": "asd",
                "pengalaman_kerja": "asd",
                "persyaratan": "asd",
                "benefit_perusahaan": "asd",
                "url_header": "http://localhost:8000/storage/perusahaan/header/1603556815_5f9455cf74493.jpeg",
                "status_iklan": 0,
                "created_at": "2020-10-24 15:17:21",
                "updated_at": "2020-10-24 15:17:21",
                "deleted_at": null,
                "nama_perusahaan": "test",
                "alamat_perusahaan": "test",
                "tentang_perusahaan": "test",
                "url_banner": null,
                "foto_perusahaan": "",
                "website_perusahaan": "test",
                "jenis_industri": "test",
                "no_telp_perusahaan": "test",
                "no_npwp_perusahaan": "test",
                "url_npwp_perusahaan": "http://localhost:8000/storage/perusahaan/npwp1603552641_5f944581aa08b.jpeg"
            }
        ],
        "first_page_url": "http://localhost:8000/api/cari-iklan?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://localhost:8000/api/cari-iklan?page=1",
        "next_page_url": null,
        "path": "http://localhost:8000/api/cari-iklan",
        "per_page": 10,
        "prev_page_url": null,
        "to": 1,
        "total": 1
    }
}
```

## Get Iklan 
Routes : http://api.minejobs.id/api/get-iklan

Method : GET

Body :
|field|type|optional|
|-|-|-

Response : 
```
{
    "count": 1,
    "message": "data ditemukan",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 2,
                "id_perusahaan": 1,
                "posisi_pekerjaan": "test",
                "gaji_min": 10,
                "gaji_max": 10,
                "provinsi": "asd",
                "kota": "asd",
                "bidang_pekerjaan": "asd",
                "tingkat_pendidikan": "asd",
                "pengalaman_kerja": "asd",
                "persyaratan": "asd",
                "benefit_perusahaan": "asd",
                "url_header": "http://localhost:8000/storage/perusahaan/header/1603556815_5f9455cf74493.jpeg",
                "status_iklan": 0,
                "created_at": "2020-10-24 15:17:21",
                "updated_at": "2020-10-24 15:17:21",
                "deleted_at": null,
                "nama_perusahaan": "test",
                "alamat_perusahaan": "test",
                "tentang_perusahaan": "test",
                "url_banner": null,
                "foto_perusahaan": "",
                "website_perusahaan": "test",
                "jenis_industri": "test",
                "no_telp_perusahaan": "test",
                "no_npwp_perusahaan": "test",
                "url_npwp_perusahaan": "http://localhost:8000/storage/perusahaan/npwp1603552641_5f944581aa08b.jpeg"
            }
        ],
        "first_page_url": "http://localhost:8000/api/get-iklan?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://localhost:8000/api/get-iklan?page=1",
        "next_page_url": null,
        "path": "http://localhost:8000/api/get-iklan",
        "per_page": 10,
        "prev_page_url": null,
        "to": 1,
        "total": 1
    }
}
```

## Login by email 
Routes : {{url}}/api/kandidat/login

Method : POST

Body :
|field|type|optional|
|-|-|-|
|email|string|x|
|password|string|x|
|password_confirmation|string|x|

Response : 
```
{
    "status": 200,
    "messages": "Login Success",
    "user": {
        "id": 1,
        "socialite_id": null,
        "socialite_provider": null,
        "email": "test@gmail2.com",
        "status_akun": 0,
        "created_at": "2020-10-24 14:24:19",
        "updated_at": "2020-10-24 14:24:19",
        "deleted_at": null
    },
    "data": [],
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9rYW5kaWRhdFwvbG9naW4iLCJpYXQiOjE2MDM1OTE0NTEsImV4cCI6MTYwMzU5NTA1MSwibmJmIjoxNjAzNTkxNDUxLCJqdGkiOiJUR1o4UVVuTXdkdDhKV3NYIiwic3ViIjoxLCJwcnYiOiJkOGRmMTk4MTI3N2JmOTU2OGM3ZGQzZmUxYzc1MzA0ODY4NTZhMTQ2In0.-c1gwkMoH3mIwadiq6KDQBqKz55BhjviPxPmYJQCfS0"
}
```

## Register by email 
Routes : {{url}}/api/kandidat/register

Method : POST

Body :
|field|type|optional|
|-|-|-|
|email|string|x|
|password|string|x|
|password_confirmation|string|x|

Response : 
```
{
    "user": {
        "email": "test@gmail3.com",
        "updated_at": "2020-10-25 02:05:44",
        "created_at": "2020-10-25 02:05:44",
        "id": 2
    },
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9rYW5kaWRhdFwvcmVnaXN0ZXIiLCJpYXQiOjE2MDM1OTE1NDksImV4cCI6MTYwMzU5NTE0OSwibmJmIjoxNjAzNTkxNTQ5LCJqdGkiOiJzR2hRaUtWWmxVWTN4OExIIiwic3ViIjoyLCJwcnYiOiJkOGRmMTk4MTI3N2JmOTU2OGM3ZGQzZmUxYzc1MzA0ODY4NTZhMTQ2In0.TE3WgMQCdFgSZ34jzmx2LfXHM3PEzsSXJXbJc1kBUz40"
}
```

## Login by google 
Routes : {{url}}/api/kandidat/auth/google

Method : GET

Body :
|field|type|optional|
|-|-|-

Response : 
```
{
"status": 200,
"messages": "success",
"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkubWluZWpvYnMuaWRcL2FwaVwvYXV0aFwvZ29vZ2xlXC9jYWxsYmFja1wva2FuZGlkYXQiLCJpYXQiOjE2MDM2MDgwOTgsImV4cCI6MTYwMzYxMTY5OCwibmJmIjoxNjAzNjA4MDk4LCJqdGkiOiJWRWpHTG4xMjliWHFtRVlIIiwic3ViIjo0LCJwcnYiOiJkOGRmMTk4MTI3N2JmOTU2OGM3ZGQzZmUxYzc1MzA0ODY4NTZhMTQ2In0.61RnfCs5Z-uA_LlAQrCYYiAU9_ZNk9OQunzR1Rx-vxo",
"user": {
"token": "ya29.a0AfH6SMAkiYWaaawY514e46DmovyH7kC7W2uQ2g8mTq1LWy_9frJNrrQylF1t0tUBI4b4GffR8cg_8A_jSvYsjNWmVXaLr-2522gbF7SJEuAnIF9t2rQ9Wk3_vMuLsuxa0MWNXbXuen9kfOnu4twsx8j7ShUTmgzbgvJu",
"refreshToken": null,
"expiresIn": 3599,
"id": "102795684797921917309",
"nickname": null,
"name": "Projects Andrepelealu",
"email": "projects.andrepelealu@gmail.com",
"avatar": "https://lh6.googleusercontent.com/-QXL1YxuoHrs/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucncSsaJfqvdmev7dKgmlWFhQ4Q06Q/s96-c/photo.jpg",
"user": {
"sub": "102795684797921917309",
"name": "Projects Andrepelealu",
"given_name": "Projects",
"family_name": "Andrepelealu",
"picture": "https://lh6.googleusercontent.com/-QXL1YxuoHrs/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucncSsaJfqvdmev7dKgmlWFhQ4Q06Q/s96-c/photo.jpg",
"email": "projects.andrepelealu@gmail.com",
"email_verified": true,
"locale": "en",
"id": "102795684797921917309",
"verified_email": true,
"link": null
},
"avatar_original": "https://lh6.googleusercontent.com/-QXL1YxuoHrs/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucncSsaJfqvdmev7dKgmlWFhQ4Q06Q/s96-c/photo.jpg"
}
}
```
Note: token yg digunakan yg berada diluar object user

## Register by google 
Routes : http://api.minejobs.id/api/kandidat/auth/google

Method : GET

Body :
|field|type|optional|
|-|-|-

Response : 
```
{
    "status": 200,
    "messages": "success",
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.         eyJpc3MiOiJodHRwOlwvXC9hcGkubWluZWpvYnMuaWRcL2FwaVwvYXV0aFwvZ29vZ2xlXC9jYWxsYmFja1wva2FuZGlkYXQiLCJpYXQiOjE2MDM2MDgwOTgsImV4cCI6MTYwMzYxMTY5OCwibmJmIjoxNjAzNjA4MDk4LCJqdGkiOiJWRWpHTG4xMjliWHFtRVlIIiwic3ViIjo0LCJwcnYiOiJkOGRmMTk4MTI3N2JmOTU2OGM3ZGQzZmUxYzc1MzA0ODY4NTZhMTQ2In0.61RnfCs5Z-uA_LlAQrCYYiAU9_ZNk9OQunzR1Rx-vxo",
    "user": {
        "token": "ya29.a0AfH6SMAkiYWaaawY514e46DmovyH7kC7W2uQ2g8mTq1LWy_9frJNrrQylF1t0tUBI4b4GffR8cg_8A_jSvYsjNWmVXaLr-2522gbF7SJEuAnIF9t2rQ9Wk3_vMuLsuxa0MWNXbXuen9kfOnu4twsx8j7ShUTmgzbgvJu",
        "refreshToken": null,
        "expiresIn": 3599,
        "id": "102795684797921917309",
        "nickname": null,
        "name": "Projects Andrepelealu",
        "email": "projects.andrepelealu@gmail.com",
        "avatar": "https://lh6.googleusercontent.com/-QXL1YxuoHrs/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucncSsaJfqvdmev7dKgmlWFhQ4Q06Q/s96-c/photo.jpg",
        "user": {
        "sub": "102795684797921917309",
        "name": "Projects Andrepelealu",
        "given_name": "Projects",
        "family_name": "Andrepelealu",
        "picture": "https://lh6.googleusercontent.com/-QXL1YxuoHrs/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucncSsaJfqvdmev7dKgmlWFhQ4Q06Q/s96-c/photo.jpg",
        "email": "projects.andrepelealu@gmail.com",
        "email_verified": true,
        "locale": "en",
        "id": "102795684797921917309",
        "verified_email": true,
        "link": null
        },
    "avatar_original": "https://lh6.googleusercontent.com/-QXL1YxuoHrs/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucncSsaJfqvdmev7dKgmlWFhQ4Q06Q/s96-c/photo.jpg"
    }
}
```
Note: token yg digunakan yg berada diluar object user

-----
# Data Pengalaman
## Create 

Routes : {{url}}/api/pengalaman

Method : POST

Body :
|field|type|optional|
|-|-|-|
|id_kandidat|int|x|
|posisi_pekerjaan|string|x|
|nama_perusahaan|string|x|
|bulan_mulai|string|x|
|bulan_selesai|string|x|
|tahun_mulai|string|x|
|tahun_selesai|string|x|
|jabatan|string|x|
|gaji|string|x|
|deskripsi_pekerjaan|string|x|



Response : 
```
{
    "message": "berhasil post",
    "data": {
        "id_kandidat": "1",
        "posisi_pekerjaan": "posisi 1",
        "nama_perusahaan": "test cobaa",
        "bulan_mulai": "januari",
        "bulan_selesai": "februari",
        "tahun_mulai": "2019",
        "tahun_selesai": "2020",
        "jabatan": "test jabatan",
        "gaji": "124214",
        "deskripsi_pekerjaan": "ini deskripsi",
        "updated_at": "2020-10-25 16:53:12",
        "created_at": "2020-10-25 16:53:12",
        "id": 1
    }
}
```
note : 

## Get
Routes : {{url}}/api/pengalaman/{id}

Method : GET

Body :
|field|type|optional|
|-|-|-

Response : 
```
{
    "count": 1,
    "message": "data ditemukan",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "id_kandidat": 1,
                "posisi_pekerjaan": "posisi 1",
                "nama_perusahaan": "test cobaa",
                "bulan_mulai": "januari",
                "bulan_selesai": "februari",
                "tahun_mulai": "2019",
                "tahun_selesai": "2020",
                "jabatan": "test jabatan",
                "gaji": 124214,
                "deskripsi_pekerjaan": "ini deskripsi",
                "created_at": "2020-10-25 16:53:12",
                "updated_at": "2020-10-25 16:53:12",
                "deleted_at": null
            }
        ],
        "first_page_url": "http://api.minejobs.id/api/pengalaman/1?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://api.minejobs.id/api/pengalaman/1?page=1",
        "next_page_url": null,
        "path": "http://api.minejobs.id/api/pengalaman/1",
        "per_page": 10,
        "prev_page_url": null,
        "to": 1,
        "total": 1
    }
}
```
Notes : id yang digunakan id kandidat
## Edit
Routes : {{url}}/api/pengalaman/1

Method : PUT

Body :
|field|type|optional|
|-|-|-|
|id_kandidat|int|x|
|posisi_pekerjaan|string|x|
|nama_perusahaan|string|x|
|bulan_mulai|string|x|
|bulan_selesai|string|x|
|tahun_mulai|string|x|
|tahun_selesai|string|x|
|jabatan|string|x|
|gaji|string|x|
|deskripsi_pekerjaan|string|x|

Response : 
```
{
    "message": "Berhasil Update",
    "data": {
        "id": 1,
        "id_kandidat": 1,
        "posisi_pekerjaan": "posisi 1",
        "nama_perusahaan": "test cobaa",
        "bulan_mulai": "januari",
        "bulan_selesai": "2020",
        "tahun_mulai": "2019",
        "tahun_selesai": "2020",
        "jabatan": "test jabatan",
        "gaji": "124214",
        "deskripsi_pekerjaan": "ini di edit",
        "created_at": "2020-10-25 16:53:12",
        "updated_at": "2020-10-25 16:55:05",
        "deleted_at": null
    }
}
```


Notes on Data Pribadi : 
```
Pada saat update semue field harus dikirim dengan memperbaharui data yang di update
```
-------------
# Pendidikan
## Create
Routes : {{url}}/api/pendidikan

Method : POST

Body :
|field|type|optional|
|-|-|-|
|id_kandidat|int|x|
|jurusan|string|x|
|tahun_mulai|string|x|
|tahun_selesai|string|x|
|nama_instansi|string|x|
|jenjang_pendidikan|string|x|


Response : 
```
{
    "id_kandidat":"1",
    "jurusan":"ipa",
    "tahun_mulai":"2019",
    "tahun_selesai":"2020",
    "nama_instansi":"sma 6",
    "jenjang_pendidikan":"sma"
}
```

## Get
Routes : {{url}}/api/pendidikan/{id}

Method : GET

Body :
|field|type|optional|
|-|-|-

Response : 
```
{
    "count": 1,
    "message": "data ditemukan",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "id_kandidat": 1,
                "jenjang_pendidikan": "sma",
                "jurusan": "ipa",
                "tahun_mulai": "2019",
                "tahun_selesai": "2020",
                "nama_instansi": "sma 6",
                "created_at": "2020-10-25 07:31:35",
                "updated_at": "2020-10-25 07:31:35",
                "deleted_at": null
            }
        ],
        "first_page_url": "http://api.minejobs.id/api/pendidikan/1?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://api.minejobs.id/api/pendidikan/1?page=1",
        "next_page_url": null,
        "path": "http://api.minejobs.id/api/pendidikan/1",
        "per_page": 10,
        "prev_page_url": null,
        "to": 1,
        "total": 1
    }
}
```
note : id yang digunakan, id_kandidat

## Edit
Routes : {{url}}/api/pendidikan/{id}

Method : PUT

Body :
|field|type|optional|
|-|-|-|
|id_kandidat|int|x|
|jurusan|string|x|
|tahun_mulai|string|x|
|tahun_selesai|string|x|
|nama_instansi|string|x|
|jenjang_pendidikan|string|x|

Response : 
```
{
    "message": "Berhasil Update",
    "data": {
        "id": 1,
        "id_kandidat": "1",
        "jenjang_pendidikan": "di edit",
        "jurusan": "ipa",
        "tahun_mulai": "2019",
        "tahun_selesai": "DI UPDATE",
        "nama_instansi": "sma 6",
        "created_at": "2020-10-25 07:31:35",
        "updated_at": "2020-10-25 07:37:26",
        "deleted_at": null
    }
}
```
notes : id yang digunakan id kandidat

-------

# Keahlian
## Create
Routes : {{url}}/api/keahlian

Method : POST

Body :
|field|type|optional|
|data|arr of object|x|
|id_kandidat|int|x|
|nama_keahlian|string|x|
|tingkatan|string|x|

Response : 
```
{
    "message": "berhasil post",
    "data": [
        {
            "id_kandidat": "1",
            "nama_keahlian": "menulis",
            "tingkatan": "menengah"
        },
        {
            "id_kandidat": "1",
            "nama_keahlian": "kedua",
            "tingkatan": "menengah"
        }
    ]
}
```

## Get
Routes : {{url}}/api/keahlian/{id}

Method : GET

Body :
|field|type|optional|
|-|-|-

Response : 
```
{
    "count": 2,
    "message": "data ditemukan",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "id_kandidat": 1,
                "nama_keahlian": "menulis",
                "tingkatan": "menengah",
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 2,
                "id_kandidat": 1,
                "nama_keahlian": "kedua",
                "tingkatan": "menengah",
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            }
        ],
        "first_page_url": "http://api.minejobs.id/api/keahlian/1?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://api.minejobs.id/api/keahlian/1?page=1",
        "next_page_url": null,
        "path": "http://api.minejobs.id/api/keahlian/1",
        "per_page": 10,
        "prev_page_url": null,
        "to": 2,
        "total": 2
    }
}
```

## Edit
Routes : {{url}}/api/pendidikan/{id}

Method : PUT

Body :
|field|type|optional|
|id_kandidat|int|x|
|nama_keahlian|string|x|
|tingkatan|string|x|


Response : 
```
{
    "message": "Berhasil Update",
    "data": {
        "id": 1,
        "id_kandidat": "1",
        "nama_keahlian": "baru",
        "tingkatan": "di edit",
        "created_at": null,
        "updated_at": "2020-10-25 13:31:48",
        "deleted_at": null
    }
}
```
note: id yang digunakan id keahlian

-------

# Bahasa
## Create
Routes : {{url}}/api/bahasa

Method : POST

Body :
|field|type|optional|
|-|-|-|
|data|arr of obj|x|
|id_kandidat|int|x|
|bahasa_dikuasai|string|x|
|kemampuan_verbal|string|x|
|kemampuan_tulisan|string|x|

Response : 
```
{
    "message": "berhasil post",
    "data": [
        {
            "id_kandidat": "1",
            "bahasa_dikuasai": "indonesia",
            "kemampuan_verbal": "menengah",
            "kemampuan_tulisan": "menengah"
        },
        {
            "id_kandidat": "1",
            "bahasa_dikuasai": "kedua",
            "kemampuan_verbal": "menengah",
            "kemampuan_tulisan": "menengah"
        }
    ]
}
```

## Get
Routes : {{url}}/api/bahasa/{id}

Method : GET

Body :
|field|type|optional|
|-|-|-|


Response : 
```
{
    "count": 2,
    "message": "data ditemukan",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "id_kandidat": 1,
                "bahasa_dikuasai": "indonesia",
                "kemampuan_verbal": "menengah",
                "kemampuan_tulisan": "menengah",
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 2,
                "id_kandidat": 1,
                "bahasa_dikuasai": "kedua",
                "kemampuan_verbal": "menengah",
                "kemampuan_tulisan": "menengah",
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            }
        ],
        "first_page_url": "http://api.minejobs.id/api/bahasa/1?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://api.minejobs.id/api/bahasa/1?page=1",
        "next_page_url": null,
        "path": "http://api.minejobs.id/api/bahasa/1",
        "per_page": 10,
        "prev_page_url": null,
        "to": 2,
        "total": 2
    }
}
```
note: id yang digunakan di params, id kandidat
## Edit
Routes : {{url}}/api/bahasa/1

Method : PUT

Body :
|field|type|optional|
|-|-|-|
|id_kandidat|int|x|
|bahasa_dikuasai|string|x|
|kemampuan_verbal|string|x|
|kemampuan_tulisan|string|x|


Response : 
```
{
    "message": "Berhasil Update",
    "data": {
        "id": 1,
        "id_kandidat": "1",
        "bahasa_dikuasai": "indonesia",
        "kemampuan_verbal": "di edit",
        "kemampuan_tulisan": "menengah",
        "created_at": null,
        "updated_at": "2020-10-25 13:38:18",
        "deleted_at": null
    }
}
```
notes : id yang digunakan di params, id bahasa

-------
# Preferensi
## Create
Routes : {{url}}/api/preferensi-pekerjaan

Method : POST

Body :
|field|type|optional|
|-|-|-|
|id_kandidat|int|x|
|gaji_diharapkan|int|x|
|provinsi|int|x|
|kota|int|x|
|bidang_pekerjaan|int|x|


Response : 
```
{
    "message": "berhasil post",
    "data": {
        "id_kandidat": "1",
        "gaji_diharapkan": "30000000",
        "provinsi": "jawa tengah",
        "kota": "semarang",
        "bidang_pekerjaan": "teknologi informasi",
        "updated_at": "2020-10-25 13:44:23",
        "created_at": "2020-10-25 13:44:23",
        "id": 1
    }
}
```

## Get
Routes : {{url}}/api/preferensi-pekerjaan/1

Method : GET

Body :
|field|type|optional|
|-|-|-

Response : 
```
{
    "count": 1,
    "message": "data ditemukan",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "id_kandidat": 1,
                "gaji_diharapkan": 30000000,
                "provinsi": "jawa tengah",
                "kota": "semarang",
                "bidang_pekerjaan": "teknologi informasi",
                "created_at": "2020-10-25 13:44:23",
                "updated_at": "2020-10-25 13:44:23",
                "deleted_at": null
            }
        ],
        "first_page_url": "http://api.minejobs.id/api/preferensi-pekerjaan/1?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://api.minejobs.id/api/preferensi-pekerjaan/1?page=1",
        "next_page_url": null,
        "path": "http://api.minejobs.id/api/preferensi-pekerjaan/1",
        "per_page": 10,
        "prev_page_url": null,
        "to": 1,
        "total": 1
    }
}
```

## Edit
Routes : {{url}}/api/preferensi-pekerjaan/1

Method : PUT

Body :
|field|type|optional|
|-|-|-|
|id_kandidat|int|x|
|gaji_diharapkan|int|x|
|provinsi|int|x|
|kota|int|x|
|bidang_pekerjaan|int|x|


Response : 
```
{
    "message": "Berhasil Update",
    "data": {
        "id": 1,
        "id_kandidat": "1",
        "gaji_diharapkan": "30000000",
        "provinsi": "jawa tengah",
        "kota": "semarang",
        "bidang_pekerjaan": "teknologi di edit",
        "created_at": "2020-10-25 13:44:23",
        "updated_at": "2020-10-25 13:47:45",
        "deleted_at": null
    }
}
```


Note : id params = id preferensi

-------

# Data Diri
## Create
Routes : {{url}}/api/data-pribadi/post

Method : POST

Body :
|field|type|optional|
|-|-|-|
|id_kandidat|int|x|
|nama_depan|string|x|
|nama_belakang|string|x|
|nomor_telepon|string|x|
|provinsi|string|x|
|kota|string|x|
|tentang|string|x|
|image|file|x|
Response : 
```
{
    "message": "berhasil post",
    "data": {
        "id_kandidat": "1",
        "nama_depan": "test",
        "nama_belakang": "test",
        "nomor_telepon": "3242",
        "provinsi": "saf",
        "kota": "asf",
        "tentang": "adf",
        "foto_profile": "http://api.minejobs.id/storage/user/1603633935_5f95830f211d2.jpeg",
        "updated_at": "2020-10-25 13:52:15",
        "created_at": "2020-10-25 13:52:15",
        "id": 4
    }
}
```

## Get
Routes : {{url}}/api/data-pribadi/{id}

Method : GET

Body :
|field|type|optional|
|-|-|-|

Response : 
```
{
    "count": 1,
    "message": "data ditemukan",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 4,
                "id_kandidat": 1,
                "nama_depan": "test",
                "nama_belakang": "test",
                "nomor_telepon": "3242",
                "provinsi": "saf",
                "kota": "asf",
                "tentang": "adf",
                "foto_profile": "http://api.minejobs.id/storage/user/1603633935_5f95830f211d2.jpeg",
                "created_at": "2020-10-25 13:52:15",
                "updated_at": "2020-10-25 13:52:15",
                "deleted_at": null
            }
        ],
        "first_page_url": "http://api.minejobs.id/api/data-pribadi/1?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://api.minejobs.id/api/data-pribadi/1?page=1",
        "next_page_url": null,
        "path": "http://api.minejobs.id/api/data-pribadi/1",
        "per_page": 10,
        "prev_page_url": null,
        "to": 1,
        "total": 1
    }
}
```
notes: id params = id_kandidat
## Edit
Routes : {{url}}/api/data-pribadi/{id}

Method : PUT

Body :
|field|type|optional|
|-|-|-|
|id_kandidat|int|x|
|nama_depan|string|x|
|nama_belakang|string|x|
|nomor_telepon|string|x|
|provinsi|string|x|
|kota|string|x|
|tentang|string|x|
|image|file|x|
Response : 
```
```


-------

# Upload Resume
## Create
Routes : {{url}}/api/uploadcv

Method : POST

Body :
|field|type|optional|
|-|-|-|
|id_kandidat|int|x|
|file_cv|file|v|
Response : 
```
{
    "message": "Berhasil Update",
    "data": {
        "id": 1,
        "id_kandidat": "1",
        "url_cv": "http://api.minejobs.id/storage/user/cv/1603634622_5f9585bef1869.pdf",
        "created_at": "2020-10-25 14:03:42",
        "updated_at": "2020-10-25 14:03:42",
        "deleted_at": null
    }
}
```

## Get
Routes : {{url}}/api/uploadcv/1

Method : GET

Body :
|field|type|optional|
|-|-|-

Response : 
```
{
    "count": 1,
    "message": "data ditemukan",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "id_kandidat": 1,
                "url_cv": "http://api.minejobs.id/storage/user/cv/1603634622_5f9585bef1869.pdf",
                "created_at": "2020-10-25 14:03:42",
                "updated_at": "2020-10-25 14:03:42",
                "deleted_at": null
            }
        ],
        "first_page_url": "http://api.minejobs.id/api/uploadcv/1?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://api.minejobs.id/api/uploadcv/1?page=1",
        "next_page_url": null,
        "path": "http://api.minejobs.id/api/uploadcv/1",
        "per_page": 10,
        "prev_page_url": null,
        "to": 1,
        "total": 1
    }
}
```
note : id params = id_kandidat

## Edit
Routes : {{url}}/api/uploadcv/{id}

Method : POST

Body :
|field|type|optional|
|-|-|-|
|id_kandidat|int|x|
|file_cv|file|v|
Response : 
```
{
    "message": "Berhasil Update",
    "data": {
        "id": 1,
        "id_kandidat": "1",
        "url_cv": "http://api.minejobs.id/storage/user/cv/1603634622_5f9585bef1869.pdf",
        "created_at": "2020-10-25 14:03:42",
        "updated_at": "2020-10-25 14:03:42",
        "deleted_at": null
    }
}
```
note :id params = id upload cv

-------

# Cari Lowongan

Routes : {{url}}/api/cari-iklan?q=test

Method : GET

Body :
|field|type|optional|
|-|-|-|

params :
q = keyword

Response : 
```
{
    "count": 2,
    "message": "data ditemukan",
    "keyword": null,
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "id_perusahaan": 1,
                "posisi_pekerjaan": "test",
                "gaji_min": 10,
                "gaji_max": 10,
                "provinsi": "asd",
                "kota": "asd",
                "bidang_pekerjaan": "asd",
                "tingkat_pendidikan": "asd",
                "pengalaman_kerja": "asd",
                "persyaratan": "asd",
                "benefit_perusahaan": "asd",
                "url_header": "http://api.minejobs.id/storage/perusahaan/header/1603552132_5f94438415293.jpeg",
                "status_iklan": 0,
                "created_at": "2020-10-24 15:08:44",
                "updated_at": "2020-10-24 15:08:44",
                "deleted_at": null,
                "nama_perusahaan": "test",
                "alamat_perusahaan": "test",
                "tentang_perusahaan": "test",
                "url_banner": null,
                "foto_perusahaan": "",
                "website_perusahaan": "test",
                "jenis_industri": "test",
                "no_telp_perusahaan": "test",
                "no_npwp_perusahaan": "test",
                "url_npwp_perusahaan": "http://api.minejobs.id/storage/perusahaan/npwp1603552124_5f94437c70e6d.jpeg"
            },
            {
                "id": 1,
                "id_perusahaan": 1,
                "posisi_pekerjaan": "test",
                "gaji_min": 10,
                "gaji_max": 10,
                "provinsi": "asd",
                "kota": "asd",
                "bidang_pekerjaan": "asd",
                "tingkat_pendidikan": "asd",
                "pengalaman_kerja": "asd",
                "persyaratan": "asd",
                "benefit_perusahaan": "asd",
                "url_header": "http://api.minejobs.id/storage/perusahaan/header/1603552570_5f94453aca632.jpeg",
                "status_iklan": 0,
                "created_at": "2020-10-24 15:08:44",
                "updated_at": "2020-10-24 15:08:44",
                "deleted_at": null,
                "nama_perusahaan": "test",
                "alamat_perusahaan": "test",
                "tentang_perusahaan": "test",
                "url_banner": null,
                "foto_perusahaan": "",
                "website_perusahaan": "test",
                "jenis_industri": "test",
                "no_telp_perusahaan": "test",
                "no_npwp_perusahaan": "test",
                "url_npwp_perusahaan": "http://api.minejobs.id/storage/perusahaan/npwp1603552124_5f94437c70e6d.jpeg"
            }
        ],
        "first_page_url": "http://api.minejobs.id/api/cari-iklan?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://api.minejobs.id/api/cari-iklan?page=1",
        "next_page_url": null,
        "path": "http://api.minejobs.id/api/cari-iklan",
        "per_page": 10,
        "prev_page_url": null,
        "to": 2,
        "total": 2
    }
}
```

-------

# Lamaran Terkirim
Routes : {{url}}/api/pelamar-kandidat/{id}

Method : GET

Body :
|field|type|optional|
|-|-|-

Response : 
```
{
    "count": 1,
    "message": "data ditemukan",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 6,
                "id_kandidat": 1,
                "id_iklan": 7,
                "id_perusahaan": 1,
                "status_lamaran": "belum diproses",
                "tanggal_lamaran": "2019-10-10",
                "created_at": "2020-10-25 15:05:40",
                "updated_at": "2020-10-25 15:05:40",
                "deleted_at": null
            }
        ],
        "first_page_url": "http://api.minejobs.id/api/pelamar-kandidat/1?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://api.minejobs.id/api/pelamar-kandidat/1?page=1",
        "next_page_url": null,
        "path": "http://api.minejobs.id/api/pelamar-kandidat/1",
        "per_page": 10,
        "prev_page_url": null,
        "to": 1,
        "total": 1
    }
}
```
notes: params id = id_kandidat

-------

# Kirim Lamaran
Routes : {{url}}/api/pelamar-perusahaan

Method : POST

Body :
|field|type|optional|
|-|-|-|
|id_kandidat|string|x|
|id_iklan|string|x|
|tanggal_lamaran|string|x|

Response : 
```
{
    "message": "berhasil post",
    "data": {
        "id_kandidat": "1",
        "id_iklan": "7",
        "tanggal_lamaran": "2019-10-10T00:00:00.000000Z",
        "id_perusahaan": "1",
        "updated_at": "2020-10-25 15:05:40",
        "created_at": "2020-10-25 15:05:40",
        "id": 6
    }
}
```
notes: params id = id_kandidat

-------

# Lamaran Tersimpan (skip)

## Get
Routes : 

Method : 

Body :
|field|type|optional|
|-|-|-

Response : 
```
```

-------

# Jadwal Interview
Routes : {{url}}/api/jadwal-interview/1

Method : GET

Body :
|field|type|optional|
|-|-|-

Response : 
```
{
    "count": 2,
    "message": "data ditemukan",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "id_kandidat": 1,
                "id_perusahaan": 1,
                "id_iklan": 7,
                "pesan": "ketiga",
                "lokasi_wawancara": null,
                "tanggal_interview": "2019-10-12",
                "metode_interview": "langsung",
                "waktu_mulai": "10.00",
                "waktu_selesai": "11.00",
                "url_concall": "test",
                "status": "menunggu konfirmasi",
                "created_at": "2020-10-24 15:08:44",
                "updated_at": "2020-10-24 15:08:44",
                "deleted_at": null,
                "posisi_pekerjaan": "test",
                "gaji_min": 10,
                "gaji_max": 10,
                "provinsi": "asd",
                "kota": "asd",
                "bidang_pekerjaan": "asd",
                "tingkat_pendidikan": "asd",
                "pengalaman_kerja": "asd",
                "persyaratan": "asd",
                "benefit_perusahaan": "asd",
                "url_header": "http://api.minejobs.id/storage/perusahaan/header/1603637649_5f959191bd900.jpeg",
                "status_iklan": 1,
                "nama_perusahaan": "test",
                "alamat_perusahaan": "test",
                "tentang_perusahaan": "test",
                "url_banner": null,
                "foto_perusahaan": "",
                "website_perusahaan": "test",
                "jenis_industri": "test",
                "no_telp_perusahaan": "test",
                "no_npwp_perusahaan": "test",
                "url_npwp_perusahaan": "http://api.minejobs.id/storage/perusahaan/npwp1603552124_5f94437c70e6d.jpeg"
            }
        ],
        "first_page_url": "http://api.minejobs.id/api/jadwal-interview/1?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://api.minejobs.id/api/jadwal-interview/1?page=1",
        "next_page_url": null,
        "path": "http://api.minejobs.id/api/jadwal-interview/1",
        "per_page": 10,
        "prev_page_url": null,
        "to": 1,
        "total": 1
    }
}
```
notes : id params = id_kandidat
-------

# Undangan Interview
## Update Status Undangan (kandidat)
Routes : {{url}}/api/undangan-interview/update-status/{id}?status=diterima

Method : PUT

Body :
|field|type|optional|
|-|-|-

Response : 
```
{
    "message": "Berhasil Update",
    "data": [
        {
            "id": 6,
            "id_kandidat": 1,
            "id_iklan": 7,
            "id_perusahaan": 1,
            "status_lamaran": "menunggu wawancara",
            "tanggal_lamaran": "2019-10-10",
            "created_at": "2020-10-25 15:05:40",
            "updated_at": "2020-10-25 16:08:22",
            "deleted_at": null
        }
    ]
}
```
notes : id params = id kandidat | status : diterima, atur_ulang
        jika undangan diterima params: .../{id}?status = diterima
        jika undangan atur ulang params: .../{id}?status = atur_ulang

-------

# Detil Undangan (Kandidat)

## Get
Routes : {{url}}/api/undangan-interview-kandidat/1

Method : GET

Body :
|field|type|optional|
|-|-|-

Response : 
```
{
    "count": 1,
    "message": "data ditemukan",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 4,
                "id_kandidat": 1,
                "id_perusahaan": 1,
                "id_iklan": 4,
                "pesan": "ketiga",
                "lokasi_wawancara": null,
                "tanggal_interview": "2019-10-12",
                "metode_interview": "langsung",
                "waktu_mulai": "10.00",
                "waktu_selesai": "11.00",
                "url_concall": "test",
                "status": "menunggu konfirmasi",
                "created_at": "2020-10-24 16:31:31",
                "updated_at": "2020-10-24 16:31:31",
                "deleted_at": null,
                "posisi_pekerjaan": "test",
                "gaji_min": 10,
                "gaji_max": 10,
                "provinsi": "asd",
                "kota": "asd",
                "bidang_pekerjaan": "asd",
                "tingkat_pendidikan": "asd",
                "pengalaman_kerja": "asd",
                "persyaratan": "asd",
                "benefit_perusahaan": "asd",
                "url_header": "http://localhost:8000/storage/perusahaan/header/1603557091_5f9456e3acb5b.jpeg",
                "status_iklan": 1
            }
        ],
        "first_page_url": "http://localhost:8000/api/undangan-interview-kandidat/1?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://localhost:8000/api/undangan-interview-kandidat/1?page=1",
        "next_page_url": null,
        "path": "http://localhost:8000/api/undangan-interview-kandidat/1",
        "per_page": 10,
        "prev_page_url": null,
        "to": 1,
        "total": 1
    }
}
```
notes : id params = id_kandidat

-------

# Lamar Pekerjaan
## Get Kandidat Summary
Routes : {{url}}/api/kandidat/getuser

Method : GET

Body :
|field|type|optional|
|-|-|-

Response : 
```
{
    "message": "data ditemukan",
    "data": [
        {
            "id": 1,
            "id_kandidat": 1,
            "nama_depan": "test",
            "nama_belakang": "test",
            "nomor_telepon": "3242",
            "provinsi": "saf",
            "kota": "asf",
            "tentang": "adf",
            "foto_profile": "http://localhost:8000/storage/user/1603675403_5f96250b0d200.jpeg",
            "created_at": "2020-10-26 01:23:24",
            "updated_at": "2020-10-26 01:23:24",
            "deleted_at": null
        }
    ]
}
```

## Get Iklan Summary
Routes : {{url}}/api/iklan-perusahaan/1

Method : GET

Body :
|field|type|optional|
|-|-|-

Response : 
```
{
    "count": 1,
    "message": "data ditemukan",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 4,
                "id_perusahaan": 1,
                "nama_perusahaan": "test",
                "alamat_perusahaan": "test",
                "tentang_perusahaan": "test",
                "url_banner": null,
                "foto_perusahaan": "",
                "website_perusahaan": "test",
                "jenis_industri": "test",
                "no_telp_perusahaan": "test",
                "no_npwp_perusahaan": "test",
                "url_npwp_perusahaan": "http://localhost:8000/storage/perusahaan/npwp1603552641_5f944581aa08b.jpeg",
                "created_at": "2020-10-24 16:31:31",
                "updated_at": "2020-10-24 16:31:31",
                "deleted_at": null,
                "posisi_pekerjaan": "test",
                "gaji_min": 10,
                "gaji_max": 10,
                "provinsi": "asd",
                "kota": "asd",
                "bidang_pekerjaan": "asd",
                "tingkat_pendidikan": "asd",
                "pengalaman_kerja": "asd",
                "persyaratan": "asd",
                "benefit_perusahaan": "asd",
                "url_header": "http://localhost:8000/storage/perusahaan/header/1603557091_5f9456e3acb5b.jpeg",
                "status_iklan": 1
            }
        ],
        "first_page_url": "http://localhost:8000/api/iklan-perusahaan/1?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://localhost:8000/api/iklan-perusahaan/1?page=1",
        "next_page_url": null,
        "path": "http://localhost:8000/api/iklan-perusahaan/1",
        "per_page": 10,
        "prev_page_url": null,
        "to": 1,
        "total": 1
    }
}
```

Kirim lamaran menggunakan api # Kirim Lamaran 


-------

# Job Details

## Get
Routes : {{url}}/api/iklan-perusahaan/1

Method : GET

Body :
|field|type|optional|
|-|-|-

Response : 
```
{
    "count": 1,
    "message": "data ditemukan",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 4,
                "id_perusahaan": 1,
                "nama_perusahaan": "test",
                "alamat_perusahaan": "test",
                "tentang_perusahaan": "test",
                "url_banner": null,
                "foto_perusahaan": "",
                "website_perusahaan": "test",
                "jenis_industri": "test",
                "no_telp_perusahaan": "test",
                "no_npwp_perusahaan": "test",
                "url_npwp_perusahaan": "http://localhost:8000/storage/perusahaan/npwp1603552641_5f944581aa08b.jpeg",
                "created_at": "2020-10-24 16:31:31",
                "updated_at": "2020-10-24 16:31:31",
                "deleted_at": null,
                "posisi_pekerjaan": "test",
                "gaji_min": 10,
                "gaji_max": 10,
                "provinsi": "asd",
                "kota": "asd",
                "bidang_pekerjaan": "asd",
                "tingkat_pendidikan": "asd",
                "pengalaman_kerja": "asd",
                "persyaratan": "asd",
                "benefit_perusahaan": "asd",
                "url_header": "http://localhost:8000/storage/perusahaan/header/1603557091_5f9456e3acb5b.jpeg",
                "status_iklan": 1
            }
        ],
        "first_page_url": "http://localhost:8000/api/iklan-perusahaan/1?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://localhost:8000/api/iklan-perusahaan/1?page=1",
        "next_page_url": null,
        "path": "http://localhost:8000/api/iklan-perusahaan/1",
        "per_page": 10,
        "prev_page_url": null,
        "to": 1,
        "total": 1
    }
}
```

-------

# Company Details
## Get
Routes : {{url}}/api/profil-perusahaan/{id}

Method : GET

Body :
|field|type|optional|
|-|-|-

Response : 
```
{
    "count": 1,
    "message": "data ditemukan",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 2,
                "id_perusahaan": 1,
                "nama_perusahaan": "test",
                "alamat_perusahaan": "test",
                "tentang_perusahaan": "test",
                "url_banner": null,
                "foto_perusahaan": "",
                "website_perusahaan": "test",
                "jenis_industri": "test",
                "no_telp_perusahaan": "test",
                "no_npwp_perusahaan": "test",
                "url_npwp_perusahaan": "http://localhost:8000/storage/perusahaan/npwp1603552641_5f944581aa08b.jpeg",
                "created_at": "2020-10-24 15:17:21",
                "updated_at": "2020-10-24 15:17:21",
                "deleted_at": null
            }
        ],
        "first_page_url": "http://localhost:8000/api/profil-perusahaan/1?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://localhost:8000/api/profil-perusahaan/1?page=1",
        "next_page_url": null,
        "path": "http://localhost:8000/api/profil-perusahaan/1",
        "per_page": 10,
        "prev_page_url": null,
        "to": 1,
        "total": 1
    }
}
```
-------
