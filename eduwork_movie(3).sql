-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 05:15 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eduwork_movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'myadminpage', '20032304');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `judul_film` varchar(255) NOT NULL,
  `tahun_rilis` date NOT NULL,
  `sinopsis` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_sutradara` int(11) NOT NULL,
  `genre` set('Romance','Horor','Advanture','Action','Comedi','Drama','Animation','Crime','Fantasy') NOT NULL,
  `nama_pemain` varchar(255) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `judul_film`, `tahun_rilis`, `sinopsis`, `id_kategori`, `id_sutradara`, `genre`, `nama_pemain`, `gambar`) VALUES
(32, 'Train to Busan', '2016-07-15', 'Diceritakan tokoh Seok-woo (Gong Yoo) adalah seorang workaholic yang bercerai. Dia tinggal bersama ibunya dan hampir tidak menghabiskan waktu dengan putrinya Su-an (Kim Su-an).', 2, 3, 'Romance,Horor,Advanture,Action,Comedi,Drama,Animation,Crime', 'Gong Yoo, Kim Su An', 'images/film-train-busan-2016.jpg.webp'),
(33, 'Avengers: Age of Ultron', '2015-04-13', 'Tony Stark menciptakan Program Ultron untuk melindungi dunia, tetapi ketika program penjaga perdamaian tidak bersahabat, The Avengers bertindak untuk mencoba dan mengalahkan musuh yang hampir mustahil bersama-sama. Pahlawan-pahlawan terkuat di bumi harus bersatu kembali untuk melindungi dunia dari kepunahan global', 6, 3, 'Advanture,Action', 'Chris Evans, Chris Hemsworth, Mark Ruffalo, Robert Downey Jr.', 'images/film-avengers-age-of-ultron-2015.jpg.webp'),
(34, 'TOY STORY', '1995-10-30', 'Seorang anak kecil bernama Andy senang berada di kamarnya sambil bermain-main dengan mainannya, terutama bonekanya yang bernama \"Woody\". Tapi, apa yang dilakukan mainan-mainan itu ketika Andy tidak bersama mereka, mainan-mainan itu menjadi hidup. Woody yakin hidupnya (sebagai mainan) baik. Namun, dia harus khawatir dengan kepindahan keluarga Andy, dan yang tidak diketahui Woody adalah tentang pesta ulang tahun Andy. Woody tidak menyadari bahwa ibu Andy memberinya action figure yang dikenal sebagai Buzz Lightyear, yang tidak percaya bahwa dia adalah mainan, dan dengan cepat menjadi mainan favorit Andy yang baru.', 6, 3, 'Advanture,Comedi,Animation', 'Don Rickles, Jim Varney, Tim Allen, Tom Hanks', 'images/film-toy-story-1995.jpg.webp'),
(35, 'Justice League', '2017-11-15', 'Dipicu oleh kembalinya keyakinannya pada kemanusiaan dan terinspirasi oleh tindakan tanpa pamrih Superman, Bruce Wayne meminta bantuan sekutu barunya, Diana Prince, untuk menghadapi musuh yang lebih besar. Bersama-sama, Batman dan Wonder Woman bekerja cepat untuk menemukan dan merekrut tim manusia meta untuk melawan ancaman yang baru muncul ini. Namun terlepas dari terbentuknya liga pahlawan yang belum pernah terjadi sebelumnya – Batman, Wonder Woman, Aquaman, Cyborg, dan The Flash – mungkin sudah terlambat untuk menyelamatkan planet ini dari serangan bencana dalam skala besar.', 6, 3, 'Advanture,Action,Fantasy', 'Amy Adams, Ben Affleck, Ezra Miller, Gal Gadot, Henry Cavill', 'images/film-justice-league-2017.jpg.webp'),
(36, 'The Moon', '2023-08-02', 'Seorang pria ditinggalkan di luar angkasa karena kecelakaan yang tidak menguntungkan sementara pria lain di Bumi berjuang untuk membawanya kembali dengan selamat.', 2, 15, 'Advanture,Drama', 'Kim Hee-ae, Kyung-soo Do, Sol Kyung-gu', 'images/film-the-moon-2023-lk21-d21.jpg.webp'),
(37, 'ALONG WITH THE GODS: THE TWO WORLDS', '2017-12-20', 'Setelah meninggal secara tak terduga, petugas pemadam kebakaran Ja-hong dibawa ke alam baka oleh 3 penjaga alam baka. Hanya ketika dia melewati 7 persidangan selama 49 hari dan membuktikan bahwa dia tidak bersalah dalam kehidupan manusia, dia dapat bereinkarnasi, dan 3 penjaga akhirat berada di sisinya untuk membelanya dalam persidangan.', 2, 15, 'Drama,Fantasy', 'Hyang-gi Kim, Ji-hun Ju, Jung-jae Lee, Jung-woo Ha, Tae-hyun Cha', 'images/film-singwa-hamgge-2017.jpg.webp'),
(38, '200 POUNDS BEAUTY', '2006-12-14', 'Han-na, seorang wanita gemuk dengan suara yang indah, memberikan vokal sesungguhnya untuk seorang bintang pop cantik yang tidak bisa membawakan lagu. Setelah pertemuan yang memalukan, Han-na menjalani operasi plastik dari kepala hingga kaki dan muncul kembali setahun kemudian sebagai penyanyi langsing Jenny.', 2, 15, 'Romance,Comedi,Drama', 'Ah-jung Kim, Dong-il Sung, Hyeon-sook Kim, Jin-mo Ju', 'images/film-200-pounds-beauty-2006.jpg.webp'),
(39, 'Friendzone', '2019-02-14', 'Palm (Nine Naphat) terjebak dalam status Friend Zone oleh Gink (Baifern Pimchanok). Mereka sudah bersahabat selama 10 tahun dan Palm ingin mengutarakan perasaannya pada akhir masa sekolah. Namun Gink hanya menjawab “menjadi teman lebih baik.”', 5, 14, 'Romance,Comedi,Drama', 'Naphat Siangsomboon Pimchanok Luevisadpaibul', 'images/download.jpeg'),
(40, 'may who?', '2015-10-01', 'berkisah tentang seorang remaja yang memiliki kekuatan super. Pong (Thiti Mahayotaruk) adalah seorang remaja yang gemar menghabiskan waktunya seorang diri. Di tengah kesibukannya di sekolah, Pong selalu menyempatkan diri untuk menyelesaikan komik buatannya. Pong mengarang kisah kehidupan pahlawan super dan seorang tokoh protagonis yang menjadi kekasihnya. Karakter tersebut merupakan gambaran dari Ming (Narikun Ketprapakorn), teman sekelas Pong yang membuatnya jatuh hati. Suatu hari, Pong tanpa sengaja mengumpulkan buku sketsa komiknya pada seorang guru. Buku ini kemudian jatuh ke tangan May Nhai (Sutatta Udomsilp) yang juga dikenal sebagai siswa penyendiri. Pong merasa kesal saat May memperlihatkan isi buku tersebut di hadapan teman-teman kelas mereka. Saat Pong berusaha mendapatkan sketsanya kembali, ia terkejut melihat respon May yang mengeluarkan aliran listrik dari tubuhnya.', 5, 14, 'Romance,Comedi,Drama', 'Sutatta Udomsilp, Narikun Ketprapakorn, Thanapob Leeratanakajorn, Thiti Mahayotaruk', 'images/may.jpeg'),
(41, 'Suckseed', '2011-04-20', 'Ped adalah kutu buku di SD yang tidak memiliki minat musik. Sejak teman sekelasnya Ern berbagi kecintaannya pada musik dengannya, Ped jadi menyukai Ern. Tapi orang tua Ern membawanya pergi ke Bangkok membuat mereka berdua terpisah.', 5, 14, 'Comedi', 'Jirayu Laongmanee Pachara Chirathivat Thawat Pornrattanaprasert Nattasha Nauljam', 'images/SuckSeed'),
(42, '172 Days', '2023-11-23', 'Film ini diadaptasi dari novel yang berjudul sama karya dari Nadzirah Shafa, diketahui kisah ini dituliskan oleh penulis berdasarkan kisahnya dengan sang suami. Kisah ini mengabadikan perjalanan hijrah dan kisah cintanya selama 172 hari bersama sang suami Amer Azzikra, yang kini telah meninggal dunia.', 1, 13, 'Romance,Drama', ' Bryan Domani Dan Yasmin Napper', 'images/169866489520398_287x421.jpg'),
(43, 'Sijjin', '2023-11-09', 'Teror itu dibuat oleh Irma yang jatuh cinta kepada sepupunya sendiri yaitu Galang. Galang yang telah memiliki istri dan anak sangat sayang kepada mereka, dan menganggap Irma hanya sebagai sepupunya saja. Oleh karena itu, Irma sangat terobsesi ingin menjadi perempuan satu-satu nya di hidup Galang, bahkan ingin dinikahi. Pada suatu hari, Irma datang ke dukun untuk meminta bantuan agar dapat dinikahkan dengan Galang. Lalu si dukun menerima permohonan Irma yaitu dengan mengirim santet kepada istri Galang dalam 5 teror malam. Teror yang dialami oleh istri Galang ini sangat mengerikan, seperti kesurupan, gangguan mistis, percobaan bunuh diri, dan pada akhirnya kematian terjadi di rumah Galang. Namun tak disangka-sangka juga bahwa teror tersebut juga menghantui pada Irma sendiri.', 1, 13, 'Horor', 'Anggika Bölsterli Niken Anjani Ibrahim Risyad Delia Husein Messi Gusti', 'images/Poster_Sijjin.jpg'),
(44, 'Merindu Cahaya de Amstel', '2022-01-20', 'Film ini menceritakan sosok gadis Belanda yang kemudian memeluk agama Islam, bernama Khadija Veenhoven dengan nama asli Marien Veenhoven. Sementara itu, sosok Khadija membuat penasaran Nico, seorang fotografer dan jurnalis, karena mengingatkannya pada sosok sang ibu.', 1, 13, 'Romance,Drama', 'Amanda Rawles Rachel Amanda Bryan Domani', 'images/Poster_film_Merindu_Cahaya_de_Amstel.jpeg'),
(45, 'Septet: The Story of Hong Kong', '2020-10-21', 'terdapat 7 kisah mandiri yang sangat pribadi dari para sutradara film yang lahir di tahun 40-an dan 50-an untuk mencerminkan Hong Kong yang mereka kenal, dari kisah Sammo tentang pelatihan masa kecilnya dalam seni bela diri, juga mendiang Ringo Lam pada penghormatan pedih untuk kampung halamannya, ode diam-diamnya Ann Hui untuk para pendidik, dan komedi gelap Johnnie To tentang bonanza tiga teman, serta kisah Patrick Tam tentang dua kekasih yang dipisahkan karena satu pindah ke Inggris. ', 3, 16, 'Action,Drama', 'Sammo Hung Au Kin-yee Patrick Tam Yuen Woo-ping Ringo Lam Johnnie To Tsui Hark Yau Nai-hoi Roy Szeto Lou Shiu-wa Melvin Luk', 'images/Septet-_The_Story_of_Hong_Kong_-_Official_poster.jpg'),
(46, 'Our Time Will Come', '2017-07-01', 'Dengan latar pada tahun 1940-an, film ini menceritakan kisah seorang perempuan legendaris \"Fang Gu\" (Zhou Xun), yang merupakan salah satu tokoh kunci selama pendudukan Jepang di Hong Kong. Film ini juga menggambarkan perlawanan dan perjuangan untuk kebebasan dan kemerdekaan oleh kaum muda kelompok perlawanan.', 3, 16, 'Action,Drama', 'Zhou Xun Eddie Peng Wallace Huo', 'images/our'),
(47, 'Jade Goddess of Mercy', '2003-12-25', 'Ini bercerita tentang seorang gadis biasa yang menjadi polisi yang menyamar dalam regu narkoba.', 3, 16, 'Romance,Crime', 'Zhao Wei Nicholas Tse Liu Yunlong Chen Jianbin', 'images/Jade_Goddess_of_Mercy.jpeg'),
(48, 'My Tomorrow Your Yesterday', '2016-12-17', 'kisah cinta biasa antara sepasang anak muda berusia 20 tahun, Takatoshi Minamiya (Sota Fukushi) jatuh cinta pada pandangan pertama kepada Emi Fukuju (Nana Komatsu) saat berada di satu gerbong kereta yang sama.', 4, 18, 'Romance,Fantasy', 'Sota Fukushi Nana Komatsu Masahiro Higashide Yuki Yamada Kaya Kiyohara Akira Otaka Yoshiko Miyazaki', 'images/Tomorro.jpeg'),
(49, 'My Teacher', '2017-10-28', 'Siswa tahun kedua sekolah menengah dan pencinta olahraga memanah Hibiki Shimada tidak pernah merasakan cinta romantis seumur hidupnya. Ini terjadi meskipun berteman dengan Megumi Chigusa dan Kosuke Kawai, dua remaja yang saling mencintai yang tanpa malu-malu memamerkan perasaan mereka terhadap guru matematika dan seni visual sekolah, Masato Sekiya dan Sachiko Nakajima, masing-masing.', 4, 18, 'Romance,Comedi,Drama', 'Toma Ikuta Dan Suzu Hirose', 'images/My_Teacher_poster.jpg'),
(50, 'Yell for the Blue Sky', '2016-08-20', 'Tsubasa Ono (diperankan oleh Tao Tsuchiya) berada di kelas pertama SMA Shirato di Sapporo, Jepang. SMA terkenal dengan tim bisbol dan band kuningan. Sementara Tsubasa Ono melihat trofi untuk band kuningan, ia bertemu Daisuke Yamada (diperankan oleh Ryoma Takeuchi) yang berdiri di sampingnya dan memandangi trofi untuk tim bisbol.', 4, 18, 'Romance,Drama', 'Tao Tsuchiya Ryoma Takeuchi Mirai Shida Juri Ueno', 'images/yell'),
(51, ' KKN di Desa Penari', '2022-04-30', 'KKN Di Desa Penari diadaptasi dari salah satu cerita horror yang telah viral di tahun 2019 melalui Twitter, menurut sang penulis, cerita ini diambil dari sebuah kisah nyata sekelompok mahasiswa yang tengah melakukan program KKN (Kuliah Kerja Nyata) di Desa Penari. Tak berjalan mulus, serentetan pengalaman horror pun menghantui mereka hingga program KKN tersebut berakhir tragis.', 1, 19, 'Horor', ' Aghniny Haque, Fajar Nugra', 'images/KKN.jpg'),
(52, 'Perjanjian dengan Iblis', '2019-01-10', 'ANNISA (24thn) menikah dengan BARA (32thn), duda dengan seorang anak perempuan bernama LARA (8thn). Bara ingin agar kedua orang yang dicintainya bisa akrab,maka ia mengajak keduanya piknik ke pulau yang masih jarang didatangi oleh para wisatawan, Pulau Bengalor.', 1, 20, 'Horor', 'Shandy Aulia, Alex Abbad', 'images/horor.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` enum('Indonesia','Korea','China','Jepang','Thailand','Amerika') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Indonesia'),
(2, 'Korea'),
(3, 'China'),
(4, 'Jepang'),
(5, 'Thailand'),
(6, 'Amerika');

