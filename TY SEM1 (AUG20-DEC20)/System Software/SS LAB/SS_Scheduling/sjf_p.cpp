#include <iostream>

using namespace std;
int main()
{
    int a[10], b[10], x[10];
    int waiting[10], turnaround[10], completion[10];
    int i, j, smallest, count = 0, time, n;
    double avg = 0, tt = 0, end;
    cout << "\n\t ---------------------------- SJF Preemptive ---------------------------- \n";

    cout << "\nEnter the number of Processes: ";
    cin >> n;
    cout << "\nEnter arrival time of processess : ";

    for (i = 0; i < n; i++)
    {
        cin >> a[i];
    }
    cout << "\nEnter burst time of processess : ";

    for (i = 0; i < n; i++)
    {
        cin >> b[i];
    }
    for (i = 0; i < n; i++)
        x[i] = b[i];

    b[9] = 9999;
    for (time = 0; count != n; time++)
    {
        smallest = 9;
        for (i = 0; i < n; i++)
        {
            if (a[i] <= time && b[i] < b[smallest] && b[i] > 0)
                smallest = i;
        }
        b[smallest]--;

        if (b[smallest] == 0)
        {
            count++;
            end = time + 1;
            completion[smallest] = end;
            waiting[smallest] = end - a[smallest] - x[smallest];
            turnaround[smallest] = end - a[smallest];
        }
    }
    cout << "\n\n--------------------------------------------------------------------------------------------------------------------";
    cout << "\n\n       Process"
         << "\t"
         << "   burst-time"
         << "\t"
         << "arrival-time"
         << "\t"
         << "waiting-time"
         << "\t"
         << "turnaround-time"
         << "\t"
         << "completion-time\n"
         << endl;
    for (i = 0; i < n; i++)
    {
        cout << "\tp" << i + 1 << "\t\t" << x[i] << "\t\t" << a[i] << "\t\t" << waiting[i] << "\t\t" << turnaround[i] << "\t\t" << completion[i] << endl;
        avg = avg + waiting[i];
        tt = tt + turnaround[i];
    }
    cout << "\n\n--------------------------------------------------------------------------------------------------------------------";
    cout << "\n\n\tAverage waiting time = " << avg / n << " \t\t Average Turnaround time = " << tt / n << endl;
    cout << "\n--------------------------------------------------------------------------------------------------------------------\n\n";
}
