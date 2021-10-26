#include <stdio.h>

int main()
{
    int N, i;
    printf("\n\t ---------------------------- FCFS ---------------------------- \n");
    printf("\nEnter no of processes : ");
    scanf("%d", &N);
    int AT[N], BT[N], FT[N], WT[N], TT[N];
    
    printf("Enter the arrival time of processes : ");
    for (i = 0; i < N; i++)
    {
        scanf("%d", &AT[i]);
    }

    printf("Enter the service time of processes : ");
    for (i = 0; i < N; i++)
    {
        scanf("%d", &BT[i]);
    }

    FT[0] = AT[0] + BT[0];
    for (i = 1; i < N; i++)
    {
        FT[i] = FT[i - 1] + BT[i];
    }
    for (i = 0; i < N; i++)
    {
        TT[i] = FT[i] - AT[i];
    }
    for (i = 0; i < N; i++)
    {
        WT[i] = TT[i] - BT[i];
    }
    printf("\n\n--------------------------------------------------------------------------------------------------------------------");
    printf("\n\n\tProcesses\tArrrival Time\tBurst Time\tCompletion Time\t\tTurnaround Time\t\tWaiting Time\n\n");
    for (i = 0; i < N; i++)
    {
        printf(" \t%d\t\t\t%d\t\t%d\t\t%d\t\t\t%d\t\t%d", i + 1, AT[i], BT[i], FT[i], TT[i], WT[i]);
        printf("\n");
    }

    printf("\n");
    float TT_sum = 0;
    float WT_sum = 0;
    float TT_AVG, WT_AVG;
    for (i = 0; i < N; i++)
    {
        TT_sum = TT_sum + TT[i];
    }

    TT_AVG = TT_sum / N;
    for (i = 0; i < N; i++)
    {
        WT_sum = WT_sum + WT[i];
    }
    WT_AVG = WT_sum / N;
    printf("--------------------------------------------------------------------------------------------------------------------");
    printf("\n\n\tAverage TT = %f \t\tAverage WT = %f\n\n", TT_AVG, WT_AVG);
    printf("--------------------------------------------------------------------------------------------------------------------\n\n");

    return 0;
}