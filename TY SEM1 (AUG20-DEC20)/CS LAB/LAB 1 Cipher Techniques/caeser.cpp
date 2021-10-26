#include <iostream>
using namespace std;

string encrypt(string text, int s)
{
    string result = "";


    for (int i = 0; i < text.length(); i++)
    {

        if (isupper(text[i]))
            result += char(int(text[i] + s - 65) % 26 + 65);

        else
            result += char(int(text[i] + s - 97) % 26 + 97);
    }

    return result;
}
string decrypt(string text, int s)
{
    string result = "";

    for (int i = 0; i < text.length(); i++)
    {

        if (isupper(text[i]))
            result += char(int(text[i] + s - 65) % 26 + 65);

        else
            result += char(int(text[i] + s - 97) % 26 + 97);
    }

    return result;
}

int main()
{
    string text;
    cout << "Enter the plain text : ";
    cin >> text;
    int s;
    cout << "Enter the shift value : ";
    cin >> s;
    string cipher = encrypt(text, s);
    cout << "\n-----------------------------------------";
    cout << "Text : " << text;
    cout << "\nShift: " << s;
    cout << "\nCipher: " << cipher;

    cout << "\nText after decryption : " << decrypt(cipher, 26 - s);
    cout << "\n-----------------------------------------";

    return 0;
}