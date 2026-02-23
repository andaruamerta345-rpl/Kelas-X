import java.util.Scanner;
public class belajarLoop {  
    public static void main(String[] args) {
        System.out.println("Masukkan angka: ");
        Scanner input1 = new Scanner(System.in);
        int angka = input1.nextInt();


        System.out.println("Masukkan kata: ");
        Scanner nama = new Scanner(System.in);
        String kata = nama.nextLine();
        for (int i = 1; i <= angka; i++) {
            System.out.println(i + ". " + kata);
        }


        Scanner tinggi = new Scanner(System.in);
        System.out.println("Masukkan tinggi segitiga: ");
        int T = tinggi.nextInt();
        // Segitiga looping 1
        System.out.println("\nSegitiga looping kiri bawah");
        for (int i = 1; i <= T; i++) {
            for (int j = 1; j <= i; j++) {
                System.out.print("*");
            }
            System.out.println();
        }


        // Segitiga looping 3
        System.out.println("\nSegitiga looping kanan bawah");
        for (int i = 1; i <= T; i++) {
            for (int j = 1; j <= T - i; j++) {
                System.out.print(" ");
            }
            for (int j = 1; j <= i; j++) {
                System.out.print("*");
            }
            System.out.println();
        }


        // Segitiga looping 2
        System.out.println("\nSegitiga looping kiri atas");
        for (int i = T; i >= 1; i--) {
            for (int j = 1; j <= i; j++) {
                System.out.print("+");
            }
            System.out.println();
        }

        
        input1.close();
        nama.close();
        tinggi.close();
    }
}
