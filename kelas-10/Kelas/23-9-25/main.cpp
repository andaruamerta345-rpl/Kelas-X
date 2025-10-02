#include <iostream>
using namespace std;

int main()
{
    int nilai;
    cout << "Masukkan Nilai Anda : ";
    cin >> nilai;
    // nilai = 0;
    // if (nilai >= 90) {
    //     cout << "Predikat anda A dengan nilai : " << nilai << endl;
    // }else if (nilai >= 80) {
    //     cout << "Predikat anda B dengan nilai : " << nilai << endl;
    // }else if (nilai >= 70) {
    //     cout << "Predikat anda C dengan nilai : " << nilai << endl;
    // }else if (nilai >= 60) {
    //     cout << "Predikat anda D dengan nilai : " << nilai << endl;
    // }else if (nilai == 0){
    //     cout << "Bang?? Sumpah belajar lagi bang, nilai lu " << nilai << " lhoo, parah banget "<< endl;
    // }else {
    //     cout << "Predikat anda E dengan nilai : " << nilai << endl;
    // }

    if (nilai < 0 && nilai > 100) {
        cout << "Emang ada nilai segitu?? yang bener ajaa bangg" << endl;
    } if (nilai ==  100) {
        cout << "Selamat nilai anda SEMPURNA : "<< nilai << "Kelas bang, pertahanin yaa" << endl;
    } if (nilai >= 90) {
        cout << "Predikat anda A dengan nilai : " << nilai << endl;
    } if (nilai >= 80) {
        cout << "Predikat anda B dengan nilai : " << nilai << endl;
    } if (nilai >= 70) {
        cout << "Predikat anda C dengan nilai : " << nilai << endl;
    } if (nilai >= 60) {
        cout << "Predikat anda D dengan nilai : " << nilai << endl;
    } if (nilai == 0){
        cout << "Bang?? Sumpah belajar lagi bang, nilai lu " << nilai << " lhoo, parah banget "<< endl;
    }else {
        cout << "Predikat anda E dengan nilai : " << nilai << endl;
    }

    return 0;
}


