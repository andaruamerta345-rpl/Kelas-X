import java.util.Scanner;
public class Main {
    public static void main(String[] args) {
        // percabangan if else 1
        int nilai = 45;
        if (nilai >= 70) {
            System.out.println("Selamat, Anda Lulus!");
        } else {
            System.out.println("Maaf, Anda Tidak Lulus.");
        }


        // percabangan if else 2
        Scanner scanner = new Scanner(System.in);
        System.out.print("Masukkan nilai anda: ");
        int nilai2 = scanner.nextInt();
        if (nilai2 < 0 || nilai2 > 100) {
            System.out.println("Nilai tidak valid");
        } else{
            if (nilai2 >= 90) {
            System.out.println("A");
            } else if (nilai2 >= 80) {
                System.out.println("B");
            } else if (nilai2 >= 70) {
                System.out.println("C");    
            } else if (nilai2 >= 70) {
                System.out.println("D");
            } else if (nilai2 < 60) {
                System.out.println("E");
            }
        }
        
        scanner.close();


    }
}