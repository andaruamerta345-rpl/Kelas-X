#include <iostream>
using namespace std;

int main() {
    // ===== FOR LOOP =====
    cout << "Loop for:\n";
    for (int a = 1; a <= 5; a++) {
        cout << "Perulangan ke-" << a << endl;
    }

    // ===== WHILE LOOP =====
    cout << "\nLoop while:\n";
    int b = 1;
    while (b <= 5) {
        cout << "Perulangan ke-" << b << endl;
        b++;
    }

    // ===== DO-WHILE LOOP =====
    cout << "\nLoop do-while:\n";
    int c = 1;
    do {
        cout << "Perulangan ke-" << c << endl;
        c++;
    } while (c <= 5);

    return 0;
}
