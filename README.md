# Cara Menginstall

git clone https://github.com/HommaHina/Lapor.git
buat database baru dengan nama lapor
copy .env.example dan ganti nama .env
ganti nama database di .env dengan lapor
lakukan php artisan key:generate
lakukan php artisan migrate --seed
lakukan php artisan storage:link
