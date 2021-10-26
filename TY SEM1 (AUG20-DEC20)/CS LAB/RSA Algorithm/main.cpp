#include<iostream>
#include<math.h>

using namespace std;

//to find gcd
int gcd(int a, int h)
{
    int temp;
    while (1)
    {
        temp = a % h;
        if (temp == 0)
            return h;
        a = h;
        h = temp;
    }
}

int main()
{
    
    double p;
    double q;
    cout<<"\n-----------------------------------------------------------";
     
     cout << "\n\nEnter the two prime numbers : ";
    cin >> p >> q; 
    double n = p * q;
    double count;
    double totient = (p - 1) * (q - 1);

    //public key
    double e = 2;

//for checking co-prime which satisfies e>1
    while (e < totient) {
        count = gcd(e, totient);
        if (count == 1)
            break;
        else
            e++;
    }

   //private key
    double d;

   //k can be any arbitrary value
    double k = 2;

   
    double d1 = 1 / e;
    
    d = fmod(d1, totient);
    double msg;
    cout << "\n\nEnter message data : ";
    cin >> msg;
    double c = pow(msg, e);
    double m = pow(c, d);
    c = fmod(c, n);
       m=fmod(m,n);
 cout<<"\n\t\t-----------------------------------------------------------";
    cout<<"\n\n\t\t\t\t Message data = "<<msg;
    cout<<"\n\n\t\t\t\t First Prime No : "<<"p = "<<p;
    cout<<"\n\n\t\t\t\t Second Prime No : "<<"q = "<<q;
    cout<<"\n\n\t\t\t\t Modulus : "<<"n = pq = "<<n;
    cout<<"\n\n\t\t\t\t Totient = "<<totient;
    cout<<"\n\n\t\t\t\t Public Key (Encrypt) : "<<"e = "<<e;
    cout<<"\n\n\t\t\t\t Private Key (Decrypt) : "<<"d = "<<d;
    cout<<"\n\n\t\t\t\t Encrypted data = "<<c;
    cout<<"\n\n\t\t\t\t Original Message sent = "<<m;
  cout<<"\n\n\t\t-----------------------------------------------------------\n\n";

    return 0;
}