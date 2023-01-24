<!DOCTYPE html>
<html lang="en">

<head>
<title>Table Jadwal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    @include('layout/css')
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Sidebar Start -->
        @include('layout/sidebar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('layout/navbar')
            <!-- Navbar End -->

        <h2 class="text-center my-4">Jadwal Pelajaran</h2>
        <table class="table table-bordered mx-4">
            <thead>
                <tr class="text-dark">       
                    <th width="50px"class="text-center">No</th>                            
                    <th width="50px"class="text-center">Hari</th>
                    <th width="50px"class="text-center">Mapel</th>
                    <th width="50px"class="text-center">Dosen</th>
                    <th width="50px"class="text-center">Waktu</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>1</td>
                    <td>Senin</td>
                    <td>MTK
                        <br>IPA
                        <br>IPS
                        <br>TIK
                    </td>
                    <td>Bp.Darsono
                        <br>Bp.Herdi
                        <br>Bu.Sulis
                        <br>Bp.tobing
                    </td>
                    <td>3 jam
                        <br>2 jam 
                        <br>2 jam 
                        <br>3 jam
                    </td>
                </tr>
                <tr class="text-center">
                    <td>2</td>
                    <td>Selasa</td>
                    <td>Agama
                        <br>IPA
                        <br>B.Indonesia
                        <br>B.Inggris
                    </td>
                    <td>Bp.Apip
                        <br>Bp.Teguh
                        <br>Bp.Ilyas
                        <br>Bu.Tiwi
                    </td>
                    <td>3 jam
                        <br>3 jam 
                        <br>3 jam 
                        <br>1 jam
                    </td>
                </tr>
                <tr class="text-center">
                    <td>3</td>
                    <td>Rabu</td>
                    <td>B.Indonesia
                        <br>B.Jawa
                        <br>Sejarah
                        <br>PKN
                    </td>
                    <td>Bu.Arum
                        <br>Bu.Rini
                        <br>Bu.Tika
                        <br>Bp.Sunarno
                    </td>
                    <td>3 jam
                        <br>2 jam 
                        <br>3 jam 
                        <br>2 jam
                    </td>
                </tr>
                <tr class="text-center">
                    <td>4</td>
                    <td>kamis</td>
                    <td>PPL
                        <br>Agama
                        <br>B.Indonesia
                        <br>B.Inggris
                    </td>
                    <td>Bu. Carolin
                        <br>Bu. Isti
                        <br>Bp.Arum
                        <br>Bu.Tiwi
                    </td>
                    <td>3 jam
                        <br>2 jam 
                        <br>2 jam 
                        <br>3 jam
                    </td>
                </tr>
                <tr class="text-center">
                    <td>5</td>
                    <td>Jumat</td>
                    <td>PWPB
                        <br>PKKWU
                        <br>PBO
                        <br>PPL
                    </td>
                    <td>Bp.Apip
                        <br>Bp.Teguh
                        <br>Bp.Ilyas
                        <br>Bu.Carolin
                    </td>
                    <td>3 jam
                        <br>2 jam 
                        <br>3 jam 
                        <br>2 jam
                    </td>
                </tr>
            </tbody>
        </table>
            <!-- Footer Start -->
            @include('layout/footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->
    </div>

    <!-- JavaScript Libraries -->
    @include('layout/js')
</body>

</html>