-- --------------------------------------------------------

--
-- Table structure for table `kritikdansaran`
--

CREATE TABLE `kritikdansaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kritikdansaran`
--

INSERT INTO `kritikdansaran` (`id`, `nama`, `email`, `pesan`) VALUES
(1, 'Rahma Khairani', 'pacarjeno@gmail.com', 'gak tau coba aja dulu');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(11) NOT NULL,
  `rating_film` enum('1/10','2/10','3/10','4/10','5/10','6/10','7/10','8/10','9/10','10/10') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_rating`, `rating_film`) VALUES
(1, '1/10'),
(2, '2/10'),
(3, '3/10'),
(4, '4/10'),
(5, '5/10'),
(6, '6/10'),
(7, '7/10'),
(8, '8/10'),
(9, '9/10'),
(10, '10/10');

-- --------------------------------------------------------

--
-- Table structure for table `sutradara`
--

CREATE TABLE `sutradara` (
  `id_sutradara` int(11) NOT NULL,
  `nama_sutradara` varchar(255) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `negara` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sutradara`
--

INSERT INTO `sutradara` (`id_sutradara`, `nama_sutradara`, `tanggal_lahir`, `negara`) VALUES
(3, 'Joss Whedon', '1964-06-23', 'Amerika Serikat'),
(11, 'Hanung Bramantyo', '1975-10-01', 'Indonesia'),
(12, 'James Wan', '1977-02-26', 'Australia'),
(13, ' Hadrah Daeng Ratu ', '1989-11-02', 'Indonesia'),
(14, 'Chayanop Boonprakob', '1986-03-19', 'Thailand '),
(15, 'Kim Yong-hwa', '1971-09-25', 'Korea Selatan'),
(16, 'Ann Hui', '1947-05-23', 'Republic of China'),
(18, 'Takahiro Miki', '1974-08-29', 'Jepang'),
(19, 'Awi Suryadi', '1997-09-24', 'Indonesia'),
(20, 'Ardy Octaviand', '1976-10-29', 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id` int(11) NOT NULL,
  `ulasan_id` int(11) NOT NULL,
  `nama_ulasan` varchar(255) NOT NULL,
  `ulasan` varchar(255) NOT NULL,
  `ulasan_rating` int(11) NOT NULL,
  `tanggal_ulasan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`id`, `ulasan_id`, `nama_ulasan`, `ulasan`, `ulasan_rating`, `tanggal_ulasan`) VALUES
