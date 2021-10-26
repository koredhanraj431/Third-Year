#include <iostream>
using namespace std;

int ternarySearch(int l, int r, int key, int ar[])

{
    while (r >= l)
    {

        int mid1 = l + (r - l) / 3;
        int mid2 = r - (r - l) / 3;

        if (ar[mid1] == key)
        {
            return mid1;
        }
        if (ar[mid2] == key)
        {
            return mid2;
        }

        if (key < ar[mid1])
        {
            r = mid1 - 1;
        }
        else if (key > ar[mid2])
        {

            l = mid2 + 1;
        }
        else
        {

            l = mid1 + 1;
            r = mid2 - 1;
        }
    }

    return -1;
}

int main()
{
    int l, r, p, key;

    int ar[100], n;
    cout << "Enter no of elements : ";
    cin >> n;
    cout << "Enter array elements : " << endl;
    for (int i = 0; i < n; i++)
        cin >> ar[i];

    cout << "Enter the element to be searched : ";
    cin >> key;

    l = 0;
    r = n;
    p = ternarySearch(l, r, key, ar);
    if(p!=-1)
    cout << "Index of " << key << " is " << p << endl;
    else   
    cout<<"Element "<<key<<" not found"<<endl;
}