#include<bits/stdc++.h>
using namespace std;

bool helper(pair<int,int> p1,pair<int,int> p2)
{
    return p1.second<p2.second;
}
int main()
{
    int n;
    cout<<"Enter the no. of jobs : ";
    cin>>n;
     vector<pair<int,int>> v(n);
    cout<<"Enter the starting time and ending time of each job:  "<<endl;
    for(int i=0;i<n;i++)
    {
        cout<<"Job "<<i<<" : ";
        cin>>v[i].first>>v[i].second;
    }
    sort(v.begin(),v.end(),helper);
    cout<<"The job sequence should be : "<<endl;
    cout<<"Starting Time "<<" Ending Time"<<endl;
    cout<<v[0].first<<'\t'<<v[0].second<<endl;
    int temp = v[0].second;
    for(int i=1;i<n;i++)
    {
        if(v[i].first>=temp)
        {
             cout<<v[i].first<<'\t'<<v[i].second<<endl;
             temp = v[i].second;
        }
    }
}