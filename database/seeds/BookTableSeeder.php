<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('books')->insert([
	        [
	            'title'=>'One Piece',
	            'description'=>'Bercerita tentang seorang anak bernama Mugiwara Luffi yang ingin menjadi bajak laut.',
	            'author'=>'Eichiro Oda',
	            'publisher'=>'Jump Force',
	            'cover'=>'',
	            'price'=>50000,
	            'stock'=>5
	        ],
	        [
	            'title'=>'Overlord',
	            'description'=>'Ceritanya dimulai dengan Yggdrasil, sebuah game online terkenal yang pada akhirnya ditutup.',
	            'author'=>'Kugane Maruyama',
	            'publisher'=>'Madhouse',
	            'cover'=>'',
	            'price'=>50000,
	            'stock'=>3
	        ],
	        [
           		'title'=>'Sang Pemimpi',
	            'description'=>'Dalam novel Sang Pemimpi, Andrea Hirata bercerita tentang kedi Belitong pada masa SMA.',
           		'author'=>'Andrea Hirata',
           		'publisher'=>'Sinarmas',
	            'cover'=>'',
	            'price'=>75000,
	            'stock'=>4
	        ],
	        [
	            'title'=>'Tenggelamnya Kapal Van Der Wijck',
	            'description'=>'Menceritaka tentang cinta sepasang kekasih yang harus terhalang sebuah aturan adat di tanah Minangkabau.',
	            'author'=>'Haji Abdul Malik',
	            'publisher'=>'Gudang Garam',
	            'cover'=>'',
	            'price'=>80000,
	            'stock'=>2
	        ],
	        [
	            'title'=>'Ubur-Ubur Lembur',
	            'description'=>'Dika melihat orang yang bekerja kantoran tapi nggak sesuai dengan minat mereka itu seperti seekor ubur-ubur lembur. Lemah, lunglai, hanya kuti arus.',
	            'author'=>'Raditya Dika',
	            'publisher'=>'Kompas',
	            'cover'=>'',
	            'price'=>55000,
	            'stock'=>2
	        ],
	        [
	            'title'=>'Hujan',
	            'description'=>'Berawal dari pertemuan Lail dengan Elijah di sebuah ruangan terapi. Lail menemui Elijah hanya untuk satu tujuan: ingin menghapus ingatannya tentang hujan. Lail sangat ingin melupakan hujan, baginya hujan selalu turun dimasa tergelapnya',
	            'author'=>'Tere Liye',
	            'publisher'=>'Anggrada Paramita',
	            'cover'=>'',
	            'price'=>50000,
	            'stock'=>3
	        ],
	        [
	            'title'=>'Sang Ahli Kimia',
	            'description'=>'Sebagai mantan agen, ia menyimpan rahasia tergelap agensi yang membuatnya menjadi incaran pemerintah Amerika. Mereka ingin ia mati. Ia hidup dalam pelarian selama hampir tiga tahun. Tak pernah menetap di tempat yang sama dan selalu bergonta-ganti nama. Satu-satunya orang yang ia percaya telah mereka bunuh.',
	            'author'=>'Stephenie Meyer',
	            'publisher'=>'Sinar Dunia',
	            'cover'=>'',
	            'price'=>40000,
	            'stock'=>5
	        ],
	        [
	            'title'=>'Seventeen Once Again',
	            'description'=>'Raka akhirnya membalas perasaan Briana. Ya, Raka, ketua OSIS yang digandrungi banyak siswi di sekolah. Raka yang juga pacar Tara, sahabat baiknya. Eh, bukankah itu artinya Briana merebut pacar sahabatnya sendiri? Ah, entahlah! Saat study tour, Raka berjanji akan membuat hubungan mereka jelas.',
	            'author'=>'Handi Namire',
	            'publisher'=>'Danone',
	            'cover'=>'',
	            'price'=>50000,
	            'stock'=>6
	        ],
	        [
	            'title'=>'Bad Boys 2',
	            'description'=>'Memang lagi jaman ya, anak SMA jaman sekarang main geng-geng-an? Itu-lah yang sempat terlintas di benak Sophie Wyna, salah satu murid SMA Emerald. Sophie bersahabat karib dengan Ivy sejak SMP, yang tak lain tak bukan adalah adik dari Troy Cornelius, ketua geng SMA Vilmaris–musuh bebuyutan geng SMA Emerald.',
	            'author'=>'Nathalia Theodora',
	            'publisher'=>'Kompas',
	            'cover'=>'',
	            'price'=>65000,
	            'stock'=>10
	        ],
	        [
	            'title'=>'LET ME BE WITH YOU',
	            'description'=>'Tidak tahan karena terus didesak menikah oleh keluarganya, Kinanti akhirnya menerima ide gila Rivan Arya, sahabat kakaknya yang telah ia kenal sejak SMA. Mereka akan menerima perjodohan yang diatur tersebut, menikah, dan tinggal bersama',
	            'author'=>'Ria N. Badaria',
	            'publisher'=>'Falcon',
	            'cover'=>'',
	            'price'=>75000,
	            'stock'=>8
	        ],
	        [
	            'title'=>'Complicated Thing Called Love',
	            'description'=>'Awalnya, alur cerita ini sedikit membingungkan. Tak jelas mana hulu mana muara. Tapi jangan menyerah. Percayalah, ada titik ketika semua keping puzzle itu bertemu. Seperti cinta.',
	            'author'=>'Irene Dyah',
	            'publisher'=>'NetInsight',
	            'cover'=>'',
	            'price'=>45000,
	            'stock'=>6
	        ],
	        [
	            'title'=>'Life Revolution',
	            'description'=>'12 ilmu yang dimaksud antara lain; Ilmu modeling/nyontek, bagaimana menemukan, bergaul belajar, bekerjasama bahkan memperkerjakan orang yang sukses, bagaimana mengelola emosi yang tepat, serta ilmu-ilmu lain yang akan dibahas dengan lengkap olen sang penulis.',
	            'author'=>'Tung Desem Waringin',
	            'publisher'=>'Gramedia',
	            'cover'=>'',
	            'price'=>55000,
	            'stock'=>7
	        ],
	        [
	            'title'=>'Bumi Manusia',
	            'description'=>'Bumi Manusia bercerita tentang kehidupan di Indonesia di era 1800-1900an, yang masih dalam kekangan Belanda. Minke, tokoh utama dalam buku ini merupakan seorang pribumi yang jatuh cinta pada Annelies, seorang gadis berdarah campuran pribumi dan Belanda.',
	            'author'=>'Pramoedya Ananta Toer',
	            'publisher'=>'Gramedia',
	            'cover'=>'',
	            'price'=>55000,
	            'stock'=>4
	        ],
	        [
	            'title'=>'Sebuah Seni Bersikap Bodoh Amat',
	            'description'=>'Buku ini dapat diibaratkan sebagai sebuah tamparan di wajah yang sangat menyegarkan untuk kita semua, terutama bagi kita semua yang selama ini overthinking, terlalu banyak menggunakan perasaan dan memasukkan segala sesuatunya ke dalam hati.',
	            'author'=>'Mark Manson',
	            'publisher'=>'Gramedia',
	            'cover'=>'',
	            'price'=>55000,
	            'stock'=>9
	        ],
	        [
	            'title'=>'Sapiens',
	            'description'=>'Selama dua setengah juta tahun, berbagai spesies manusia hidup dan punah di Bumi, sampai akhirnya tersisa satu, Homo Sapiens, manusia bijaksana.',
	            'author'=>'Yuval Noah Harari',
	            'publisher'=>'Gramedia',
	            'cover'=>'',
	            'price'=>65000,
	            'stock'=>8
	        ],
    	]);
    }
}
