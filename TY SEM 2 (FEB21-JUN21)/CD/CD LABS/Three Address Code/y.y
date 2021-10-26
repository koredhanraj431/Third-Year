%{
#include<stdio.h>
#include<string.h>
#define MAX 30
char* makeexpr(char* op1, char operator, char* op2);
void threeAddr();
struct expr{char op1[MAX],op2[MAX],operator, res[MAX];};
int yylex();
void yyerror();
int indx=0;
char temp = 'A';
%}
%union{char tok[10];}
%token <tok> NUM VAR
%type <tok> exp stmt
%left '+' '-'
%left '*' '/'
%%
stmt: VAR '=' exp		{makeexpr((char*)$1,'=',(char*)$3); threeAddr();}
exp: exp '+' exp		{strcpy($$, makeexpr((char*)$1,'+',(char*)$3));}
   | exp '-' exp 		{strcpy($$, makeexpr((char*)$1,'-',(char*)$3));}
   | exp '*' exp 		{strcpy($$, makeexpr((char*)$1,'*',(char*)$3));}
   | exp '/' exp 		{strcpy($$, makeexpr((char*)$1,'/',(char*)$3));}
   | '(' exp ')' 		{strcpy($$, (char*)$2);}
   | NUM 				{strcpy($$, makeexpr((char*)$1,'\0',"\0"));}
   | VAR 				{strcpy($$, $1);}
%%
struct expr arr[25];
void yyerror(char *s){
	// printf("Error %s",s);
}

char* makeexpr(char* op1, char operator, char* op2){
	if(operator=='='){
		strcpy(arr[indx].res,op1);
		arr[indx].operator=operator;
		strcpy(arr[indx].op1,op2);
		arr[indx++].op2[0]='\0';
		return op1;	
	}

	if((op1[0]>='A' && op1[0]<='Z') || (op2[0]>='A' && op2[0]<='Z')){
	    temp--;
	}
    if((op1[0]>='A' && op1[0]<='Z') && (op2[0]>='A' && op2[0]<='Z')){
        //indx--;
        temp--;
        strcpy(arr[indx].op1,op1);
        arr[indx].operator=operator;
        strcpy(arr[indx].op2,op2);
        arr[indx].res[0]=temp;
        arr[indx++].res[1]='\0';
		
        temp++;
		return arr[indx-1].res;
    }
	
	strcpy(arr[indx].op1,op1);
	arr[indx].operator=operator;
	strcpy(arr[indx].op2,op2);
	arr[indx].res[0]=temp;
	arr[indx++].res[1]='\0';
	temp++;
	return arr[indx-1].res;
}

void threeAddr(){
	int i;
	for(i=0;i<indx;i++){
		if(arr[i].operator=='='){
			printf("%s := %s\n",arr[i].res,arr[i].op1);
		}
		else
			printf("%s := %s %c %s\n",arr[i].res,arr[i].op1,arr[i].operator,arr[i].op2);
	}
}


int main(){
	printf("Enter Expression:\n");
	yyparse();
	return 0;
}
