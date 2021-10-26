%{
#include<stdio.h>
%}

%%
[A-Z] printf("%c",yytext[0] - ('A' - 'a'));

"//".*\n printf("%s",yytext);

"/*" {
		 char c;
		 int done = 0;
		 printf("%s",yytext);
		 do {
		  while ((c = input()) != '*')
				printf("%c",c);
		  printf("%c",c);
		  while ((c = input()) == '*')
				printf("%c",c);
		  printf("%c",c);
		  if (c == '/') done = 1;
		 } while (!done);
	}
%%

int main()
{
  printf("Uppercase characters to lowercase except inside comments\n");
  yyin = fopen("input.txt","r");
  yylex();
  return 0;
}

int yywrap(){return 1;}