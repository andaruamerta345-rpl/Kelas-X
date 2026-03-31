public class Main {

    void sapa (){
        System.out.println("Hello World");
    }

    String nama;
    Main (String nama){
        this.nama = nama;
    }
    
    void sapa1 (String nama){
        System.out.println("Halo, selamat datang " + nama);
    }

    Main(){}
    public static void main(String[] args) {
        Main orang = new Main("Budi");
        orang.sapa();

        Main orang2 = new Main("Siti");
        orang2.sapa1(orang2.nama);
    }

}