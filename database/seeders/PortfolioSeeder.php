<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([ 
            [
                'title' => 'Pameran Seni Umpan Balik',
                'klien' => 'Media Partner',
                'category' => 'Art Exhibition',
                'image' => 'portfolio/images/1.1.1.jpg',
                'video' => null,
                'date' => '2024-01-01',
                'pdf' => null,
                'video_url' => null,
                'description' => 'Proyek poster "Pameran Seni Umpan Balik" dirancang dengan pendekatan visual yang inovatif dan kreatif. Poster ini tidak hanya bertujuan untuk memberikan informasi seputar acara, tetapi juga menciptakan rasa penasaran dan ketertarikan. Dengan elemen visual yang artistik, tata letak dinamis, dan palet warna yang memikat, poster ini dirancang untuk menonjol di antara media promosi lainnya. Melalui kombinasi tipografi modern dan ilustrasi yang memukau, poster ini berhasil mengomunikasikan esensi acara dengan jelas dan menarik.',
            ],
            [
                'title' => 'Guidline Design',
                'klien' => 'Sosial Media Spesialis',
                'category' => 'Design',
                'image' => 'portfolio/images/GUIDELINE DESIGN_page-0001.jpg',
                'video' => null,
                'date' => '2024-02-01',
                'pdf' => null,
                'video_url' => null,
                'description' => 'Pembuatan guideline desain untuk penyewaan alat konstruksi ini mencakup segala aspek visual branding, mulai dari logo, tipografi, hingga penggunaan warna dan elemen grafis. Desain guideline ini dibuat untuk memberikan panduan yang jelas bagi tim internal dan mitra dalam menggunakan identitas visual perusahaan dengan konsisten. Dengan menjaga konsistensi di semua material pemasaran dan komunikasi, guideline ini membantu meningkatkan kepercayaan klien serta memperkuat citra profesional perusahaan di pasar.',
            ],
            [
                'title' => 'Logo Mimik Cucu',
                'klien' => 'Logo',
                'category' => 'Logo Design',
                'image' => 'portfolio/images/Mimik_Cucu.jpg',
                'video' => null,
                'date' => '2024-03-01',
                'pdf' => null,
                'video_url' => null,
                'description' => 'Logo "Mimik Cucu" dirancang dengan sentuhan kreatif yang unik dan penuh karakter. Mengusung konsep visual yang playful dan hangat, logo ini menggabungkan ilustrasi maskot lucu berbentuk cangkir dengan senyum ceria, menciptakan identitas yang mudah dikenali dan berkesan. Penggunaan warna cerah dan elemen grafis modern menambahkan daya tarik visual, yang cocok untuk target pasar anak-anak dan keluarga. Logo ini membantu menciptakan koneksi emosional dengan konsumen, meningkatkan brand recall, dan memperkuat identitas merek.',
            ],
            [
                'title' => 'Festival Literasi Kota Bogor',
                'klien' => 'Media Partner',
                'category' => 'Literacy Festival',
                'image' => 'portfolio/images/1.1.1.jpg',
                'video' => null,
                'date' => '2024-04-01',
                'pdf' => null,
                'video_url' => null,
                'description' => 'Poster untuk "Festival Literasi Kota Bogor" dirancang untuk menciptakan antusiasme masyarakat dan mengajak mereka berpartisipasi dalam perayaan literasi ini. Desain poster ini memadukan warna-warna cerah dan elemen ilustratif yang mencerminkan suasana meriah acara. Informasi penting disajikan dengan layout yang mudah dibaca dan struktur visual yang harmonis. Poster ini tidak hanya informatif, tetapi juga memiliki daya tarik visual yang kuat, memastikan pesan sampai kepada audiens dengan jelas dan efektif.',
            ],
            [
                'title' => 'Logo Kips Stroke',
                'klien' => 'Desain Logo',
                'category' => 'Logo Design',
                'image' => 'portfolio/images/Brand Guidelines Buatinkamu_page-0003.jpg',
                'video' => null,
                'date' => '2024-05-01',
                'pdf' => null,
                'video_url' => null,
                'description' => 'Desain logo "Kips Stroke" memiliki karakteristik yang modern dan tegas, dirancang untuk menonjolkan identitas brand yang dinamis dan penuh energi. Logo ini menggabungkan elemen ilustratif yang mewakili brand dengan tipografi tebal yang memancarkan kekuatan dan kepercayaan diri. Warna dan detail logo dipilih untuk mencerminkan semangat kompetitif dan profesionalisme, sehingga memberikan kesan pertama yang kuat dan membekas di benak audiens.',
            ],
            [
                'title' => 'Hantaran Ceritamu',
                'klien' => 'Sosial Media Spesialis',
                'category' => 'Social Media',
                'image' => 'portfolio/images/SOSMED_SPECIALIST.png',
                'video' => null,
                'date' => '2024-06-01',
                'pdf' => null,
                'video_url' => null,
                'description' => '"Hantaran Ceritamu" membutuhkan guideline desain yang komprehensif untuk memastikan branding yang kuat dan seragam di semua aspek komunikasi. Guideline ini mencakup pedoman tentang penggunaan logo, palet warna, tipografi, dan elemen visual lainnya. Dengan adanya guideline ini, perusahaan dapat menjaga konsistensi dan memperkuat citra brand yang profesional dan mudah dikenali. Guideline ini juga membantu tim internal dalam menciptakan materi promosi yang selaras dengan identitas brand, meningkatkan kepercayaan dan kenyamanan klien.',
            ],
            [
                'title' => 'Desain Kemasan',
                'klien' => 'Logo',
                'category' => 'Packaging Design',
                'image' => 'portfolio/images/MOCKUP.jpg',
                'video' => null,
                'date' => '2024-07-01',
                'pdf' => null,
                'video_url' => null,
                'description' => 'Kemasan untuk produk "Mimik Cucu" dirancang dengan pendekatan yang unik dan interaktif, bertujuan untuk menarik perhatian konsumen di rak. Desain ini menggabungkan ilustrasi karakter ceria dan warna-warna cerah yang menyampaikan kesan ramah dan mengundang. Tidak hanya berfungsi sebagai wadah, kemasan ini berperan sebagai media pemasaran visual yang memperkuat branding dan meningkatkan daya tarik produk. Dengan desain yang mempertimbangkan aspek estetika dan fungsionalitas, kemasan ini membantu membangun pengalaman yang menyenangkan bagi konsumen.',
            ],
            [
                'title' => 'SEAGOLD',
                'klien' => 'Infografis',
                'category' => 'Infographics',
                'image' => 'portfolio/images/INFOGRAFIS.jpg',
                'video' => null,
                'date' => '2024-08-01',
                'pdf' => null,
                'video_url' => null,
                'description' => 'Proyek infografis "Seagold" dirancang untuk menyederhanakan informasi yang kompleks menjadi visual yang menarik dan mudah dipahami. Infografis ini menggabungkan elemen grafis modern, ilustrasi, dan tata letak yang terstruktur untuk memudahkan audiens menyerap informasi. Dengan desain visual yang menarik dan penggunaan warna yang seimbang, infografis ini mampu mengkomunikasikan data dan insight penting secara efektif, meningkatkan keterlibatan audiens, dan memperkuat kepercayaan pada brand.',
            ],
            [
                'title' => 'Tiba Tiba Taichan',
                'klien' => 'Desain Banner',
                'category' => 'Banner Design',
                'image' => 'portfolio/images/Desain_Banner.jpg',
                'video' => null,
                'date' => '2024-09-01',
                'pdf' => null,
                'video_url' => null,
                'description' => 'Desain banner untuk "Tiba Tiba Taichan" dirancang untuk mempromosikan menu spesial dan mengundang perhatian konsumen. Menggunakan elemen visual yang menggugah selera, tata letak yang berani, dan warna-warna kontras, banner ini berhasil menciptakan kesan visual yang kuat. Informasi tentang menu dan penawaran disajikan secara jelas dan terstruktur, memudahkan konsumen untuk melihat pilihan yang tersedia. Banner ini diharapkan mampu meningkatkan ketertarikan konsumen dan mendorong penjualan produk.',
            ],
            [
                'title' => 'Champaign',
                'klien' => 'Fotografi',
                'category' => 'Photography',
                'image' => 'portfolio/images/IMG_3982.jpg',
                'video' => null,
                'date' => '2024-10-01',
                'pdf' => null,
                'video_url' => null,
                'description' => 'Proyek fotografi untuk "Champaign" bertujuan untuk menangkap momen-momen spesial dalam acara formal yang penuh kebersamaan dan semangat kolaboratif. Foto-foto yang dihasilkan menampilkan kehangatan dan kebersamaan antar peserta, serta memperlihatkan sisi profesional dari event tersebut. Kualitas gambar yang tajam dan komposisi yang tepat memberikan sentuhan visual yang elegan, memperkuat dokumentasi acara, dan meningkatkan citra acara di mata klien dan partisipan.',
            ],
            [
                'title' => 'Food Menu',
                'klien' => 'Desain',
                'category' => 'Design',
                'image' => 'portfolio/images/Buku menu_page-0001.jpg',
                'video' => null,
                'date' => '2024-11-01',
                'pdf' => null,
                'video_url' => null,
                'description' => 'Poster menu makanan dirancang dengan tujuan untuk menyajikan informasi yang jelas dan visual yang menarik bagi pelanggan. Desain ini memadukan tata letak yang rapi dengan elemen visual yang menggugah selera, sehingga memudahkan pelanggan untuk melihat pilihan menu dengan cepat dan tepat. Penggunaan tipografi yang mudah dibaca dan elemen grafis yang mencolok menciptakan keseimbangan antara estetika dan fungsi, menjadikan poster ini efektif dalam menarik perhatian dan mendorong pelanggan untuk melakukan pembelian.',
            ],
        ]);
    }
}
