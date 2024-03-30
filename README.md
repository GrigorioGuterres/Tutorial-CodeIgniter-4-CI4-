Tentu, berikut adalah versi `README.md` dengan deskripsi dalam bahasa Tetun untuk proyek CodeIgniter 4 (CI4) sebagai tutorial:

```markdown
# Naran Projetu Ita-nia

Deskripsaun boot ida kona-ba ita-nia projetu.

## Deskripsaun (opsional)

Projetu ida ne'e hanesan eimplar implementasaun baziku husi CodeIgniter 4 (CI4) no kria hanesan tutorial atu ajuda iniciante sira atu komprende konseitu baziku iha dezenvolvimentu web ho CI4.

Kona-ba CodeIgniter 4 (CI4):
CodeIgniter 4 hanesan framework PHP ne'ebé di'ak no poderosu atu dezenvolve aplikasaun web. Kompara ho versaun sira uluk, CI4 oferese karakterístika foun no fasilidade sira ne'ebé ajuda dezenvolvedor sira atu konstrui aplikasaun web modernu no efisiente.

Iha projetu ne'e, ita sei aprende kona-ba:
- Estrutura baziku husi projetu CI4.
- Kona-ba ajus konfigurasaun baziku.
- Kria routing atu diriji pedidu HTTP.
- Uza Controller, Model, no View iha CI4.
- No seluk tan.

## Lista

- [Instalasaun](#instalasaun)
  - [Rekizitu](#rekizitu)
  - [Passu Instalasaun](#passu-instalasaun)
- [Hodi Hala'o Projetu](#hodi-hala'o-projetu)
  - [Uza PHP Built-in Server](#uza-php-built-in-server)
  - [Uza Web Server](#uza-web-server)
- [Dokumentasaun](#dokumentasaun)
- [Kontribuisaun](#kontribuisaun)
- [Lisensa](#lisensa)

## Instalasaun

### Rekizitu

- PHP versi 7.3 ka ki'ik liu
- Composer
- Web Server hanesan Apache, Nginx, etc.

### Passu Instalasaun

1. **Klona repositoriu ida ne'e ba pasta lokal ita-nia:**

    ```bash
    git clone https://github.com/username/naran-projetu.git
    ```

2. **Tama ba pasta projetu:**

    ```bash
    cd naran-projetu
    ```

3. **Instala dependénsia sira hotu ho Composer:**

    ```bash
    composer install
    ```

## Hodi Hala'o Projetu

### Uza PHP Built-in Server

Ita bele hala'o projetu ho PHP built-in server:

```bash
php spark serve
```

Tuir ne'e, loke browser ita-nia no aksesu `http://localhost:8080` atu haree projetu ita-nia hala'o.

### Uza Web Server

Se ita uza web server hanesan Apache ka Nginx, asegura ita diriji root direktori ba pasta `public` husi ita-nia projetu.

#### Eksemplu konfigurasaun Apache:

```apache
<VirtualHost *:80>
    ServerName naran-dominio-anda.local
    DocumentRoot "/lokasi-projetu/naran-projetu/public"

    <Directory "/lokasi-projetu/naran-projetu/public">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

#### Eksemplu konfigurasaun Nginx:

```nginx
server {
    listen 80;
    server_name naran-dominio-anda.local;
    root /lokasi-projetu/naran-projetu/public;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock; # Ajusta ho versi PHP ita-nia
        fastcgi_index index.php;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_param PATH_INFO $fastcgi_path_info;
    }
}
```

Favor muda `/lokasi-projetu/naran-projetu` ho lokasi absolutu husi direktori projetu ita-nia no ajusta konfigurasaun tuir ita-nia nesesidade.

## Dokumentasaun

### Estrutura Direktori

Iha leten hanesan estrutura direktori baziku husi projetu ida ne'e:

```
naran-projetu/
├── app/
├── public/
├── tests/
├── vendor/
├── writable/
├── .env
└── spark
```

### Eksemplu Uza

Adisiona eksemplu uza ka sinyáriu atu hala'o ka integrasaun projetu ita-nia.

## Kontribuisaun

Se ita hakarak kontribui iha projetu ida ne'e, favor kria _pull request_. Asegura ita fó leitura ba guia kontribuisaun nian uluk.

## Lisensa

Projetu ida ne'e hetan lisensa iha:

```
MIT License
```

Ita bele inklui informasaun adisional kona-ba lisensa iha ne'e, se presiza.

---

© 2024 Naran Ita ou Naran Projetu
```

Favor salva no kopia konteúdu ne'ebá iha fail `README.md` iha repositoriu GitHub Ita. La forget atu troka placeholder sira hanesan `Naran Projetu Ita-nia`, `https://github.com/GrigorioGuterres/Tutorial-CodeIgniter-4-CI4`, `naran-dominio-anda.local`, no lokasi diretóri projetu ho detalhes ne'ebá.


![preview img](/public/assets/p.png)
![preview img](/public/assets/p1.png)
![preview img](/public/assets/p2.png)

