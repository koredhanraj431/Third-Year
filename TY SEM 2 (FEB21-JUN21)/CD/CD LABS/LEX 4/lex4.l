%{  
int lines=0, words=0, chars=0;
%} 
  
%% 
\n lines++;

[^ \n\t]+ {words++, chars=chars+yyleng;}
. {chars++;}
%% 
  

int main() 
{ 
    yyin = fopen("input.txt","r");
	yylex();   
    printf("\tNo. of lines : %d\n",lines );
    printf("\tNo. of characters : %d\n",chars ); 
    printf("\tNo. of words : %d\n",words );          
} 

int yywrap(){return 1;}