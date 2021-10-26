#include<bits/stdc++.h>
using namespace std;
int josephus(int n)
{
    if(n==0 || n==1)
        return n;
    int ans;
    if(n%2==0)
        ans = 2*josephus(n/2)-1;
    else
        ans = 2*josephus(n/2)+1;
    return ans;
}
int main()
{
        int n;
        cout<<"Enter the number : ";
        cin>>n;
        int ans = josephus(n);
        cout<<"Man who is alive: "<<ans<<endl;
    
}