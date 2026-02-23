#include <iostream>
using namespace std;

int main()
{
    // int nilai;
    // cin >> nilai;
    // if (nilai >= 75) {
    //     cout << "Selamat Anda Lulus" << endl;
    // }else{
    //     cout << "Maaf Anda Tidak Lulus" << endl;
    // }
    
    // int beli;
    // float potongan;
    // cin >> beli;
    // if (beli >= 1000000) {
    //     potongan = 0.02 * beli;
    //     cout << "Anda Mendapatkan Diskon 2%" << endl;
    // }else{
    //     potongan = 0.05 * beli;
    //     cout << "Anda Mendapatkan Diskon 5%" << endl;
    // }

    int nilai;
    cout << "Masukkan Nilai Anda : ";
    cin >> nilai;

    if (nilai < 0 || nilai > 100) {
        cout << "Emang ada nilai segitu?? yang bener ajaa bangg" << endl;
    } else if (nilai ==  100) {
        cout << "Selamat anda Lulus dengan nilai SEMPURNA" << endl;
    } else if (nilai >= 75) {
        cout << "Selamat anda Lulus dengan nilai " << nilai << endl;
    }else{
        cout << "Selamat, nilai mu " << nilai << " anda tidak lulus dan akan mendapat hadiah dari orang tua anda" << endl;
    }

    return 0;
}


