INSERT INTO `tbfilm` (`film_id`, `film_judul`, `film_deskripsi`, `film_poster`, `film_trailer`, `film_sutradara`, `film_aktor`, `film_durasi`, `film_rating`, `film_genre`) VALUES
(1, 'Frozen 2', 'Anna, Elsa, Kristoff, Olaf dan Sven meninggalkan Arendelle untuk melakukan perjalanan ke hutan misterius di musim gugur, hutan tersebut terikat dengan tanah ajaib. Mereka berangkat untuk menemukan asal usul kekuatan Elsa untuk menyelamatkan kerajaan mereka.', 'src/images/poster/frozen2.jpg', 'https://www.youtube.com/embed/MJVqb5ftrDs', 'Chris Buck, Jennifer Lee', 'Kristen Bell, Jason Ritter, Jonathan Groff', '103 Menit', 'SU', 'Animation'),
(2, 'Black Christmas', 'Sekelompok mahasisw di ikuti oleh orang asing, saat sedang liburan Natal mereka. Itu sampai seorang mahasiswi muda menemukan bahwa ada pembunuh dari perguruan tinggi ', 'src/images/poster/blackchristmas.jpg', 'https://www.youtube.com/embed/dodAe3bn9aY', 'Sophia Takal', 'Imogen Poots, Cary Elwes, Brittany O\'Grady ', '92 Minutes', 'R', 'Thriller'),
(3, 'Charlies Angels', 'Kristen Stewart, Naomi Scott, dan Ella Balinska bekerja untuk Charles Townsend sebuah badan keamanan dan investigasinya misterius yang telah berkembang dengan skala internasional. Para wanita paling cerdas, paling berani, dan paling terlatih , Menjadi satu team \"Angels\" yang dipandu oleh Bosley menjalankan suatu misi berat dan berbahaya di mana-mana\r\n', 'src/images/poster/charlieangels.jpg', 'https://www.youtube.com/embed/U4uqhcedx_I', 'Elizabeth Banks', 'Naomi Scott, Sam Claflin, Kristen Stewart ', '118 Menit', 'BO', 'Action'),
(4, 'Jumanji : The Next Level', 'Mereka kembali ke Jumanji untuk menyelamatkan salah satu teman mereka tetapi banyak hal yang tidak sesuai seperti yang mereka harapkan. Para pemain harus menghadapi bagian berbahaya, dari gurun sampai ke gunung bersalju, demi untuk melarikan diri dari permainan paling berbahaya di dunia.', 'src/images/poster/jumanji.jpg', 'https://www.youtube.com/embed/xN2bO0ox1z0', 'Jake Kasdan', 'Dwayne Johnson, Karen Gillan, Jack Black, Kevin Hart, Nick Jonas, Danny DeVito', '122 Minutes', 'SU', 'Adventure'),
(5, 'STAR WARS: THE RISE OF SKYWALKER ', 'Resistance yang selamat sekali lagi akan menghadapi First Order dalam sebuah saga final yang akan menentukan nasib mereka.', 'src/images/poster/starwars.jpg', 'https://www.youtube.com/embed/gnU-hJ6jqCY', 'J.J. Abrams', 'Daisy Ridley, Domhnall Gleeson, Joonas Suotamo, Adam Driver, Mark Hamill, Oscar Isaac', '143 Minutes', 'SU', 'Science Fiction'),
(6, 'SPIES IN DISGUISE ', 'Ketika mata-mata terbaik dunia berubah menjadi merpati, ia harus mengandalkan partner seorang ahli teknologi, untuk menyelamatkan dunia.', 'src/images/poster/spies.jpg', 'https://www.youtube.com/embed/eG3i68XCJlk', ' Nick Bruno, Troy Quane', 'Will Smith, Tom Holland, Rashida Jones, Ben Mendelsohn, Reba McEntire', '102 Minutes', 'SU', 'Animation'),
(7, 'THE GRUDGE ', 'Sebuah rumah dikutuk oleh roh jahat yang menyerang dan melukai dengan cara yang kejam siapapun yang memasukinya.', 'src/images/poster/grudge.jfif', 'https://www.youtube.com/embed/88spCoDfEg4', 'Nicolas Pesce', ' Betty Gilpin, Andrea Riseborough, William Sadler', '94 Minutes', 'R', 'Horror'),
(9, 'ASHFALL', 'Bencana mengguncang Korea secara tak terduga. Ketika Baekdu - gunung tertinggi di Korea meletus dan menyemburkan abu ke atmosfer. Petaka besar kini mengancam Seoul (Korea Selatan) maupun Pyongyang (Korea Utara).', 'src/images/poster/ashfall.jfif', 'https://www.youtube.com/embed/_Xq7XWHbGag', 'LEE Hae Jun, KIM Byung Seo', ' LEE Byung Hun, HA Jung Woo, MA Dong Seok a.k.a. Don LEE, JEON Hye Jin, BAE Su Zy', '128 Minutes', 'R', 'Thriller');


INSERT INTO `tbjadwal` (`jadwal_id`, `jadwal_tanggal`, `jadwal_sesi`, `tbFilm_film_id`) VALUES
(1, '2020-01-13', 1, 1),
(2, '2020-01-13', 2, 1);


INSERT INTO `tbmember` (`member_id`, `member_username`, `member_password`, `member_email`, `member_nama_depan`, `member_nama_belakang`, `member_photo`, `member_saldo`) VALUES
(1, 'member', '12345', 'member@gmail.com', 'john', 'doe', NULL, 50000);


INSERT INTO `tbuser` (`user_id`, `user_username`, `user_password`, `user_role`, `user_name`) VALUES
(1, 'admin', '12345', 'admin', 'Jane Doe'),
(2, 'kasir', '12345', 'kasir', 'Jena Doe');