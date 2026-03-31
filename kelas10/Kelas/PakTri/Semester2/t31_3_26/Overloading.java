public class Overloading {
    void DataKelas (String nmkelas){
        System.out.println("Nama kelas : " + nmkelas);
    }
    
    void DataKelas (String nmkelas, int jumlah){
        System.out.println("Nama kelas : " + nmkelas);
        System.out.println("Jumlah siswa " + nmkelas +" : " + jumlah);
    }

    void namaKeren (String nama, int umur){
        System.out.println("Nama : " + nama);
        System.out.println("Umur : " + umur);
    }    
}

class loading  {
    void tampilData (String nama, int umur){
        System.out.println("Nama : " + nama);
        System.out.println("Umur : " + umur);
    }
}

class space{
    void spasi (String spasi){
        System.out.println("");
    }
}

