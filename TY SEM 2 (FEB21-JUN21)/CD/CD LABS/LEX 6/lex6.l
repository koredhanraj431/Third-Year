%{
#include <stdlib.h>
#include <stdio.h>
%}
digit [0-9]
number {digit}+
%%
{number} {
	 int n = atoi(yytext);
	 printf("\n\tHexadecimal notation of %s is %x",yytext, n);
}
%%

int yywrap(){return 1;}

int main() 
{
	 yyin = fopen("input.txt","r");
	 yylex();
	 return 0;
}