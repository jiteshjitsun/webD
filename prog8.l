%{
	#include<stdio.h>
%}

start \/\*
end \*\/

%%
"<"[^>]*> 

\<(.*)\> {fprintf(yyout,"%s",yytext);}
. {}
%%

int yywrap() {return 1;}

int main(){
	extern FILE *yyin,*yyout;
	yyin = fopen("input1.txt","r");
	yyout = fopen("out.txt","w");
	yylex();
	return 0;
}
