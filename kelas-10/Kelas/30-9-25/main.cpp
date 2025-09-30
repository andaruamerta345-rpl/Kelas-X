#include <iostream>
using namespace std;

string getZodiak(int tanggal, int bulan) {
    // validasi dulu
    if (bulan < 1 || bulan > 12) {
        return "Nulis bulan yang bener napa!";
    } else if (tanggal < 1 || tanggal > 31) {
        return "Nulis tanggal yang bener napa!";
    }

    // kalau valid, baru cek zodiak
    if ((bulan == 3 && tanggal >= 21) || (bulan == 4 && tanggal <= 19)) {
        return "Aries";
    } else if ((bulan == 4 && tanggal >= 20) || (bulan == 5 && tanggal <= 20)) {
        return "Taurus";
    } else if ((bulan == 5 && tanggal >= 21) || (bulan == 6 && tanggal <= 20)) {
        return "Gemini";
    } else if ((bulan == 6 && tanggal >= 21) || (bulan == 7 && tanggal <= 22)) {
        return "Cancer";
    } else if ((bulan == 7 && tanggal >= 23) || (bulan == 8 && tanggal <= 22)) {
        return "Leo";
    } else if ((bulan == 8 && tanggal >= 23) || (bulan == 9 && tanggal <= 22)) {
        return "Virgo";
    } else if ((bulan == 9 && tanggal >= 23) || (bulan == 10 && tanggal <= 22)) {
        return "Libra";
    } else if ((bulan == 10 && tanggal >= 23) || (bulan == 11 && tanggal <= 21)) {
        return "Scorpio";
    } else if ((bulan == 11 && tanggal >= 22) || (bulan == 12 && tanggal <= 21)) {
        return "Sagitarius";
    } else if ((bulan == 12 && tanggal >= 22) || (bulan == 1 && tanggal <= 19)) {
        return "Capricorn";
    } else if ((bulan == 1 && tanggal >= 20) || (bulan == 2 && tanggal <= 18)) {
        return "Aquarius";
    } else if ((bulan == 2 && tanggal >= 19) || (bulan == 3 && tanggal <= 20)) {
        return "Pisces";
    } else {
        return "Tanggal gak masuk akal coy!";
    }
}

string getQuotes(string zodiak) {
    if (zodiak == "Aries") {
        return "Jangan takut gagal, karena setiap langkahmu adalah api semangat!";
    } else if (zodiak == "Taurus") {
        return "Kesabaranmu adalah kunci menuju kesuksesan.";
    } else if (zodiak == "Gemini") {
        return "Kreativitasmu membuat dunia jadi lebih berwarna.";
    } else if (zodiak == "Cancer") {
        return "Ikuti kata hatimu, karena ia tahu jalan yang benar.";
    } else if (zodiak == "Leo") {
        return "Bersinarlah, dunia butuh cahaya dari keberanianmu.";
    } else if (zodiak == "Virgo") {
        return "Detail kecil yang kamu perhatikan bisa jadi hal besar untuk orang lain.";
    } else if (zodiak == "Libra") {
        return "Keseimbangan adalah kekuatanmu untuk menghadapi hidup.";
    } else if (zodiak == "Scorpio") {
        return "Jangan remehkan tekadmu, sekali fokus kamu bisa mengubah segalanya.";
    } else if (zodiak == "Sagitarius") {
        return "Hidup adalah petualangan, teruslah jelajahi tanpa ragu.";
    } else if (zodiak == "Capricorn") {
        return "Kerja kerasmu akan membawamu ke puncak.";
    } else if (zodiak == "Aquarius") {
        return "Ide-idemu bisa menginspirasi banyak orang.";
    } else if (zodiak == "Pisces") {
        return "Imajinasi dan hatimu membuatmu istimewa.";
    } else {
        return "Ga ketemu zodiaknya, mungkin kamu alien?";
    }
}

int main() {
    int tanggal, bulan, tahun;

    cout << "Masukkan tanggal lahir: ";
    cin >> tanggal;
    cout << "Masukkan bulan lahir (1-12): ";
    cin >> bulan;
    cout << "Masukkan tahun lahir: ";
    cin >> tahun;

    string zodiak = getZodiak(tanggal, bulan);
    cout << "\nTanggal lahir kamu: " << tanggal << "-" << bulan << "-" << tahun << endl;
    cout << "Zodiak kamu adalah: " << zodiak << endl;
    cout << "Quotes buat kamu: " << getQuotes(zodiak) << endl;

    return 0;
}
