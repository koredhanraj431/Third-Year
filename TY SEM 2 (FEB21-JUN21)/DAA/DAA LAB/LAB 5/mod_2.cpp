#include <bits/stdc++.h>
using namespace std;

long long FME(long long a, long long b, long long n)
{
    long long res = 1;
    while (b > 0)
    {
        if (b & 1)
        {
            res = (res * a) % n;
        }
        a = (a * a) % n;
        b = b >> 1;
    }
    return res;
}
int main()
{

    long long a, b, n;
    cout << "Enter the nos a,b & n : ";
    cin >> a >> b >> n;
    long long ans = FME(a, b, n);
    cout << "Fast Modular Expression is : " << ans << endl;
}