%{ 
int line_number = 1;  
%} 
  
line .*     
  
%% 
{line} { printf("%d %s", line_number++, yytext); }  
 
%% 
  
int yywrap(){}  
  
int main() 
{ 
	yyin = fopen("input.txt","r");
	yylex();   
  
return 0; 
}