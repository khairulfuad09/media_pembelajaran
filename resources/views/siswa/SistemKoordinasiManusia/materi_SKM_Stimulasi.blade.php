@extends('template.main')
@section('container')
    <button id="backToTop">↑</button>
    <button id="scrollDown">↓</button>
    <div class="text-center mt-4">
        <h2>SISTEM KOORDINASI MANUSIA</h2>
    </div>
    <div class="container mt-4">

        <div class="card p-4">
            <h3>Bagian 1: STIMULASI</h3>
            <br>
            <div class="video">
                <video class="video" controls>
                    <source src="video/Stimulasi koordinasi.mp4" type="video/mp4">
                    Browser Anda tidak mendukung pemutaran video.
                </video>
            </div>

            {{-- <p class="materi">Apa yang sebenarnya terjadi ketika kita tidak sengaja menyentuh benda yang sangat panas? Lalu
                bagaimana
                sistem saraf manusia bekerja dalam merespons rangsangan panas tersebut? Untuk mengetahui jawaban dari
                pertanyaan tersebut mari kita pelajari materi berikut! Dalam sistem koordinasi, terdapat tiga komponen utama
                yang diperlukan agar fungsi koordinasi dapat berjalan dengan baik. Berikut adalah ketiga komponen tersebut.
            </p> --}}
            <br>
            <p class="materi">terdapat tiga komponen utama
                yang diperlukan agar fungsi koordinasi dapat berjalan dengan baik. Berikut adalah ketiga komponen tersebut.
            </p>
            <ol class="custom-list">
                <li>Reseptor</li>
                <p>Reseptor adalah bagian tubuh yang berfungsi sebagai penerima rangsangan. Bagian yang berfungsi sebagai
                    penerima rangsangan tersebut adalah indra.</p>
                <li>Konduktor</li>
                <p>Konduktor adalah bagian tubuh yang berfungsi sebagai penghantar rangsangan. Bagian tersebut adalah
                    sel-sel saraf (neuron) yang membentuk sistem saraf. Sel sel saraf ini ada yang berfungsi membawa
                    rangsangan ke pusat saraf ada juga yang membawa pesan dari pusat saraf.</p>
                <li>Efektor</li>
                <p>Efektor adalah bagian tubuh yang menanggapi rangsangan, yaitu otot dan kelenjar (baik kelenjar endokrin
                    dan kelenjar eksokrin).</p>
            </ol>
            <div class="container mt-4 subbab-type-1">
                <ol type="A">
                    <div>
                        <h4>
                            <li>
                                Sistem Saraf Manusia
                            </li>
                        </h4>
                        <p>Sistem saraf memiliki tanggung jawab atas kontrol dan koordinasi (mengelola) pada semua bagian
                            tubuh manusia. Fungsi dari sistem saraf untuk menerima dan merspon sinyal rangsangan dari dalam
                            ataupun luar tubuh. Sistem saraf tersusun oleh jutaan sel saraf biasa disebut neuron. Neuron
                            inilah yang mempunyai peran untuk menghantarkan impuls (rangsangan). Berikut ini merupakan
                            struktur dari neuron.</p>
                        <img src="img/struktur_neuron.jpg" alt="Struktur Neuron">
                        <ol type="1">
                            <div>
                                <h5>
                                    <li>Badan Sel</li>
                                </h5>
                                <p>Badan sel pada saraf terdapat inti sel dan sitoplasma, pada sitoplasma terdapat
                                    mitokondria yang memiliki fungsi sebagai penyedia energi untuk membawa suatu
                                    rangsangan(impuls).</p>
                                <img src="img/badan-sel.jpg" alt="Badan sel">
                            </div>
                            <div>
                                <h5>
                                    <li>Dendrit</li>
                                </h5>
                                <p>Dendrit merupakan serabut penjuluran dari sitoplasma. Disebuah neuron umumnya terdapat
                                    begitu banyak dendrit dan ukuran dendrit pendek. Fungsi dendrit adalah sebagai penerima
                                    impuls (rangsangan/sinyal) dari sel lain seperti rangsangan yang diterima oleh tubuh
                                    bagian dalam maupun luar.</p>
                                <img src="img/sinapsis-dan-akson.jpg" alt="proses penerimaan impuls">
                            </div>
                            <div>
                                <h5>
                                    <li>Akson</li>
                                </h5>
                                <p>Setelah impuls diterima oleh badan sel dari dendrit, selnajutnya impuls akan diteruskan
                                    oleh akson menuju sel-sel lainnya. Akson merupakan serabut-serabut penjuluran dari
                                    sitoplasma yang panjang. Pada sebuah neuron akan terdapat sartu akson. Jadi fungsi dari
                                    akson ini adalah membawakan rangsangan dari badan sel ke sel saraf lain.</p>
                                <img src="img/sel-schwan.jpg"
                                    alt="bagian pada akson, selubung mielin, sel schwan, nodus ranvier">
                            </div>
                            <div>
                                <h5>
                                    <li>Selubung Mielin</li>
                                </h5>
                                <p>Akson juga diselimuti oleh selubung lemak yang disebut mielin yang terdiri atas perluasan
                                    membran sel schwan, selubung mielin memiliki fungsi sebagai isolator dan pemberi makan
                                    sel saraf, selain untuk melindungi akson selubung mielin juga berfunsgi untuk
                                    mempercepat jalannya impuls yang dikirimkan oleh akson menuju sel-sel lainnya.</p>
                            </div>
                            <div>
                                <h5>
                                    <li>Nodus Ranvier</li>
                                </h5>
                                <p>Selubung mielin tidak sepenuhnya menyelubungi akson, ada juga akson yang tidak tertutupi
                                    oleh mielin yang disebut sebagai nodus ranvier. Nodus ranvier mempunya fungsi sebagai
                                    tempat masuknya ion.</p>
                            </div>
                            <div>
                                <h5>
                                    <li>Sinapsis</li>
                                </h5>
                                <p>Impuls yang di antar oleh akson akan tiba pada penghujung akson yang kita sebut sebagai
                                    sinapsis. Sinapsis berfungsi sebagai penghubung antar sel saraf dengan sel lainnya. Pada
                                    bagian sinapsis inilah suatu zat kimia yaitu neurotransmitter menyeberang untuk membawa
                                    impuls dari ujung akson ke dendrit neuron selanjutnya.</p>
                            </div>
                        </ol>
                        <p>Saat kita menggerakkan bagian badan karena kemauan kita atau atas perintah otak seperti menulis,
                            membuka payung, mengambil barang, ataupun berlari dan berjalan hal tersebut merupakan contoh
                            gerak yang dapat kita sadari sehingga dinamakan gerak sadar. Gerak sadar ini merupakan gerakan
                            tubuh yang di koordinasikan oleh otak. Rangsangan yang diterima oleh reseptor (alat indra)
                            dikirim ke sistem saraf pusat melalui neuron sensorik. Jika membutuhkan respons sadar, sinyal
                            diproses di otak, tetapi jika responsnya refleks, sinyal diproses langsung di sumsum tulang
                            belakang. Interneuron dalam sistem saraf pusat meneruskan sinyal ke neuron motorik. Neuron
                            motorik kemudian membawa sinyal ke efektor (otot atau kelenjar), sehingga tubuh melakukan
                            respons sesuai perintah yang diberikan. Secara ringkas bisa kita buat skema sebagai berikut.</p>
                        <ol type="1">
                            <li>Rangsangan diterima oleh reseptor (alat indra).</li>
                            <li>Neuron sensorik membawa sinyal ke Sistem Saraf Pusat (SSP), yaitu otak atau sumsum tulang
                                belakang.</li>
                            <li>Di SSP, interneuron akan meneruskan sinyal ke otak untuk diproses lebih lanjut jika
                                responsnya sadar. Jika responsnya refleks, sumsum tulang belakang langsung menghubungkan
                                neuron sensorik dengan neuron motorik tanpa ke otak.</li>
                            <li>Neuron motorik akan membawa sinyal dari SSP ke efektor.</li>
                            <li>Efektor (otot atau kelenjar) akan merespons sesuai sinyal yang diterima.</li>
                        </ol>
                        <br>
                        <p>Selain gerak sadar tubuh kita juga kadang-kadangn melakukan suatu gerakan yang terjadi secara
                            tiba tiba tanpa disadari, seperti saat lutut diketuk/ dipukul pada bagian tendon. Secara tidak
                            sadar kaki kita akan menyentak. Gerakan yang dilakukan oleh kaki tersebut terjadi secara
                            tiba-tiba dan tidak ada perintah dari otak. Gerakan seperti ini disebut sebagai gerak refleks.
                            Pada gerak refleks terdapat dua macam jalannya impuls yaitu lintasan refleks spinalis dan
                            lintasan refleks cranialis. Lintasan refleks spinalis yaitu gerakan refleks yang melalui sumsum
                            tulang belakang. Seperti gerakan mengangkat kaki secara tiba-tiba saat lutut dipukul. Sedangkan
                            lintasan cranialis yaitu apabila lintasan gerak refleks melalui otak, tetapi otak memberikan
                            tanggapan langsung tanpa kesadaran manusia, seperti gerak mengecilnya pupil mata apabila mata
                            menerima cahaya yang terang.</p>
                    </div>
                    <div>
                        <h4>
                            <li>
                                Sistem Saraf Sadar Manusia
                            </li>
                        </h4>
                        <p>Jutaan sel-sel saraf yang bergabung membentuk suatu sistem dinamakan sistem saraf. sistem saraf
                            ada dua yaitu saraf sadar dan saraf tak sadar, saraf sadar terdiri dari susunan saraf pusat dan
                            susunan saraf tepi. Saraf pusat terdiri dari otak dan sumsum tulang belakang. Sedangkan saraf
                            tepi tersusun dari serabut-serabut saraf yang menuju ke susunan saraf pusat dari saraf pusat ke
                            seluruh tubuh.</p>
                        <ol type="1">
                            <div>
                                <h5>
                                    <li>Sistem Saraf Pusat (SSP)</li>
                                </h5>
                                <p>Semua kegiatan tubuh pada manusia akan diatur oleh pusat susunan saraf yaitu otak dan
                                    sumsum tulang belakang. SSP manusia berupa otak dan sumsum tulang belakang (medula
                                    spinalis). Kemudian ada selaput meninges yang akan melindungi otak dan medula spinalis,
                                    selaput meninges ini terdiri dari tiga lapisan dari luar kedalam yaitu durameter,
                                    arachnoid, dan piameter.</p>
                                <ol type="a">
                                    <div>
                                        <h6>
                                            <li>Otak</li>
                                        </h6>
                                        <p>Otak berada pada rongga tengkorak dan dibungkus oleh 3 lapisan selaput kuat yang
                                            disebut meninges, selaput yang berada paling luar adalah durameter, paling dalam
                                            piameter, dan yang berada di antara durameter dan piameter adalah arachnoid.
                                            Diantara ketiga selaput tersebut terdapat cairan yang berfungsi untuk mengurangi
                                            benturan dan goncangan yaitu cairan serebrospinal. Pada selaput ini juga bisa
                                            terjadi peradangan yang dinamakan meningitis, penyebabnya bisa karena infeksi
                                            virus.Pada otak manusia kemudia terbagi lagi menjadi tiga bagian yaitu cerebrum
                                            (otak besar), cerebellum (otak kecil), dan batang otak.</p>
                                        <ol class="custom-list">
                                            <div>
                                                <li>Cerebrum (Otak Besar)</li>
                                                <p>Cerebrum terletak didalam tulang tengkorak, cerebrum memiliki permukaan
                                                    yang berlipat-lipat dan terbagi atas dua belahan yaitu otak kanan dan
                                                    kiri. Otak kiri melayani tubuh bagian kanan dan belahan otak kanan
                                                    melayani tubuh bagian kiri. Cerebrum ini terdiri dari dua lapisan.
                                                    Lapisan korteks adalah lapisan luar yang berwarna kelabu, lapisan ini
                                                    berisikan badan-badan sel saraf. Lapisan dalam berwarna putih berisikan
                                                    serabut-serabut saraf. Cerebrum (otak besar) memiliki fungsi sebagai
                                                    pusat kegiatan yang disadari seperti berpikir, mengingat, berbicara,
                                                    melihat, mendengar, dan bergerak.</p>
                                            </div>
                                            <div>
                                                <li>Cerebellum (Otak Kecil)</li>
                                                <p>Cerebellum berada dibawah otak besar bagian belakang, susunan yang ada
                                                    pada cerebellum seperti susunan pada cerebrum. Yaitu terdiri dari
                                                    belahan kanan dan kiri serta terbagi menjadi dua lapis. Lapisan luar
                                                    berwarna kelabu dan lapisan dalam berwarna putih. Belahan kan dan kiri
                                                    pada cerebellum dibungkus oleh jembatan varol. Cerebellum ini berfungsi
                                                    sebagai pengatur keseimbangan tubuh dan mengkoordinasi kerja otot ketika
                                                    bergerak.</p>
                                            </div>
                                            <div>
                                                <li>Sumsum Lanjutan</li>
                                                <p>Sumsum lanjutan membentuk bagian bawah batang otak serta menghubungkan
                                                    pons varoli dengan sumsum tulang belakang (medula spinalis). Sumsum
                                                    tulang belakang memiliki fungsi sebagai berikut :</p>
                                                <ul class="bullet-list">
                                                    <li>Pusat pengendali pernapasan,</li>
                                                    <li>Menyempitkan pembuluh darah,</li>
                                                    <li>Mengatur denyut jantung,</li>
                                                    <li>Dan mengatur suhu tubuh.</li>
                                                </ul>
                                                <br>
                                            </div>
                                        </ol>
                                    </div>
                                    <div>
                                        <h6>
                                            <li>Medula Spinalis (sumsum tulang belakang)</li>
                                        </h6>
                                        <p>Medula spinalis berada memanjang di dalam rongga tulang belakang, mulai dari
                                            ruas-ruas tulang leher sampai ruas tulang pinggang kedua. Medula spinalis juga
                                            dibungkus oleh selapus meninges. Bila diamati secara melintang, medula spinalis
                                            pada bagian luar tampak berwarna putih (substansi alba) dan bagian dalam
                                            berbentuk seperti kupu-kupu, berwarna kelabu (substansi grissea). Pada bagian
                                            yang berwarna putih terdapat banyak akson (neurit) yang diselimuti oleh selubung
                                            myelin. Bagian ini berfungsi untuk menghantarkan impuls menuju otak dan dari
                                            otak menuju efektor, sedangkan bagian yang berwarna kelabu mengandung serabut
                                            saraf yang tidak ada myelinnya, pada bagian ini dibedakan menjadi dua yaitu akar
                                            dorsal atau akar posterir dan akan ventral atau akar anterior. Akar dorsal
                                            mengandung neuron sensorik dan akan ventral mengandung neuron motorik. Adapun
                                            fungsi dari medula spinalis adalah untuk :</p>
                                        <ol class="custom-list">
                                            <li>Menghantarkan impuls dari dan ke otak,</li>
                                            <li>Memberi kemungkinan jalan terpendek gerak refleks.</li>
                                        </ol>
                                        <br>
                                    </div>
                                </ol>
                            </div>
                            <div>
                                <h5>
                                    <li>Sistem Saraf Tepi</li>
                                </h5>
                                <p>Saraf tepi tersusun dari serabut-serabut saraf dari dan kepusat susunan saraf, susunan
                                    saraf tepi berupa 12 pasang searbut saraf dari otak dan 31 pasang serabut saraf dari
                                    medula spinalis.</p>
                                <ol type="a">
                                    <div>
                                        <h6>
                                            <li>Saraf Otak</li>
                                        </h6>
                                        <p>
                                            Saraf otak berada pada bagian kepala yang keluar dari otak dan melewati lubang
                                            yang terdapat pada tulang tengkorak. Urat saraf ini berjumlah 12 pasang,
                                            berhubungan erat dengan otot mata, telinga, hidung, lidah, dan kulit. Kedua
                                            belas pasang urat saraf otak tersebut secara ringkas tercantum dalam tabel
                                            berikut.
                                        <div class="table-container">
                                            <table class="table-container">
                                                <tr>
                                                    <th>Urutan Saraf</th>
                                                    <th>Saraf dan Fungsi</th>
                                                    <th>Nama Saraf</th>
                                                    <th>Sifat Saraf</th>
                                                </tr>
                                                <tr>
                                                    <td>I</td>
                                                    <td>Nervus Olfactorius</td>
                                                    <td>Sensorik</td>
                                                    <td>Hidung, Sebagai alat penciuman</td>
                                                </tr>
                                                <tr>
                                                    <td>II</td>
                                                    <td>Nervus Optikus</td>
                                                    <td>Sensorik</td>
                                                    <td>Bolamata, Sebagai alat untuk penglihatan</td>
                                                </tr>
                                                <tr>
                                                    <td>III</td>
                                                    <td>Nervus Okulomotoris</td>
                                                    <td>Motorik</td>
                                                    <td>Penggerak bola mata dan mengangkat kelopak mata</td>
                                                </tr>
                                                <tr>
                                                    <td>IV</td>
                                                    <td>Nervus Troklearis</td>
                                                    <td>Motorik</td>
                                                    <td>Mata, Memutar mata dan penggerak bolamata</td>
                                                </tr>
                                                <tr>
                                                    <td>V</td>
                                                    <td>
                                                        <ul>
                                                            <li>Nervus Trigeminus</li>
                                                            <li>N. Oftalmikus</li>
                                                            <li>N. Maksilaris</li>
                                                            <li>N. Mandibularis</li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>Motorik dan Sensorik</li>
                                                            <li>Motorik dan Sensorik</li>
                                                            <li>Sensorik</li>
                                                            <li>Motorik dan Sensorik</li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>-</li>
                                                            <li>Kulit kepala dan kelopak mata atas</li>
                                                            <li>Rahang atas, Palatum, dan Hidung</li>
                                                            <li>Rahang bawah dan lidah</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>VI</td>
                                                    <td>Nervus Abdusen</td>
                                                    <td>Motorik</td>
                                                    <td>Matan, Penggoyang sisi mata</td>
                                                </tr>
                                                <tr>
                                                    <td>VII</td>
                                                    <td>Nervus Fasialis</td>
                                                    <td>Motorik dan Sensorik</td>
                                                    <td>Otot lidah, menggerakkan lidah dan selaput lendir rongga mulut</td>
                                                </tr>
                                                <tr>
                                                    <td>VIII</td>
                                                    <td>Nervus Auditorius</td>
                                                    <td>Sensorik</td>
                                                    <td>Telinga, Rangsangan pendengaran</td>
                                                </tr>
                                                <tr>
                                                    <td>IX</td>
                                                    <td>Nervus Gloso-faringeis</td>
                                                    <td>Sensorik dan Motorik</td>
                                                    <td>Faring, Tonsil dan, Lidah, rangsangan cita rasa</td>
                                                </tr>
                                                <tr>
                                                    <td>X</td>
                                                    <td>Nervus Vagus</td>
                                                    <td>Sensorik dan Motorik</td>
                                                    <td>Jantung, Lambung, Usus halus, Laring</td>
                                                </tr>
                                                <tr>
                                                    <td>XI</td>
                                                    <td>Nervus Asesorius</td>
                                                    <td>Motorik</td>
                                                    <td>Leher, Otot leher</td>
                                                </tr>
                                                <tr>
                                                    <td>XII</td>
                                                    <td>Nervus Hipoglosus</td>
                                                    <td>Motorik</td>
                                                    <td>Lidah, Cita rasa, dan otot lidah</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <br>
                                        Dari kedua belas saraf otak tersebut dapat dikelompokkan menjadi 3 macam yaitu :
                                        <ol class="custom-list">
                                            <li>Saraf sensorik : saraf nomor I, II, VIII</li>
                                            <li>Saraf motorik : saraf nomor III, IV, VI, XI, XII</li>
                                            <li>Saraf gabungan sensorik dan motorik : saraf nomor V, VII, IX, dan X</li>
                                        </ol>
                                        Ada saraf yang mempunyai jangkauan fungsi sangat luas yaitu saraf nomor X (saraf
                                        vagus). Sehingga disebut saraf pengembara. Sifat kerja saraf vagus seperti saraf
                                        parasimpatik.
                                        </p>
                                        <br>
                                    </div>
                                    <div>
                                        <h6>
                                            <li>Saraf Medula Spinalis (Sumsum tulang belakang)</li>
                                        </h6>
                                        <p>
                                            Saraf medula spinalis berjumlah 31 pasang yang keluar dari :
                                        <ol class="custom-list">
                                            <li>Ruas-ruas tulang leher : 8 pasang</li>
                                            </li>
                                            <li>Ruas-ruas tulang punggung : 12 pasang</li>
                                            <li>Ruas-ruas tulang pinggang : 5 pasang</li>
                                            <li>Ruas-ruas tulang kelangkang : 5 pasang</li>
                                            <li>Ruas-ruas tulang ekor : 1 pasang</li>
                                        </ol>
                                        Semua saraf pada medula spinalis bersifat campuran artinya saraf ini untuk
                                        meneruskan impuls dari reseptor kesistem saraf pusat juga meneruskan impuls dari
                                        sistem saraf pusat ke semua otot rangka tubuh. Semua neuron sensorik masuk ke medula
                                        spinalis melalui akar dorsal dan neuron motorik keluar dari medula spinalis melalui
                                        akar ventral.
                                        </p>
                                    </div>
                                </ol>
                            </div>
                        </ol>
                    </div>
                    <div>
                        <h4>
                            <li>
                                Sistem Saraf Tak Sadar
                            </li>
                        </h4>
                        <p>
                            Sistem saraf autonom adalah bagian dari susunan saraf tepi yang bekerjanya tidak dapat disadari
                            dan bekerja secara otomatis. Sistem saraf autonom mengendalikan kegiatan organ-organ dalam
                            seperti otot perut, pembuluh darah, jantung dan alat-alat reproduksi. Menurut fungsinya, saraf
                            autonom terdiri dari dua macam yaitu :
                        <ol type="1">
                            <li>Sistem Saraf Simpatik</li>
                            <li>Sistes Saraf Parasimpatik</li>
                        </ol>
                        <br>
                        Sistem saraf simpatik terdiri dari 25 pasang ganglion yang berasal dari :
                        <ol type="1">
                            <li>Ruas tulang belakang : 3 pasang</li>
                            <li>Ruas tulang punggung : 11 pasang</li>
                            <li>Ruas tulang pinggang : 4 pasang</li>
                            <li>Ruas tulang kelangkan : 4 pasang</li>
                            <li>Ruas tulang ekor : 3 pasang</li>
                        </ol>
                        </p>
                        <p>Dari ganglion-ganglion tersebut keluar serabut saraf yang mengendalikan kerja organ seperti
                            jantung, pembuluh darah, kelenjar keringat dan semua alat dalam. Serabut saraf dari sistem
                            parasimpatik juga menuju ke organ-organ yang dikendalikan oleh saraf simpatik. Sistem saraf
                            simpatik dan saraf parasimpatik bekerja secara antagonis (berlawanan) dalam mengendalikan suatu
                            organ. Organ atau kelenjar yang dikendalikan sistem saraf simpatik dan sistem saraf parasimpatik
                            disebut sistem pengendalian ganda. Apabila suatu organ menjadi aktif karena rangsangan saraf
                            simpatik, maka pada lain pihak akan dilambatkan atau dihentikan oleh saraf parasimpatik.</p>
                    </div>
                </ol>
            </div>
        </div>
    </div>
@endsection