(58, 51, 'Yesicha', ' Kincir memuji rendahnya adegan mengejutkan yang ditampilkan film ini begitu selaras dengan utas aslinya. Ihwal perbedaan versi, ia menekankan bahkan versi utuh masih bisa diklasifikasi ulang karena penggambaran adegan seks dalam film masih sesuai untuk f', 7, '2023-11-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`,`id_sutradara`),
  ADD KEY `sutradara` (`id_sutradara`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kritikdansaran`
--
ALTER TABLE `kritikdansaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`);

--
-- Indexes for table `sutradara`
--
ALTER TABLE `sutradara`
  ADD PRIMARY KEY (`id_sutradara`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ulasan_id` (`ulasan_id`),
  ADD KEY `ulasan_rating` (`ulasan_rating`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kritikdansaran`
--
ALTER TABLE `kritikdansaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sutradara`
--
ALTER TABLE `sutradara`
  MODIFY `id_sutradara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `sutradara` FOREIGN KEY (`id_sutradara`) REFERENCES `sutradara` (`id_sutradara`);

--
-- Constraints for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `rating` FOREIGN KEY (`ulasan_rating`) REFERENCES `rating` (`id_rating`),
  ADD CONSTRAINT `ulasan` FOREIGN KEY (`ulasan_id`) REFERENCES `film` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;