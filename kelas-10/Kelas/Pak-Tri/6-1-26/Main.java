import java.util.Scanner; //untuk input user

public class Main {
    public static void main(String[] args) {
        
        // print (println adalah print dengan baris baru, sedangkan print tanpa baris baru)
        System.out.println("Hello, World!");
        System.out.print("Hello, ");
        System.out.println("World!");

        // Variable
        String nama = "Andaru";
        int umur = 16;
        double tinggi = 170.5;
        boolean isStudent = true;

        System.out.println("Nama: " + nama );
        System.out.println("Umur: " + umur );
        System.out.println("Tinggi: " + tinggi );
        System.out.println("Is Student: " + isStudent );

        // Input user (jangan lupa import Scanner)
        Scanner input = new Scanner(System.in);

        System.out.print("Masukkan nama Anda: ");
        String userName = input.nextLine();
        System.out.print("Masukkan umur Anda: ");
        int userUmur = input.nextInt();

        System.out.println("Nama Anda: " + userName);
        System.out.println("Umur Anda: " + userUmur);
        input.close();




        // if else
        if (userUmur < 18) {
            System.out.println("Anda masih di bawah umur.");
        } else {
            System.out.println("Anda sudah dewasa.");
        } 


        // Looping (for loop)
        System.out.println("Perulangan dari 1 sampai 10:");
        for (int i = 1; i <= 10; i++) {
            System.out.println("Perulangan ke-" + i);
        }

        // Segitiga dari looping
        System.out.println("Segitiga :");
        for (int i = 1; i <= 5; i++) {
            for (int j = 1; j <= i; j++) {
                System.out.print("*");
            }
            System.out.println();
        }
    }
}