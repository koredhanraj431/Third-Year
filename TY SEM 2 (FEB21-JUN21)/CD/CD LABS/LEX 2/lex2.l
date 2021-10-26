%{ 
int line_number = 1;  
%} 
  
line .*  
  
%% 
{line} { printf("\tLine no : %d \t%s", line_number++, yytext); }  
 
%% 
  
int yywrap(){return 1;}  
  
int main() 
{ 
	yyin = fopen("input.txt","r");
	yylex();
    return 0;
}