%{
	#include<stdio.h>
	int count = 0;
%}

op [+-*/]
letter [a-zA-Z]
digit [0-9]
id {letter}*|({letter}{digit})+
notid ({digit}{letter})+

%%
[\n\t]+
("int")|("float")|("char")|("case")|("default")|("if")|("for")|("printf")|("scanf")  {printf("%s is a keyword\n", yytext);}
{id} {printf("%s is an identifier\n",yytext); count++;}
{notid} {printf("%s is not an identifier\n",yytext);}
%%

int yywrap(){return 1;}

int main(){
	yylex();
	printf("total identifiers %d", count);
	return 0;
}
	
	
