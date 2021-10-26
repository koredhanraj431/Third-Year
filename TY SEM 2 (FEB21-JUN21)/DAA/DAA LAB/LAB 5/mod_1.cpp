#include<bits/stdc++.h>
using namespace std;

int FME(int a,int b,int n)
{
    if(b==0)
        return 1;
    else if(b==1)
        return a;
    int pow = FME(a,b/2,n);
    if(b%2==0)
        return ((pow%n)*(pow%n))%n;
    else
        return ((pow%n)*a*(pow%n))%n;
}
int main()
{
        int a,b,n;
        cout<<"Enter the nos a,b & n : ";
        cin>>a>>b>>n;
        int ans = FME(a,b,n);
        cout<<"Fast Modular Expression is : "<<ans<<endl;
}