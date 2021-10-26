#include <bits/stdc++.h>
using namespace std;

void findMajority(int arr[], int n)
{
    int maxCount = 0;
    int index = -1;
    for (int i = 0; i < n; i++)
    {
        int count = 0;
        for (int j = 0; j < n; j++)
        {
            if (arr[i] == arr[j])
                count++;
        }

        // update maxCount if count of
        // current element is greater
        if (count > maxCount)
        {
            maxCount = count;
            index = i;
        }
    }

    // if maxCount is greater than n/2
    if (maxCount > n / 2)
        cout << "\nMajority Element is " << arr[index] << "\t Element count is "<<maxCount<<"\n\n";

    else
        cout << "\nNo Majority Element found!\n\n";
}

int main()
{
    int n;
    cout << "\nEnter the no of elements in an array : ";
    cin >> n;
    int a[n];
    cout << "\nEnter elements in an array : ";
    for (int i = 0; i < n; i++)
    {
        cin >> a[i];
    }
    findMajority(a, n);

    return 0;
}