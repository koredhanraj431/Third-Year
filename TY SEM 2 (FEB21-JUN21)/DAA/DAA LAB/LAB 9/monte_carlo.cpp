#include<bits/stdc++.h>

using namespace std;

int main()
{
    int n;
    cout<<"\n\tEnter the total no of elements : ";
    cin>>n;
    int *a = new int[n];
    cout<<"\n\tEnter the elements : ";
    for(int i=0;i<n;i++)
        cin>>a[i];
    int cnt=0,ele;
    while(cnt<100)
    {
        int idx = rand()%n;
        ele = a[idx];
        int c=0;
        for(int i=0;i<n;i++)
        {
            if(a[i]==ele)
                c++;
        }
        if(c>n/2)
            break;
        cnt++;
    }
if(cnt<100)
    cout<<"\n\tMajority Element is : "<<ele;
else
	cout<<"\n\tFailure";

    cout<<"\n\n";
}
