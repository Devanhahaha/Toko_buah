import http from 'k6/http';
import { check, sleep } from 'k6';

export const options = {
  stages: [
    { duration: '30s', target: 20 }, // Naikkan beban ke 20 pengguna selama 30 detik
    { duration: '1m30s', target: 10 }, // Turunkan beban menjadi 10 pengguna selama 1 menit 30 detik
    { duration: '20s', target: 0 },   // Turunkan ke 0 pengguna
  ],
};

export default function () {
  // Uji endpoint yang merender file di folder views
  const pages = [
    'http://127.0.0.1:8000/home',
    'http://127.0.0.1:8000/product',
    'http://127.0.0.1:8000/about',
    'http://127.0.0.1:8000/customer',
    'http://127.0.0.1:8000/kategori',
  ];

  // Lakukan permintaan ke setiap halaman
  pages.forEach((url) => {
    const res = http.get(url);
    check(res, {
      'status was 200': (r) => r.status === 200, // Periksa status 200
    });
    sleep(1); // Tunggu 1 detik sebelum melanjutkan
  });
}
