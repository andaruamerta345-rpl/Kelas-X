package kelas10.Kelas.PakTri.Semester2.t27_4_26;

// 1. Mengimport class dari package lain
import kelas10.Kelas.PakTri.Semester2.t27_4_26.Siswa.DataSiswa;
import kelas10.Kelas.PakTri.Semester2.t27_4_26.Sekolah.Sekolah;

public class Main {
    public static void main(String[] args) {
        // 2. Membuat object (instansiasi) dari class yang di-import
        DataSiswa siswa1 = new DataSiswa();
        Sekolah sekolah1 = new Sekolah();

        // 3. Memanggil method dari object tersebut
        siswa1.info();
        sekolah1.info( );
    }
}
