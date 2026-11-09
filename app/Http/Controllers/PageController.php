<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    // Simulasi login: username dikirim ke halaman lain lewat request parameter (?username=...)
    public function authenticate(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|min:3|max:30',
            'password' => 'required|string|min:4',
        ], [
            'username.required' => 'Username wajib diisi.',
            'username.min'      => 'Username minimal 3 karakter.',
            'password.required' => 'Password wajib diisi.',
            'password.min'      => 'Password minimal 4 karakter.',
        ]);

        return redirect()->route('dashboard', ['username' => $validated['username']]);
    }

    public function dashboard(Request $request)
    {
        if (! $request->filled('username')) {
            return redirect()->route('login');
        }

        $stats = [
            ['value' => '4', 'label' => 'Proyek'],
            ['value' => '8', 'label' => 'Bahasa & Framework'],
            ['value' => '0', 'label' => 'Pacar'],
        ];

        $catatan = [
            ['waktu' => 'Nov 2026', 'teks' => 'Belajar Laravel dan Blade untuk tugas praktikum'],
            ['waktu' => 'Sep 2026', 'teks' => 'Software simulai unutuk robot kompetisi'],
            ['waktu' => 'Agu 2026', 'teks' => 'Mengembangkan basestation robot dengan Python dan Tkinter'],
            ['waktu' => 'Jul 2026', 'teks' => 'Mulai persiapan tim robotik untuk ABU Robocon'],
        ];

        return view('dashboard', [
            'username' => $request->query('username'),
            'active'   => 'dashboard',
            'tagline'  => 'Mahasiswa Universitas Jember yang suka membangun perangkat lunak dan sistem tertanam untuk robot.',
            'tentang'  => 'Saya mahasiswa informatika di kampus universitas jember, saya orang yang tidak tahu menahu soal teknologi tapi malah nyasar ke jurusan saintek terutama informatika, yah jadi mau tidak mau harus saya jalanin',
            'stats'    => $stats,
            'catatan'  => $catatan,
        ]);
    }

    public function pengelolaan(Request $request)
    {
        if (! $request->filled('username')) {
            return redirect()->route('login');
        }

        $proyek = [
            [
                'nama'      => 'Basestation Robot',
                'deskripsi' => 'Aplikasi desktop untuk memantau dan mengendalikan robot lewat komunikasi serial.',
                'teknologi' => ['Python', 'Python'],
                'tahun'     => '2026',
                'status'    => 'Berjalan',
            ],
            [
                'nama'      => 'Firmware Robot',
                'deskripsi' => 'Program pengendali di mikrokontroler untuk gerak dan sensor robot kompetisi.',
                'teknologi' => ['C++', 'Mikrokontroler'],
                'tahun'     => '2026',
                'status'    => 'Berjalan',
            ],
            [
                'nama'      => 'Software Simulasi Robot',
                'deskripsi' => 'Software simulai dan Perancangan gerak robot unutuk kompetisi',
                'teknologi' => ['C++','Python','ROS2'],
                'tahun'     => '2026',
                'status'    => 'Berjalan',
            ],
            [
                'nama'      => 'Website Profil',
                'deskripsi' => 'Website profil pribadi dengan arsitektur MVC dan templating Blade.',
                'teknologi' => ['Laravel', 'PHP', 'CSS dna HTML', 'Javascript'],
                'tahun'     => '2026',
                'status'    => 'Selesai',
            ],
        ];

        return view('pengelolaan', [
            'username' => $request->query('username'),
            'active'   => 'pengelolaan',
            'proyek'   => $proyek,
        ]);
    }

    public function profile(Request $request)
    {
        if (! $request->filled('username')) {
            return redirect()->route('login');
        }

        $username = $request->query('username');

        $detail = [
            'Username' => $username,
            'Email'    => strtolower(str_replace(' ', '', $username)) . '@example.com',
            'Kampus'   => 'Universitas Jember',
            'Lokasi'   => 'Jember, Jawa Timur',
        ];

        $keahlian = [
            'Web'    => ['Laravel', 'PHP', 'MySQL', 'JavaScript'],
            'Sistem' => ['Python', 'C++', 'ROS2', 'Linux','MikroControler'],
            'Dasar'  => ['Struktur Data', 'Jaringan Komputer'],
        ];

        $kuliah = ['Struktur Data', 'Sistem Basis Data', 'Teori Graf', 'Jaringan Komputer', 'Pemograman Website'];

        return view('profile', [
            'username' => $username,
            'active'   => 'profile',
            'detail'   => $detail,
            'keahlian' => $keahlian,
            'kuliah'   => $kuliah,
        ]);
    }

    public function logout()
    {
        return redirect()->route('login');
    }
}