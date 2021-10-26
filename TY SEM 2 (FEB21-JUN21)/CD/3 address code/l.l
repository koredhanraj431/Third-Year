%{
#include<stdio.h>
#include "y.tab.h"
%}

%%
[0-9]		{yylval.tok=yytext[0]; return NUM;}
[a-z] 		{yylval.tok=yytext[0]; return VAR;}
\n 			{return 0;}
[ \t]*		{}
.			{return yytext[0];}
%%

int yywrap(){return 1;}