import java.util.Scanner;
public class Main {

    public static void main(String[] args) {
        // STRING
        Scanner inputUser = new Scanner(System.in);
        Scanner inputAbsen = new Scanner(System.in);
        System.out.println("Masukkan nama Anda: ");
        System.out.println("Masukkan absen Anda: ");
        String nama = inputUser.nextLine();
        String absen = inputAbsen.nextLine();
        System.out.println("Halo, " + nama + "Absen: " + absen + "Selamat datang di program Java.");
        inputUser.close();
        inputAbsen.close();

        // INT
        Scanner inputUang = new Scanner(System.in);
        System.out.println("Masukkan jumlah uang saku Anda: ");
        int uang = inputUang.nextInt();
        System.out.println("Uang saku Anda: " + uang);
        inputUang.close();

        // DOUBLE
        Scanner inputUang2 = new Scanner(System.in);
        System.out.println("Masukkan jumlah uang saku Anda: ");
        double uang2 = inputUang2.nextDouble();
        System.out.println("Uang saku Anda: " + uang2);
        inputUang2.close();

        // FLOAT
        Scanner inputUang3 = new Scanner(System.in);
        System.out.println("Masukkan jumlah uang saku Anda: ");
        float uang3 = inputUang3.nextFloat();
        System.out.println("Uang saku Anda: " + uang3);
        inputUang3.close();

        // BOOLEAN
        Scanner inputBenar = new Scanner(System.in);
        System.out.println("Apakah Anda suka belajar Java? (true/false): ");
        boolean benar = inputBenar.nextBoolean();
        System.out.println("Jawaban Anda: " + benar);
        inputBenar.close();

        // CHAR
        Scanner inputKarakter = new Scanner(System.in);
        System.out.println("Masukkan satu karakter: ");
        char karakter = inputKarakter.next().charAt(0);
        System.out.println("Karakter Anda: " + karakter);
        inputKarakter.close();
    }
}