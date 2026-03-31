

public class Main {

    static String sapa (String nama, int umur, String hobi){
        return "Halo " + nama + ", selamat datang. Umur kamu " + umur + " tahun. Hobi kamu " + hobi;
    }

    public static void main(String[] args) {
       sapa("Amerta", 15, "Ngoding"); 
       sapa("Budi", 16, "Bermain Bola");

       String hasil = sapa("Siti", 17, "Membaca");
       System.out.println(hasil);
    }
}
