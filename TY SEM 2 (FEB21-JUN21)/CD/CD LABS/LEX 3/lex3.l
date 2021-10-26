%{
#include<stdio.h>
%}

%%
a.*        {printf("\t%s",yytext);}
.*a        {printf("\t%s",yytext);}
.+         {printf("");}

%%


int main()
{
    printf("\n\nSelecting only lines that begin or end with the letter a \n");
    extern  FILE *yyin;
    yyin = fopen("input.txt","r");

	yylex();
	return 0;
}

int yywrap(){
return 1;
}