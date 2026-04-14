public class Perkalian {

    // Method 1: perkalian 2 bilangan int
    static int perkalian(int a, int b) {
        return a * b;
    }

    // Method 2: perkalian 3 bilangan int
    static int perkalian(int a, int b, int c) {
        return a * b * c;
    }

    // Method 3: perkalian 2 bilangan double
    static double perkalian(double a, double b) {
        return a * b;
    }

    // Method 4 : perkalian 2 bilangan int dan float
    static float perkalian(int a, float b) {
        return a * b;
    }

    public static void main(String[] args) {
        System.out.println("Perkalian 2 angka bulat: " + perkalian(2, 3));
        System.out.println("Perkalian 3 angka bulat: " + perkalian(2, 3, 4));
        System.out.println("Perkalian 2 angka desimal: " + perkalian(2.5, 3.5));
        System.out.println("Perkalian 2 angka int dan float: " + perkalian(2, 3.5f));
    }
}