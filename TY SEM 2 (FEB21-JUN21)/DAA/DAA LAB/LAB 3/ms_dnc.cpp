#include <bits/stdc++.h>
using namespace std;
int max_num(vector<int> v, vector<int> arr, int n, int m)
{
    if ((m - n + 1) % 2 != 0)
    {
        int l = v[0];
        int count1 = 0;
        for (int i = 0; i < arr.size(); i++)
        {
            if (arr[i] == l)
                count1++;
        }
        if (count1 > (arr.size() - 1) / 2)
        {
            return (l);
        }
        v.erase(v.begin());
        m--;
    }
    if ((m - n + 1) == 0)
        return (-1);
    if ((m - n + 1) == 2 and v[m] == v[n])
    {
        return (v[m]);
    }
    else if ((m - n + 1) == 2 and v[m] != v[n])
        return (-1);
    else
    {
        int p, q;
        int k = (m - n) / 2;
        p = max_num(v, arr, n, k);
        q = max_num(v, arr, k + 1, m);
        if (p == -1 and q == -1)
            return (-1);
        else if (p == -1 and q != -1)
        {
            int count = 0;
            for (int i = n; i <= m; i++)
            {
                if (q == v[i])
                    count++;
            }
            if (count > (m - n + 1) / 2)
                return (q);
            else
                return (-1);
        }
        else if (p != -1 and q == -1)
        {
            int count = 0;
            for (int i = n; i <= m; i++)
            {
                if (p == v[i])
                    count++;
            }
            if (count > (m - n + 1) / 2)
                return (p);
            else
                return (-1);
        }
        else
        {
            int count1 = 0, count2 = 0;
            for (int i = n; i <= m; i++)
            {
                if (p == v[i])
                    count1++;
                else if (q == v[i])
                    count2++;
            }
            if (count1 > count2 and count1 > (m - n + 1) / 2)
                return (p);
            else if (count2 > count1 and count2 > (m - n + 1) / 2)
                return (q);
            else
                return (-1);
        }
    }
}
int main()
{
    int n;
    cout << "\nEnter the no of elements in an array : ";
    cin >> n;
    vector<int> v, arr;
    int num;
        cout << "\nEnter elements in an array : ";
    for (int i = 0; i < n; i++)
    {
        cin >> num;
        v.push_back(num);
    }
    arr = v;
    int k = max_num(v, arr, 0, n - 1);
    if (k == -1)
        cout << "\nNo majority element!\n" << endl;
    else
        cout << "\nMajority element is : " << k;
}