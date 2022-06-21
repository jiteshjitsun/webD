%{
	#include<stdio.h>
%}

DIGIT [0-9]

%%
{DIGIT}* {ECHO;printf("integer");}
{DIGIT}*?\.{DIGIT}* {ECHO;printf("Float");}
%%

int yywrap(){}

int main(){
	yylex();
}
