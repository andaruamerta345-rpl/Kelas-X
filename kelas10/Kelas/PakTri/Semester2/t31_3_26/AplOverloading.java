public class AplOverloading {
    public static void main(String[] args) {
        Overloading obj = new Overloading();
        obj.DataKelas("X - RPL");
        obj.DataKelas("XI - RPL", 36);

        space obj3 = new space();
        obj3.spasi("");

        obj.namaKeren("Dayt", 17);
        obj.namaKeren("7arzz", 17);

        space obj4 = new space();
        obj4.spasi("");

        loading obj2 = new loading();
        obj2.tampilData("ahmad", 17);
        obj2.tampilData("amerta", 17);

    }   
}