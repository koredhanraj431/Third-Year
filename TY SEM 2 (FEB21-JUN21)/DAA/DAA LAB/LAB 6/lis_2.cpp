#include<bits/stdc++.h>
using namespace std;

void reverse(int* c,int cnt)
{
    int i=0,j=cnt-1;
    while(i<j)
    {
        swap(c[i],c[j]);
        i++;
        j--;
    }

}
void solve(int *a,int n)
{
    int *b = new int[n];
    for(int i=0;i<n;i++)
        b[i] = 1;
    for(int i=1;i<n;i++)
    {
        for(int j=i-1;j>=0;j--)
        {
            if(a[j]>=a[i])
                continue;
            int temp = b[j]+1;
            if(temp>b[i])
                b[i] = temp;
        }
    }
    //cout<<endl;
    int max = 0;
    for(int i=0;i<n;i++)
        if(b[i]>max)
            max = b[i];
    cout<<max<<endl;
    int temp = max,cnt=0,k=0;
    int *c = new int[n];
    for(int i=n-1;i>=0;i--)
        if(temp==b[i])
        {
            cnt++;
            c[k++] = a[i];
            temp--;
        }
    reverse(c,cnt);
    cout<<"\tLongest Increasing Subsequence : ";
    for(int i=0;i<cnt;i++)
        cout<<c[i]<<" ";
    cout<<endl;
}
int main()
{
    int n;
    cout<<"Enter the total no of elements : ";
    cin>>n;
    int *a = new int[n];
    cout<<"Enter the elements : "<<endl;
    for(int i=0;i<n;i++)
        cin>>a[i];
    cout<<"\n\tLength of Longest Increasing Subsequence is : ";
    solve(a,n);
    delete []a;
    
}