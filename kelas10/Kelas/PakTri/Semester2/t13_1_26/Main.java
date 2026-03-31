public class Main {
    public static void main(String[] args) {
        // ====== Operator Aritmatika ======
        int a = 10;
        int b = 3;

        int penjumlahan = a + b;
        System.out.println("hasil dari Penjumlahan: " + penjumlahan);

        int pengurangan = a - b;
        System.out.println("hasil dari Pengurangan: " + pengurangan);

        int perkalian = a * b;
        System.out.println("hasil dari Perkalian: " + perkalian);

        double pembagian = a / b;
        System.out.println("hasil dari Pembagian: " + pembagian);

        int modulus = a % b;
        System.out.println("hasil dari Modulus: " + modulus);


        // Operator Penugasan
        int c = 15;
        c += 5; // c = c + 5
        System.out.println("nilai c setelah penugasan += : " + c);

        c -= 3; // c = c - 3
        System.out.println("nilai c setelah penugasan -= : " + c);

        c *= 2; // c = c * 2
        System.out.println("nilai c setelah penugasan *= : " + c);

        c /= 4; // c = c / 4
        System.out.println("nilai c setelah penugasan /= : " + c);

        c %= 6; // c = c % 6
        System.out.println("nilai c setelah penugasan %= : " + c);


        // Operator Perbandingan
        int d = 8;
        int e = 12;

        boolean hasil1 = d == e;
        System.out.println("d == e: " + hasil1);

        boolean hasil2 = d != e;
        System.out.println("d != e: " + hasil2);

        boolean hasil3 = d > e;
        System.out.println("d > e: " + hasil3);

        boolean hasil4 = d < e;
        System.out.println("d < e: " + hasil4);

        boolean hasil5 = d >= e;
        System.out.println("d >= e: " + hasil5);

        boolean hasil6 = d <= e;
        System.out.println("d <= e: " + hasil6);

        // Operator Logika
        boolean t = true;
        boolean f = false;

        boolean logika1 = t && f;
        System.out.println( t + " && : " + f + " : " + logika1);

        boolean logika2 = t || f;
        System.out.println( t + " || " + f + ": " + logika2);

        boolean logika3 = !t;
        System.out.println("!" + t + ": " + logika3);

        


    }
}
