// Aturan dalam penulisan kode Java
// 1. Nama file harus sesuai dengan nama kelas publik di dalamnya.
// 2. Setiap pernyataan harus diakhiri dengan titik koma (;).
// 3. Blok kode harus dibuka dan ditutup dengan kurung kurawal ({ }).
// 4. Java bersifat case-sensitive, jadi "Main" dan "main" adalah berbeda.
// 5. Setiap kelas harus memiliki metode main sebagai titik masuk program.
// 6. Gunakan indentasi yang konsisten untuk meningkatkan keterbacaan kode.
// 7. Komentar dapat ditambahkan menggunakan // untuk komentar satu baris atau /* */ untuk komentar multiline.


import java.util.Scanner; //untuk input data
public class Main {
    public static void main(String[] args) {

        // Contoh kode dasar untuk menampilkan teks
        System.out.println("Hello, World!");

        // variabel dan tipe data
        int angka = 42;
        System.out.println("Angka: " + angka);

        double desimal = 3.14;
        System.out.println("Desimal: " + desimal);

        char karakter = 'J';
        System.out.println("Karakter: " + karakter);

        boolean benar = true;
        System.out.println("Benar: " + benar);

        String teks = "Belajar Java";
        System.out.println("Teks: " + teks);

        // Konstanta
        final String NAMA_SEKOLAH = "SMKN 2 Buduran Sidoarjo";
        System.out.println("Nama Sekolah: " + NAMA_SEKOLAH);

        // Operator Matematika
        int a = 10;
        int b = 5;

        int penjumlahan = a + b;
        System.out.println("Penjumlahan: " + penjumlahan);

        int pengurangan = a - b;
        System.out.println("Pengurangan: " + pengurangan);

        int perkalian = a * b;
        System.out.println("Perkalian: " + perkalian);

        int pembagian = a / b;
        System.out.println("Pembagian: " + pembagian);

        int sisaBagi = a % b;
        System.out.println("Sisa Bagi: " + sisaBagi);

        // Operator penugasan
        int c = 20;
        c += 5; // c = c + 5
        System.out.println("c setelah penugasan += : " + c);

        c -= 10; // c = c - 10
        System.out.println("c setelah penugasan -= : " + c);

        c *= 2; // c = c * 2
        System.out.println("c setelah penugasan *= : " + c);

        c /= 3; // c = c / 3
        System.out.println("c setelah penugasan /= : " + c);

        c %= 4; // c = c % 4
        System.out.println("c setelah penugasan %= : " + c);

        // Operator perbandingan
        int d = 10;
        int e = 20;

        System.out.println("d == e: " + (d == e));
        System.out.println("d != e: " + (d != e));
        System.out.println("d > e: " + (d > e));
        System.out.println("d < e: " + (d < e));
        System.out.println("d >= e: " + (d >= e));
        System.out.println("d <= e: " + (d <= e));

        // Operator logika
        boolean f = true;
        boolean g = false;

        System.out.println("f && g: " + (f && g));
        System.out.println("f || g: " + (f || g));
        System.out.println("!f: " + !f);

        // Operator unary
        int h = 5;
        System.out.println("h sebelum increment: " + h);
        h++; // Increment
        System.out.println("h setelah increment: " + h);
        h--; // Decrement
        System.out.println("h setelah decrement: " + h);

        boolean i = false;
        System.out.println("i sebelum ! : " + i);
        i = !i; // not
        System.out.println("i setelah ! : " + i);

        // Type data string
        String nama = "Andaru";
        System.out.println(nama);
        String nama2 = "Dayat";
        System.out.println("nama yang anda input adalah " + nama);

        String nama3 = "Andaru";
        int umur = 16;
        System.out.println("Nama: " + nama + ", Umur: " + umur);

        // Konversi tipe data
        String angkaString = "100";
        int angkaInt = Integer.parseInt(angkaString);
        double angkaDouble = Double.parseDouble(angkaString);

        System.out.println("Angka String: " + angkaString);

        System.out.println("Angka Int: " + angkaInt);

        System.out.println("Angka Double: " + angkaDouble);

        // Input dan Output
        Scanner inputUser = new Scanner(System.in);
        System.out.print("Masukkan nama Anda: ");
        String namaUser = inputUser.nextLine();

        System.out.print("Masukkan umur Anda: ");
        int umurUser = inputUser.nextInt();

        System.out.println("Halo, " + namaUser + "!");
        System.out.println("Umur Anda adalah " + umurUser + " tahun.");

        inputUser.close();

        // Array
        int[] angkaArray = new int[5];
        angkaArray[0] = 10;
        angkaArray[1] = 20;
        angkaArray[2] = 30;
        angkaArray[3] = 40;
        angkaArray[4] = 50;

        System.out.println("Elemen pertama: " + angkaArray[0]);


        int[] angkaArray2 = { 5, 10, 15, 20, 25 };
        System.out.println("Elemen kedua: " + angkaArray2[1]);

        // Percabangan if-else
        int nilai = 75;
        if (nilai >= 85) {
            System.out.println("Nilai Anda A, Mantap jiwa!");
        } else if (nilai >= 70) {
            System.out.println("Nilai Anda B, lumayan lah yaaa");
        } else if (nilai >= 55) {
            System.out.println("Nilai Anda C, cukup baik tapi perlu ditingkatkan");
        } else {
            System.out.println("Nilai Anda D, belajar lebih giat lagi!");
        }

        // Switch-case
        char grade = 'A';

        switch (grade) {
            case 'A':
                System.out.println("You cooking!");
                break;
            case 'B':
                System.out.println("Mantap!");
                break;
            case 'C':
                System.out.println("You cooked.");
                break;
            case 'D':
                System.out.println("Coba lagi dong, semangat.");
                break;
            default:
                System.out.println("invalid.");
                break;
        }

        // Perulangan for
        System.out.println("Perulangan for:");
        for (int j = 1; j <= 5; j++) {
            System.out.println("Perulangan ke-" + j);
        }

        // Perulangan while
        System.out.println("Perulangan while:");
        int k = 1;
        while (k <= 5) {
            System.out.println("Perulangan ke-" + k);
            k++;
        }

        // Perulangan do-while
        System.out.println("Perulangan do-while:");
        int l = 1;
        do {
            System.out.println("Perulangan ke-" + l);
            l++;
        } while (l <= 5);

        // Perulangan foreach
        System.out.println("Perulangan foreach:");
        String[] buah = { "Apel", "Pisang", "Mangga" };
        for (String b : buah) {
            System.out.println("Buah: " + b);
        }


        
    }
}