#include <bits/stdc++.h>
using namespace std;

int main()
{
    int n;
    cout << "Enter the number : ";
    cin >> n;
    int m = 1, cnt = 1;
    ;
    while (m < n)
        m = pow(2, cnt++);
    int ans;
    if (n == pow(2, cnt - 1))
        ans = 2 * (n - m) + 1;
    else
    {
        m /= 2;
        ans = 2 * (n - m) + 1;
    }
    cout << "Man who is alive: " << ans << endl;
}
