package kelas10.Kelas.PakTri.Semester2.t24226;

public class Main {

    public static void main(String[] args) {

        //  METHOD PROCEDURE 
        MuridRpl murid = new MuridRpl();
        murid.nama = "Rizky";
        murid.absen = 26;
        murid.usia = 17;
        murid.dataSiswa();

        System.out.println("");

        MuridRpl murid2 = new MuridRpl();
        murid2.nama = "Dimas";
        murid2.absen = 27;
        murid2.usia = 17;
        murid2.dataSiswa(); 

        System.out.println("");



         
        // METHOD FUNCTION
        persegi persegi1 = new persegi();
        persegi1.s = 5;
        System.out.println("Luas Persegi " + persegi1.s + " x " + persegi1.s + " = " + persegi1.L());

        persegi persegi2 = new persegi();
        persegi2.s = 10;
        System.out.println("Luas Persegi " + persegi2.s + " x " + persegi2.s + " = " + persegi2.L());


        System.out.println("");
        System.out.println("");

        // MANDIRI

        SiswaRpl siswa1 = new SiswaRpl();
        siswa1.nama = "Rizky";
        siswa1.hobi = "Sepak Bola";
        siswa1.dataSiswa();

        SiswaRpl siswa2 = new SiswaRpl();
        siswa2.nama = "Dimas";
        siswa2.hobi = "Berenang";
        System.out.println("Hobi "+ siswa2.nama + " adalah " + siswa2.hobiSiswa());

        System.out.println("");

        buah buahJeruk = new buah();
        buahJeruk.nama = "Jeruk";
        buahJeruk.warna = "Oranye";
        buahJeruk.dataBuah();

        System.out.println("");

        buah buahApel = new buah();
        buahApel.nama = "Apel";
        buahApel.warna = "Hijau";
        buahApel.dataBuah();
    }
}


 class MuridRpl {

    String nama ;
    int absen ;
    int usia ;
    void dataSiswa(){
        System.out.println("Nama saya adalah    : " + nama);
        System.out.println("Absen saya adalah   : " + absen);
        System.out.println("Usia saya adalah    : " + usia);
    }

}

class persegi{
    int s;
    int L(){
        return s * s;
    }
}



class buah {
    String nama;
    String warna;
    void dataBuah(){
        System.out.println("Nama buah ini adalah : " + nama);
        System.out.println("Warna buah ini adalah : " + warna);
    }
}


// Jenis method :
// 1. Method procedure : method yang tidak mengembalikan nilai atau void
// 2. Method function : method yang mengembalikan nilai atau return type    