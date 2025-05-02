@extends('template.main')
@section('container')
    <button id="backToTop">↑</button>
    <button id="scrollDown">↓</button>
    <div class="text-center mt-4">
        <h2>ALAT INDRA MANUSIA</h2>
    </div>
    <div class="container mt-4">
        <div class="card p-4">
            <h3>Bagian 1 : Stimulasi</h3>
            <br>
            <div class="video">
                <video class="video" controls>
                    <source src="video/Alat.mp4" type="video/mp4">
                    Browser Anda tidak mendukung pemutaran video.
                </video>
            </div>
            <br>
            {{-- <p class="materi">
                Pernahkan kamu memperhatikan bagaimana kita bisa melihat, mendengar, mencium suatu bau, bahkan
                merasakan
                makanan,
                ataupun merasakan sebuah sentuhan? Menurut kamu, apa penyebab sehingga kita bisa merasakan semua hal
                tersebut?
                Lalu apa saja fungsi dari kelima alat indra pada kehidupan sehari-hari? dan apa yang akan terjadi jika salah
                satu indra kita tidak berfungsi dengan baik? Bagaimana hal tersebut dapat mempengaruhi aktivitas dan
                kualitas
                hidup seseorang? Agar kita bisa memahami alat indra ini mari kita pelajari materi berikut ini.
            </p> --}}
            <p>Terdapat lima macam indra yang berfungsi untuk menerima rangsangan yaitu sebagai berikut :</p>
            <ol type="a">
                <li>Mata, sebagai penerima rangsangan cahaya (fotoreseptor)</li>
                <li>Telinga, sebagai penerima rangsangan getaran bunyi (fonoreseptor) dan tempat beradanya indra
                    keseimbangan (statoreseptor)</li>
                <li>Hidung, sebagai penerima rangsang bau berupa gas (kemoreseptor)</li>
                <li>Lidah, sebagai penerima rangsang zat yang terlarut (Kemoreseptor)</li>
                <li>Kulit, sebagai penerima rangsang sentuhan (tangoreseptor) dan suhu (temperatur)</li>
            </ol>
            <p>Setiap indra akan berfungsi dengan sempurna apabila :</p>
            <ol type="a">
                <li>Indra tersebut secara anatomi tidak ada kelainan.</li>
                <li>Bagian untuk menerima rangsang bekerja dengan baik.</li>
                <li>Saraf-saraf yang membawa rangsang dari otak bekerja dengan baik.</li>
                <li>Pusat pengolahan rangsang diotak bekerja dengan baik.</li>
            </ol>
            <p>Apabila salah satu dari bagian itu terganggu atau rusak, maka hubungan dengan dunia luar akan terganggu juga.
                Selanjutnya kita akan membahas tentang alat indra secara lebih mendalam.</p>
            <div class="container mt-4 subbab-type-1">
                <ol type="A">
                    <div>
                        <h4>
                            <li>Mata</li>
                        </h4>
                        <p>
                            Mata memiliki fungsi sebagai penerima rangsang berupa cahaya, karena pada bagian dalam mata
                            terdapat reseptor untuk menerima cahaya yang disebut dengan fotoreseptor. Mata berada pada
                            rongga mata yang dilindungi oleh tulang-tulang tengkorak. Selain dilindungi oleh tulang-tulang
                            tengkorak mata juga dilindungi oleh :
                        </p>
                        <ol type="1">
                            <li>
                                Kelopak mata, berupa kulit tipis yang memiliki fungsi untuk melindungi mata dari debu
                                atau sentuhan benda.
                            </li>
                            <li>
                                Bulu mata, berfungsi untuk melindungi mata dari cahaya yang terlalu menyilaukan.
                            </li>
                            <li>
                                Alis, fungsinya untuk melindungi mata dari aliran keringan dan air hujan.
                            </li>
                            <li>
                                Air mata yang dihasilkan oleh kelenjar air mata, mempunyai fungsi untuk menjaga
                                kelembapan mata dan membersihkan mata dari debu dan bakteri.
                            </li>
                        </ol>
                        <br>
                        <p>Bolamata tersusun dari 3 lapisan yaitu sklera, koroid, dan retina. Struktur bolamata ini
                            memungkinkan untuk bisa membatasi atau memaksimalkan jumlah cahaya yang masuk, memfokuskan
                            cahaya, dan membentuk gambar selanjutnya yang akan dikirimkan ke otak. Berikut adalah penjelesan
                            untuk lapisan bola mata.</p>
                        <ol type="1">
                            <div>
                                <h5>
                                    <li>Lapisan Sklera atau Selaput Putih</li>
                                </h5>
                                <p>Sklera adalah lapisan paling luar dan sangat kuat dari bola mata dan tempat perlekatan
                                    otot ektrinsik. Sklera ini merupakan lapisan berwarna putih sehingga biasa disebut
                                    lapisan putih mata .Sklera mempunyai bagian yang tembus pandang pada bagian depannya
                                    yang disebut kornea, kornea mempunya fungsi melakukan transmisi(menerima) cahaya dan
                                    perlindungan mata. Kornea ini juga selalu basah oleh air mata yang dihasilkan oleh
                                    kelenjar air mata.</p>
                            </div>
                            <div>
                                <h5>
                                    <li>Lapisan Koroid atau Selaput Hitam</li>
                                </h5>
                                <p>Lapisan kedua dari luar setelah sklera adalah koroid, koroid banyak mengandung pembuluh
                                    darah untuk memberikan nutrisi pada mata. Selain untuk memberikan nutrisi bagian ini
                                    juga memiliki fungsi untuk menghentikan refleksi cahaya yang menyimpang pada bagian
                                    dalam mata. Di bagian depan mata, koroid membentuk iris. Iris ini mengandung pigmen
                                    hitam, biru, hijau atau coklat, sehingga dapat sebagai penentu warna mata. Di bagian
                                    tengah iris terdapat pupil yang merupakan celah (bukaan), untuk mengatur intensitas
                                    cahaya yang masuk mata. Di belakang iris terdapat lensa mata berbentuk cembung di kedua
                                    sisi yang diikat oleh ligamen suspensori. Mencembung atau memipihnya lensa menyebabkan
                                    mata berakomodasi.</p>
                            </div>
                            <div>
                                <h5>
                                    <li>Retina atau Selaput Pelangi</li>
                                </h5>
                                <p>
                                    Struktur bola mata paling dalam adalah retina berfungsi untuk menangkap bayangan benda.
                                    Pada lapisan ini terdapat bagian yang paling peka terhadap cahaya yaitu bintik kuning
                                    (fovea). Selain itu pada retina juga terdapat bintik buta, yaitu tempat keluarnya saraf
                                    mata. Pada lapisan retina terdapat sel batang yang mengandung pigmen rodopsin, tidak
                                    sensitif terhadap warna dan akan bekerja saat intensitas cahaya rendah. Selain sel
                                    batang, pada lapisan retina juga terdapat sel kerucut yang terdapat kandungan pigmen
                                    iodopsin, sensitif terhadap warna serta bekerja saat intensitas cahaya tinggi.
                                </p>
                                <p>
                                    Pada retina tersusun kurang lebih 125 juta selsel batang (sel basilus) yang mampu
                                    menerima rangsang cahaya tidak berwarna dan untuk melihat pada keadaan cahaya redup.
                                    Selain sel batang, pada retina juga terdapat kurang lebih 7 juta sel kerucut (sel konus)
                                    yang berfungsi menerima rangsang cahaya kuat dan berwarna. Sel kerucut lebih banyak
                                    terdapat pada bagian bintik kuning (fovea centralis). Jadi bila ingin melihat suatu
                                    benda dengan jelas, maka bayangan harus jatuh di bagian ini. Di retina juga dijumpai
                                    daerah yang sama sekali tidak mengandung sel batang ataupun sel kerucut. Bagian ini
                                    disebut bintik buta. Bila cahaya jatuh di daerah ini, kita tidak bisa melihat apa-apa.
                                </p>
                                <p>
                                    Mata juga memiliki bagian yang lain yaitu pupil dan iris. Iris memberikan warna yang
                                    khas pada setiap mata orang, iris dan pupil mempunyai fungsi untuk mengatur kadar
                                    intensitas cahaya yang masuk. Lensa mata memiliki fungsi untuk memfokuskan cahaya agar
                                    bayangan jatuh tepat pada retina. Ada juga cairan aquoeous humor dan vitreous humor.
                                    Aquoeous humor mengandung akan nutrisi untuk lensa dan kornea sedangkan vitreous humor
                                    mempunyai fungsi untuk mempertahankan posisi bentuk bola mata.
                                </p>
                                <p>
                                    Suatu benda dapat dilihat oleh mata, bila benda tersebut memantulkan cahaya. Cahaya yang
                                    dipantulkan oleh benda masuk ke mata melalui kornea dan diteruskan ke lensa melalui
                                    pupil. Oleh lensa, cahaya tersebut dibiaskan dan difokuskan di retina sehingga membentuk
                                    bayangan kecil dan terbalik pada retina. Tetapi oleh otak bayangan tersebut diartikan
                                    seperti gambar yang kita lihat. Proses melihat dapat dijelaskan sebagai berikut :
                                </p>
                                <ol type="a">
                                    <li>Cahaya dipantulkan oleh benda</li>
                                    <li>Ditangkap oleh kornea</li>
                                    <li>Melewati pupil</li>
                                    <li>Lensa</li>
                                    <li>Aqueos humor</li>
                                    <li>Retina</li>
                                    <li>Bayangan</li>
                                    <li>Otak</li>
                                    <li>Kesan Melihat</li>
                                </ol>
                            </div>
                        </ol>
                    </div>
                    <div class="container mt-4 subbab-type-1">
                        <h4>
                            <li>Telinga</li>
                        </h4>
                        <p>
                            Telinga merupakan tempat beradanya indra pendengaran dan keseimbangan. Telinga bekerja dengan
                            melakukan deteksi pada gelombang suara. Telinga membantu menjaga keseimbangan dan merasakan
                            posisi kepala. Telinga memiliki jumlah sebanyak dua, dengan dua telinga dapat membantu dalam
                            menentukan darimana arah suara. Lalu bagaimana cara telinga menentukan arah suara? Jadi jika
                            sebuah suara mencapai kedua telinga secara bersamaan, otak akan menentukan sumber suara
                            terdengar di depan, di belakang, atau di atas. Jika suara lebih dulu mencapai telinga kiri
                            sebelum mencapai telinga kanan, maka otak akan menentukan sumber suara dari sebelah kiri.
                        </p>
                        <p>
                            Penyusun telinga terdiri dari 3 bagian yaitu luar, tengah, dan dalam. Untuk bagian luar dan
                            tengah akan berisikan udara, sedangkaan untuk bagian dalam akan berisikan cairan. Berikut adalah
                            penjelasan lebih lanjut tentang telinga bagian luar, tengah, dan dalam.
                        </p>
                        <ol type="1">
                            <div>
                                <h5>
                                    <li>Telinga Bagian Luar</li>
                                </h5>
                                <p>
                                    Telinga pada bagian luar terdiri dari :
                                </p>
                                <ol type="a">
                                    <li>
                                        Daun telinga, yang memiliki fungsi untuk menampung atau mengumpulkan gelombang
                                        bunyi. Daun telinga ini akan menangkap gelombang bunyi.
                                    </li>
                                    <li>
                                        Liang telinga (saluran auditori), memiliki fungsi untuk menyalurkan gelombang
                                        bunyi ke selaput gendang telinga. Liang telinga memiliki panjang kurang lebih 2,5
                                        sentimeter. Pada sepanjang dinding liat telinga terdapat rambut halus, kelenjar
                                        minyak dan kelenjar keringat yang berfungsi menghalangi debu dan air yang masuk.
                                    </li>
                                    <li>
                                        Selaput gendang telinga (membran tymphani), yang membatasi telinga luar dan
                                        telinga tengah. Berfungsi untuk menangkap getaran. Membran tifani akan memperkuat
                                        getaran gelombang bunyi secara mekanis.
                                    </li>
                                </ol>
                                <br>
                            </div>
                            <div>
                                <h5>
                                    <li>Telinga Bagian Luar</li>
                                </h5>
                                <p>
                                    Telinga bagian tengah terdiri dari :
                                </p>
                                <ol type="a">
                                    <div>
                                        <li>
                                            Tulang-tulang pendengaran (osikel), yaitu berupa tiga tulang kecil yang
                                            bersambung dari selaput gendang telinga menuju telinga dalam. Ketiga tulang
                                            tersebut adalah tulang martil (malleus), yang letaknya paling luar berhubungan
                                            dengan selaput gendang telinga. Berikutnya adalah tulang landasan (inkus) yang
                                            menghubungkan martil dan sanggurdi. Tulang paling dalam adalah tulang sanggurdi
                                            (stapes), yang melekat dengan saluran rumah siput pada tingkap jorong.
                                        </li>
                                        <li>
                                            Saluran Eustachius, yaitu saluran sempit yang menghubungkan telinga tengah
                                            dengan bagian belakang tenggorokan. Saluran ini terbuka saat kita mengunyah,
                                            menguap, bersin atau membuka mulut. Fungsi saluran ini adalah untuk memasukkan
                                            udara ke rongga telinga tengah sehingga tekanan udara di kedua gendang telinga
                                            sama dengan udara di luar tubuh.
                                        </li>
                                    </div>
                                </ol>
                            </div>
                            <div>
                                <h5>
                                    <li>Telinga Bagian dalam</li>
                                </h5>
                                <p>
                                    Telinga pada bagian dalam terdiri atas :
                                </p>
                                <ol type="a">
                                    <div>
                                        <li>Tingkap jorong dan tingkap bulat, merupakan membran yang terdapat pada
                                            pangkal saluran rumah siput (kokhlea). Tingkap jorong merupakan membran
                                            berbentuk oval yang berhubungan dengan tulang sanggurdi. Sedangkan tingkap
                                            bundar merupakan membran berbentuk bundar/ bulat. Tingkap berfungsi untuk
                                            menyalurkan getaran ke telinga dalam dan tingkap bulat sebagai penyeimbang
                                            getaran.</li>
                                        <li>
                                            Saluran Eustachius memilik peran sebagai penyeimbang tekanan udara pada kedua
                                            sisi membran timfani.
                                        </li>
                                        <li>
                                            tulang pendengaran memiliki fungsi untuk meneruskan getaran gelombang bunyi.
                                            Tulang pendengaran ini terdiri dari tiga macam yaitu maleus (martil), inkus
                                            (landasan), dan stapes (sanggurdi).
                                        </li>
                                        <li>
                                            Saluran rumah siput (kokhlea), yaitu saluran berbentuk spiral menyerupai
                                            rumah siput. Di dalam kokhlea ( di bagian tengah) terdapat organ corti, yang
                                            berisi ribuan "sel rambut" yang peka terhadap getaran. Impuls yang timbul di
                                            dalam sel rambut tersebut diteruskan oleh saraf auditori ke otak.
                                        </li>
                                        <li>
                                            Tiga saluran setengah lingkaran (kanalis semi sirkularis), yaitu tiga buah
                                            saluran setengah lingkaran yang satu dengan yang lain membentuk sudut 90°. Pada
                                            ujung setiap saluran terdapat penebalan (menggelembung) yang disebut ampulla dan
                                            bergabung dengan utrikulus dan sakulus.
                                        </li>
                                    </div>
                                </ol>
                                <br>
                                <p>Bagaimanakah kita dapat mendengar suatu bunyi? Kita dapat mendengar suatu bunyi pada
                                    dasarnya dengan urutan sebagai berikut.</p>
                                <ol>
                                    <li>
                                        Gelombang bunyi diterima daun telinga.
                                    </li>
                                    <li>
                                        Gelombang bunyi disalurkan masuk oleh liang telinga.
                                    </li>
                                    <li>
                                        Gelombang bunyi menggetarkan gendang telinga.
                                    </li>
                                    <li>
                                        Getaran tersebut diteruskan oleh tulang-tulang pendengaran (osikel).
                                    </li>
                                    <li>
                                        Getaran diteruskan ke tingkat jorong dan menggetarkan cairan limfe di dalam
                                        kokhlea.
                                    </li>
                                    <li>
                                        Getaran cairan limfe di dalam kokhlea menggerakkan sel reseptor organ korti, yang
                                        menghasilkan impuls untuk dihantarkan oleh saraf pendengar ke otak untuk di artikan.
                                    </li>
                                    <li>
                                        Getaran cairan limfe juga menggerakkan tingkap bulat bergerak keluar masuk untuk
                                        mengatur tekanan udara di dalam agar seimbang dengan tekanan di luar.
                                    </li>
                                </ol>
                                <p>
                                    Bunyi yang didengar manusia adalah bila bunyi tersebut mempunya frekuensi antara 20 -
                                    20.000 getaran/detik (Hz). Selain sebagai indra pendengaran, telinga juga sebagai indra
                                    keseimbangan. Fungsi keseimbangan ini terdapat pada telinga dalam yang dilaksanakan oleh
                                    tiga saluran setengah lingkaran utrikulus dan sakulus. Dengan adanya tiga organ tersebut
                                    maka telinga bagian dalam dapat mendeteksi :
                                </p>
                                <ol type="1">
                                    <li>
                                        Posisi tubuh yang berhubungan dengan gravitasi (keseimbangan statis) yang
                                        dilakukan oleh utrikulus dan sakulus.
                                    </li>
                                    <li>
                                        Gerakan tubuh (keseimbangan dinamis) yang dilakukan oleh tiga saluran setengah
                                        lingkaran.
                                    </li>
                                </ol>
                                <br>
                                <p>
                                    Pada ujung setiap saluran setengah lingkaran terdapat struktur yang disebut ampulla. Di
                                    dalamnya terdapat reseptor menyerupai rambut yang berhubungan dengan serabut saraf otak.
                                    Sel-sel yang menyerupai rambut tersebut menghadap ke bagian yang berbentuk jeli (lihat
                                    Gambar 3.15). Dengan adanya gerakan tubuh (kepala), maka cairan yang ada di dalam
                                    saluran setengah lingkaran bergerak dan merangsang sel reseptor seperti rambut tersebut.
                                    Oleh sel reseptor gerakan tersebut diubah menjadi impuls dan diteruskan ke otak dan otak
                                    memerintah otot menjaga keseimbangan tubuh. Sedangkan di utrikulus dan sakulus terdapat
                                    batu kecil yang disebut otolith. Batu tersebut merangsang dengan cara menekan sel
                                    reseptor serta bereaksi terhadap gravitasi. Otak akan dapat menentukan posisi kepala
                                    dari gerakannya.
                                </p>
                            </div>
                        </ol>
                    </div>
                    <div class="container mt-4 subbab-type-1">
                        <h4>
                            <li>Hidung</li>
                        </h4>
                        <p>
                            Hidung manusia merupakan organ tempat beradanya reseptor pembau (khemoreseptor). Maka dengan
                            organ ini kita dapat mengetahui berbagai macam bau. Bahkan hanya dengan mambau saja kita dapat
                            mengetahui nama benda tanpa harus melihatnya. Hidung dapat mendeteksi bau karena beberapa
                            partikel kimiawi kecil masuk kedalam hidung, kemudia larut dalam lapisan lembab hidung. Hidung
                            manusia memiliki kemampuan dapat mendeteksi sekitar 2000 jenis bau dan masih bisa dilatih hingga
                            mampu mendeteksi 10.000 jenis bau. Berbagai bau tidak enak yang terdeteksi, berkaitan dengan
                            perasaan yang tidak menyenangkan. Oleh sebab itu, ada berbagai bau yang terdeteksi tidak enak
                            oleh sebagian orang dan orang lainnya akan mendeteksi bahwa bau itu biasa atau menyenangkan.
                            Pada bagian rongga atas hidung terdapat sel saraf yang memiliki fungsi untuk mendeteksi bau
                            sebagai sel olfaktorius.
                        </p>
                        <p>
                            Sel-sel reseptor yang berfungsi untuk menerima rangsangan zat kimia berupa uap terletak di
                            rongga hidung bagian atas. Daerah ini memiliki ukuran sekitar 250 mm2. Sel-sel reseptor ini
                            mempunyai rambut-rambut halus (silia) di ujungnya dan diliputi selaput lendir yang berfungsi
                            sebagai pelembap. Dari sel-sel reseptor ini rangsang dibawa oleh serabut saraf menuju pusat
                            pembau di otak.
                        </p>
                        <p>
                            Kita dapat membau suatu zat karena zat yang berupa uap tersebut masuk ke rongga hidung sewaktu
                            kita menarik napas. Zat tersebut akan dilarutkan pada selaput lendir dan merangsang sel-sel
                            reseptor, kemudian dibawa oleh saraf pembau ke otak sehingga kita dapat mengetahui bau tersebut.
                            Proses membau dapat dijelaskan sebagai berikut. Bau di udara pernapasan -> masuk rongga hidung
                            -> larut dalam selaput lendir -> diterima saraf pembau -> menuju otak -> terjadi kesan bau.
                        </p>
                    </div>
                    <div class="container mt-4 subbab-type-1">
                        <h4>
                            <li>Lidah</li>
                        </h4>
                        <p>
                            Manusia memiliki lidah yang ditutupi oleh ribuan benjolan, benjolan itu disebut papila. Ada
                            lebih dari 10.000 pengecap yang tertanam diantara papila. Manusia bisa mendeteksi 5 rasa utama
                            yaitu manis, asam, asin, pahit, dan umami (sebuah rasa gurih dari glutamat yang ditemukan
                            diolahan daging, keju, dan monosodium glutamat, yang biasanya dikenal dengan MSG). Setiap rasa
                            utama dideteksi oleh bagian yang berbeda dari lidah. Air liur harus terlebih dahulu melarutkan
                            sampel makanan agar indra perasa dapat mendeteksi dan mengirimkan sinyal ke otak untuk di
                            interpretasikan. Ada beberapa rasa di interpretasikan menyenangkan dan ada juga yang tidak
                            tergantung pengalaman setiap orang. Meskipun ada area lidah yang dapat mendeteksi semua rasa,
                            tetap ada area tertentu yang sensitif terhadap rasa tertentu. Lidah merupakan tempat beradanya
                            indra pengecap (khemoreseptor). Zat yang dapat dikecap adalah zatzat kimia berupa larutan. Pada
                            saat kita mengecap makanan, rasa yang timbul sebenarnya adalah perpaduan antara rasa dan bau.
                            Oleh karena itu indra pengecap erat kaitannya dengan indra pembau.
                        </p>
                        <p>
                            Lidah terbentuk oleh jaringan otot yang ditutupi oleh selaput lendir yang selalu basah dan
                            berwarna merah jambu. Di dalam mulut, permukaan lidah terasa halus dan licin. Coba kalian
                            perhatikan lidah kalian di cermin, maka akan tampak tonjolan-tonjolan kecil di permukaan lidah.
                            Tonjolan kecil itu disebut papila. Ada tiga jenis papila yang ada di permukaan lidah yaitu
                            sebagai berikut :
                        </p>
                        <ol type="1">
                            <li>
                                Papila sirkumvalata, yang berbentuk cincin. Papila ini terdapat di pangkal lidah,
                                berjajar membentuk huruf V.
                            </li>
                            <li>
                                Papila fungiformis, yang berbentuk seperti jamur. Papila ini menyebar di permukaan ujung dan
                                sisi lidah.
                            </li>
                            <li>
                                Papila filiformis, yang berbentuk seperti rambut. Papila ini merupakan papila terbanyak.
                                Papila ini lebih banyak berfungsi sebagai perasa sentuhan daripada pengecap.
                            </li>
                        </ol>
                        <br>
                        <p>
                            Pada papila-papila inilah terdapat kuncup pengecap yang merupakan kumpulan ujung-ujung saraf
                            pengecap dan oleh serabut-serabut saraf dihubungkan dengan otak. Suatu zat dapat dirasakan oleh
                            lidah bila zat tersebut berupa larutan. Larutan tersebut kemudian memenuhi parit-parit di
                            sekitar papila-papila. Karena pada papila tersebut terdapat kuncup-kuncup pengecap, maka zat
                            yang mengisi parit tersebut merangsang kuncup pengecap. Rangsangan ini diteruskan oleh serabut
                            saraf menuju ke otak untuk diartikan.
                        </p>
                    </div>
                    <div class="container mt-4 subbab-type-1">
                        <h4>
                            <li>Kulit</li>
                        </h4>
                        <p>
                            Kulit tidak terlihat seperti organ yang lain contohnya jantung atau ginjal. Kulit mempunyai
                            jutaan ujung saraf yang akan mengirimkan informasi berkaitan dengan sentuhan, nyeri, tekanan,
                            serta suhu kemudian dikirim menuju otak. Pada wajah, lidah, bibir, ujung jari, dan jari kaki
                            manusia terkonsentrasi lebih banyak reseptor sentuhan. Rambut pada tubuh juga memiliki peran
                            penting pada kehidupan untuk merasakan sentuhan. Pada kulit ditemukan sejumlah besar reseptor,
                            pada dasar filikel rambut.
                        </p>
                        <p>
                            Pada lapisan kulit bagian luar tersusun dari sel mati. Reseptor yang terdapat pada kulit
                            berbeda-beda dan terletak pada kedalaman yang bervariasi. Kelenjar sebasea akan menghasilkan
                            minyak untuk membantu menjaga kulit lembut dan retak. Peoduksi kelenjar keringat menghasilkan
                            keringat dan mengeluarkan panas dari tubuh ketika air menguap dari permukaan kulit. Selain
                            sebagai alat ekskresi, kulit juga berfungsi sebagai indra perasa dan peraba. Reseptor-reseptor
                            yang terdapat pada kulit yaitu adalah :
                        </p>
                        <ol type="1">
                            <li>
                                Korpus meissner, yang terletak di dekat permukaan kulit. Berfungsi untuk menerima
                                rangsang sentuhan/ rabaan. Reseptor ini tersebar tidak merata di permukaan kulit. Ujung jari
                                memiliki paling banyak reseptor peraba.
                            </li>
                            <li>
                                Korpus pacini, yang berfungsi menerima rangsang tekanan. Letaknya di bawah lapisan
                                dermis.
                            </li>
                            <li>
                                Korpus ruffini, berfungsi untuk menerima rangsang panas. Letaknya di lapisan dermis.
                            </li>
                            <li>
                                Korpus krause, befungsi untuk menerima rangsang dingin. Letaknya di lapisan dermis.
                            </li>
                            <li>
                                Ujung saraf tanpa selaput, yang peka terhadap rasa sakit/ nyeri. Letaknya di lapisan
                                epidermis. Saraf ini sangat penting untuk keselamatan tubuh. Jika terjadi sesuatu yang tidak
                                menguntungkan, saraf ini cepat bereaksi, antara lain dengan adanya gerak refleks.
                            </li>
                        </ol>
                    </div>
                    <div class="container mt-4 subbab-type-1">
                        <h4>
                            <li>Kelainan dan penyakit pada alat indra</li>
                        </h4>
                        <p>
                            Berikut adalah beberapa kelainan penyakit pada alat indra mata yang biasa kita jumpai dalam
                            kehidupan sehari-hari antara lain :
                        </p>
                        <ol type="1">
                            <div>
                                <h5>
                                    <li>Miopi (rabun jauh)</li>
                                </h5>
                                <p>
                                    Yaitu kelainan pada mata dimana bayangan yang dibentuk oleh lensa jatuh di depan retina.
                                    Kelainan ini terjadi karena lensa mata terlalu cembung atau garis tengah mata panjang.
                                    Kelainan ini dapat ditolong dengan menggunakan lensa negatif.
                                </p>
                            </div>
                            <div>
                                <h5>
                                    <li>Hypermetropi (rabun dekat)</li>
                                </h5>
                                <p>
                                    Yaitu kelainan mata dimana bayangan yang dibentuk oleh lensa jatuh di belakang retina.
                                    Kelainan ini terjadi karena lensa mata terlalu pipih atau garis tengah mata pendek.
                                    Kelainan ini dapat ditolong dengan menggunakan lensa positif.
                                </p>
                            </div>
                            <div>
                                <h5>
                                    <li>Presbiopi</li>
                                </h5>
                                <p>
                                    Yaitu kelainan pada mata karena tidak elastisnya lensa mata untuk berakomodasi.
                                    Penderita kelainan ini biasanya menggunakan lensa ganda yaitu lensa positif dan lensa
                                    negatif.
                                </p>
                            </div>
                            <div>
                                <h5>
                                    <li>Rabun senja</li>
                                </h5>
                                <p>
                                    Kelainan pada mata karena defisiensi vitamin A. Akibatnya penderita kesulitan melihat
                                    benda saat terjadi perubahan dari terang ke gelap atau saat senja.
                                </p>
                            </div>
                            <div>
                                <h5>
                                    <li>Katarak</li>
                                </h5>
                                <p>
                                    Yaitu mengeruhnya lensa mata, yang dapat disebabkan oleh kekurangan vitamin B atau juga
                                    faktor usia.
                                </p>
                            </div>
                        </ol>
                    </div>
                </ol>
            </div>
        </div>
    </div>
@endsection
