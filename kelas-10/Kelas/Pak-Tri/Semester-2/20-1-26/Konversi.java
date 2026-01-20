public class konversi {
    public static void main(String[] args) {
        String a = "123";
        String b = Integer.valueOf(a);

        System.out.println("a: " + a);
        System.out.println("b: " + b);

        // konversi int -> double
        double nilaiDouble = 9.78;
        int nilaiInt = (int) nilaiDouble;
        System.out.println("nilaiDouble: " + nilaiDouble);
        System.out.println("nilaiInt: " + nilaiInt);

        // konversi double -> int
        int nilaiInt2 = 9;
        double nilaiDouble2 = (double) nilaiInt2;
        System.out.println("nilaiInt2: " + nilaiInt2);
        System.out.println("nilaiDouble2: " + nilaiDouble2);


        // konversi string -> int
        String nilaiString = "123";
        int nilaiInt5 = Integer.parseInt(nilaiString);
        System.out.println("nilaiString: " + nilaiString);
        System.out.println("nilaiInt5: " + nilaiInt5);

        // konversi int -> string
        int nilaiInt6 = 456;
        String nilaiString2 = String.valueOf(nilaiInt6);
        System.out.println("nilaiInt6: " + nilaiInt6);
        System.out.println("nilaiString2: " + nilaiString2);




    }
}
